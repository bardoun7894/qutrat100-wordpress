// Quiz State Variables
let quizData = [];
let currentQuestionIndex = 0;
let userAnswers = [];
let startTime;
let timerInterval;
let timeRemaining = 30 * 60; // 30 minutes in seconds

// Quiz functionality - Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('startQuiz').addEventListener('click', startQuiz);
    document.getElementById('nextBtn').addEventListener('click', nextQuestion);
    document.getElementById('prevBtn').addEventListener('click', prevQuestion);
    document.getElementById('finishBtn').addEventListener('click', finishQuiz);
    document.getElementById('retakeQuiz').addEventListener('click', retakeQuiz);
});

// Load questions from MySQL database
async function loadQuestions() {
    try {
        const response = await fetch('/api/get_questions.php');
        if (response.ok) {
            const questions = await response.json();
            if (questions && questions.length > 0) {
                quizData = questions;
                return true;
            }
        }
        throw new Error('Failed to load questions');
    } catch (error) {
        console.error('Error loading questions:', error);
        return false;
    }
}

async function startQuiz() {
    // Load questions first
    const loaded = await loadQuestions();
    if (!loaded) {
        alert('عذراً، حدث خطأ في تحميل الأسئلة. يرجى المحاولة مرة أخرى.');
        return;
    }

    const quizHeader = document.querySelector('.quiz-header');
    const quizProgress = document.getElementById('quizProgress');
    const quizQuestion = document.getElementById('quizQuestion');
    
    if (quizHeader) quizHeader.style.display = 'none';
    if (quizProgress) quizProgress.style.display = 'block';
    if (quizQuestion) quizQuestion.style.display = 'block';
    
    startTime = new Date();
    startTimer();
    showQuestion(0);
}

function startTimer() {
    timerInterval = setInterval(() => {
        timeRemaining--;
        updateTimerDisplay();
        
        if (timeRemaining <= 0) {
            finishQuiz();
        } else if (timeRemaining <= 300) { // Last 5 minutes
            document.getElementById('timer').classList.add('warning');
        }
    }, 1000);
}

