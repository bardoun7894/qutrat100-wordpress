/**
 * WordPress Quiz Application JavaScript
 * Compatible with WordPress environment
 */

class WordPressQuiz {
    constructor() {
        this.questions = [];
        this.currentQuestion = 0;
        this.userAnswers = [];
        this.startTime = null;
        this.timerInterval = null;
        this.score = 0;
        
        // WordPress configuration
        this.config = window.quizConfig || {
            apiUrl: '/wp-quiz-api.php',
            homeUrl: '/',
            themeUrl: ''
        };
        
        this.init();
    }
    
    init() {
        this.bindEvents();
        this.loadQuestions();
    }
    
    bindEvents() {
        const startBtn = document.getElementById('startQuiz');
        const nextBtn = document.getElementById('nextQuestion');
        const prevBtn = document.getElementById('prevQuestion');
        const retakeBtn = document.getElementById('retakeQuiz');
        
        if (startBtn) startBtn.addEventListener('click', () => this.startQuiz());
        if (nextBtn) nextBtn.addEventListener('click', () => this.nextQuestion());
        if (prevBtn) prevBtn.addEventListener('click', () => this.prevQuestion());
        if (retakeBtn) retakeBtn.addEventListener('click', () => this.retakeQuiz());
    }
    
    async loadQuestions() {
        try {
            const response = await fetch(`${this.config.apiUrl}?action=get_questions&limit=20`);
            if (!response.ok) throw new Error('Failed to load questions');
            
            this.questions = await response.json();
            
            if (this.questions.length === 0) {
                this.showError('لا توجد أسئلة متاحة حالياً');
                return;
            }
            
            // Update total questions display
            const totalQuestionsEl = document.getElementById('totalQuestions');
            if (totalQuestionsEl) {
                totalQuestionsEl.textContent = this.questions.length;
            }
            
            console.log(`Loaded ${this.questions.length} questions`);
        } catch (error) {
            console.error('Error loading questions:', error);
            this.showError('حدث خطأ في تحميل الأسئلة');
        }
    }
    
    startQuiz() {
        if (this.questions.length === 0) {
            this.showError('لا توجد أسئلة متاحة');
            return;
        }
        
        this.currentQuestion = 0;
        this.userAnswers = new Array(this.questions.length).fill(null);
        this.score = 0;
        this.startTime = Date.now();
        
        this.showScreen('questionScreen');
        this.showQuestion();
        this.startTimer();
    }
    
    showScreen(screenId) {
        const screens = ['startScreen', 'questionScreen', 'quizResults'];
        screens.forEach(screen => {
            const element = document.getElementById(screen);
            if (element) {
                element.classList.toggle('hidden', screen !== screenId);
            }
        });
    }
    
    showQuestion() {
        const question = this.questions[this.currentQuestion];
        if (!question) return;
        
        // Update question info
        this.updateElement('questionNumber', `السؤال ${this.currentQuestion + 1}`);
        this.updateElement('questionCategory', question.category || 'عام');
        this.updateElement('questionText', question.question);
        
        // Handle question image
        const imageContainer = document.getElementById('questionImage');
        if (question.image && imageContainer) {
            const img = imageContainer.querySelector('img');
            if (img) {
                img.src = question.image;
                imageContainer.classList.remove('hidden');
            }
        } else if (imageContainer) {
            imageContainer.classList.add('hidden');
        }
        
        // Update progress
        this.updateProgress();
        
        // Show options
        this.showOptions();
        
        // Update navigation buttons
        this.updateNavigation();
    }
    
    showOptions() {
        const container = document.getElementById('optionsContainer');
        if (!container) return;
        
        const question = this.questions[this.currentQuestion];
        const letters = ['أ', 'ب', 'ج', 'د'];
        
        container.innerHTML = '';
        
        question.options.forEach((option, index) => {
            const optionDiv = document.createElement('div');
            optionDiv.className = 'option';
            optionDiv.dataset.index = index;
            
            // Check if this option was previously selected
            if (this.userAnswers[this.currentQuestion] === index) {
                optionDiv.classList.add('selected');
            }
            
            optionDiv.innerHTML = `
                <div class="option-letter">${letters[index]}</div>
                <div class="option-text">${option}</div>
            `;
            
            optionDiv.addEventListener('click', () => this.selectOption(index));
            container.appendChild(optionDiv);
        });
    }
    