function updateTimerDisplay() {
    const minutes = Math.floor(timeRemaining / 60);
    const seconds = timeRemaining % 60;
    const timerElement = document.getElementById('timer');
    if (timerElement) {
        timerElement.textContent = 
            `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }
}

function showQuestion(index) {
    if (index < 0 || index >= quizData.length) return;
    
    currentQuestionIndex = index;
    const question = quizData[index];
    
    // Update progress
    const progressText = document.getElementById('progressText');
    const progressFill = document.getElementById('progressFill');
    if (progressText) progressText.textContent = `السؤال ${index + 1} من ${quizData.length}`;
    if (progressFill) progressFill.style.width = `${((index + 1) / quizData.length) * 100}%`;
    
    // Update question display
    const questionNumber = document.getElementById('questionNumber');
    const questionCategory = document.getElementById('questionCategory');
    const questionText = document.getElementById('questionText');
    
    if (questionNumber) questionNumber.textContent = `السؤال ${index + 1}`;
    if (questionCategory) questionCategory.textContent = question.category;
    if (questionText) questionText.textContent = question.question;
    
    // Handle question image
    const imageContainer = document.getElementById('questionImage');
    if (imageContainer) {
        if (question.image && question.image.trim() !== '') {
            imageContainer.innerHTML = `<img src="${question.image}" alt="صورة السؤال" class="question-image">`;
            imageContainer.style.display = 'block';
        } else {
            imageContainer.style.display = 'none';
        }
    }
    
    // Update options
    const optionsContainer = document.getElementById('options');
    if (optionsContainer) {
        optionsContainer.innerHTML = question.options.map((option, i) => `
            <div class="option" onclick="selectOption(${i})">
                <span class="option-letter">${String.fromCharCode(65 + i)}</span>
                <span class="option-text">${option}</span>
            </div>
        `).join('');
    }
    
    // Update navigation buttons
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const finishBtn = document.getElementById('finishBtn');
    
    if (prevBtn) prevBtn.style.display = index > 0 ? 'block' : 'none';
    if (nextBtn) nextBtn.style.display = index < quizData.length - 1 ? 'block' : 'none';
    if (finishBtn) finishBtn.style.display = index === quizData.length - 1 ? 'block' : 'none';
    
    // Restore previous answer if exists
    if (userAnswers[index] !== undefined) {
        selectOption(userAnswers[index], false);
    }
}

function selectOption(optionIndex, updateAnswer = true) {
    // Remove previous selection
    document.querySelectorAll('.option').forEach(opt => opt.classList.remove('selected'));
    
    // Add selection to clicked option
    const options = document.querySelectorAll('.option');
    if (options[optionIndex]) {
        options[optionIndex].classList.add('selected');
    }
    
    if (updateAnswer) {
        userAnswers[currentQuestionIndex] = optionIndex;
    }
    
    // Enable next/finish button
    const nextBtn = document.getElementById('nextBtn');
    const finishBtn = document.getElementById('finishBtn');
    if (nextBtn) nextBtn.disabled = false;
    if (finishBtn) finishBtn.disabled = false;
}

function nextQuestion() {
    if (currentQuestionIndex < quizData.length - 1) {
        showQuestion(currentQuestionIndex + 1);
    }
}

function prevQuestion() {
    if (currentQuestionIndex > 0) {
        showQuestion(currentQuestionIndex - 1);
    }
}

function finishQuiz() {
    clearInterval(timerInterval);
    
    // Calculate results
    let correctCount = 0;
    quizData.forEach((question, index) => {
        if (userAnswers[index] === question.correct) {
            correctCount++;
        }
    });
    
    const score = Math.round((correctCount / quizData.length) * 100);
    const timeTaken = Math.round((new Date() - startTime) / 1000); // in seconds
    
    // Show results
    const quizProgress = document.getElementById('quizProgress');
    const quizQuestion = document.getElementById('quizQuestion');
    const quizResults = document.getElementById('quizResults');
    
    if (quizProgress) quizProgress.style.display = 'none';
    if (quizQuestion) quizQuestion.style.display = 'none';
    if (quizResults) quizResults.style.display = 'block';
    
    const finalScore = document.getElementById('finalScore');
    const correctAnswers = document.getElementById('correctAnswers');
    const totalQuestions = document.getElementById('totalQuestions');
    const timeTakenElement = document.getElementById('timeTaken');
    
    if (finalScore) finalScore.textContent = `${score}%`;
    if (correctAnswers) correctAnswers.textContent = correctCount;
    if (totalQuestions) totalQuestions.textContent = quizData.length;
    if (timeTakenElement) timeTakenElement.textContent = formatTime(timeTaken);
    
    // Set message based on score
    let message = '';
    if (score >= 90) {
        message = 'ممتاز! أداء استثنائي';
    } else if (score >= 80) {
        message = 'جيد جداً! أداء رائع';
    } else if (score >= 70) {
        message = 'جيد! يمكنك التحسن أكثر';
    } else if (score >= 60) {
        message = 'مقبول! تحتاج لمزيد من التدريب';
    } else {
        message = 'تحتاج لمراجعة المواد والتدريب أكثر';
    }
    
    const resultsMessage = document.getElementById('resultsMessage');
    if (resultsMessage) resultsMessage.textContent = message;
}

function retakeQuiz() {
    // Reset quiz state
    currentQuestionIndex = 0;
    userAnswers = [];
    timeRemaining = 30 * 60;
    
    // Show quiz header
    const quizHeader = document.querySelector('.quiz-header');
    const quizProgress = document.getElementById('quizProgress');
    const quizQuestion = document.getElementById('quizQuestion');
    const quizResults = document.getElementById('quizResults');
    
    if (quizHeader) quizHeader.style.display = 'block';
    if (quizProgress) quizProgress.style.display = 'none';
    if (quizQuestion) quizQuestion.style.display = 'none';
    if (quizResults) quizResults.style.display = 'none';
    
    // Reset timer display
    const timer = document.getElementById('timer');
    if (timer) timer.classList.remove('warning');
    updateTimerDisplay();
}

function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = seconds % 60;
    return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
}