    selectOption(index) {
        // Remove previous selection
        const options = document.querySelectorAll('.option');
        options.forEach(opt => opt.classList.remove('selected'));
        
        // Add selection to clicked option
        const selectedOption = document.querySelector(`[data-index="${index}"]`);
        if (selectedOption) {
            selectedOption.classList.add('selected');
        }
        
        // Store answer
        this.userAnswers[this.currentQuestion] = index;
        
        // Enable next button
        const nextBtn = document.getElementById('nextQuestion');
        if (nextBtn) {
            nextBtn.disabled = false;
        }
    }
    
    nextQuestion() {
        if (this.currentQuestion < this.questions.length - 1) {
            this.currentQuestion++;
            this.showQuestion();
        } else {
            this.finishQuiz();
        }
    }
    
    prevQuestion() {
        if (this.currentQuestion > 0) {
            this.currentQuestion--;
            this.showQuestion();
        }
    }
    
    updateProgress() {
        const progress = ((this.currentQuestion + 1) / this.questions.length) * 100;
        const progressFill = document.getElementById('progressFill');
        const progressText = document.getElementById('progressText');
        
        if (progressFill) {
            progressFill.style.width = `${progress}%`;
        }
        
        if (progressText) {
            progressText.textContent = `${this.currentQuestion + 1} من ${this.questions.length}`;
        }
    }
    
    updateNavigation() {
        const prevBtn = document.getElementById('prevQuestion');
        const nextBtn = document.getElementById('nextQuestion');
        
        if (prevBtn) {
            prevBtn.disabled = this.currentQuestion === 0;
        }
        
        if (nextBtn) {
            const hasAnswer = this.userAnswers[this.currentQuestion] !== null;
            nextBtn.disabled = !hasAnswer;
            
            // Update button text for last question
            if (this.currentQuestion === this.questions.length - 1) {
                nextBtn.textContent = 'إنهاء الاختبار';
            } else {
                nextBtn.textContent = 'السؤال التالي';
            }
        }
    }
    
    startTimer() {
        this.timerInterval = setInterval(() => {
            const elapsed = Date.now() - this.startTime;
            const minutes = Math.floor(elapsed / 60000);
            const seconds = Math.floor((elapsed % 60000) / 1000);
            
            const timeDisplay = document.getElementById('timeDisplay');
            if (timeDisplay) {
                timeDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }
            
            // Warning at 15 minutes
            const timer = document.getElementById('timer');
            if (minutes >= 15 && timer) {
                timer.classList.add('warning');
            }
        }, 1000);
    }
    
    stopTimer() {
        if (this.timerInterval) {
            clearInterval(this.timerInterval);
            this.timerInterval = null;
        }
    }
    
    finishQuiz() {
        this.stopTimer();
        this.calculateScore();
        this.showResults();
        this.submitResults();
    }
    
    calculateScore() {
        this.score = 0;
        this.userAnswers.forEach((answer, index) => {
            if (answer === this.questions[index].correct) {
                this.score++;
            }
        });
    }
    
    showResults() {
        const endTime = Date.now();
        const totalTime = endTime - this.startTime;
        const minutes = Math.floor(totalTime / 60000);
        const seconds = Math.floor((totalTime % 60000) / 1000);
        
        this.updateElement('correctAnswers', this.score);
        this.updateElement('totalQuestionsResult', this.questions.length);
        this.updateElement('timeTaken', `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`);
        
        this.showScreen('quizResults');
    }
    
    async submitResults() {
        try {
            const totalTime = Math.floor((Date.now() - this.startTime) / 1000);
            
            const response = await fetch(`${this.config.apiUrl}?action=submit_result`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    score: this.score,
                    total: this.questions.length,
                    time: totalTime
                })
            });
            
            if (response.ok) {
                console.log('Results submitted successfully');
            }
        } catch (error) {
            console.error('Error submitting results:', error);
        }
    }
    
    retakeQuiz() {
        this.stopTimer();
        this.showScreen('startScreen');
        this.loadQuestions();
    }
    
    updateElement(id, content) {
        const element = document.getElementById(id);
        if (element) {
            element.textContent = content;
        }
    }
    
    showError(message) {
        const startScreen = document.getElementById('startScreen');
        if (startScreen) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4';
            errorDiv.textContent = message;
            startScreen.insertBefore(errorDiv, startScreen.firstChild);
        }
    }
}

// Initialize quiz when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new WordPressQuiz();
});