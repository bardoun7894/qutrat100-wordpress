<?php
$page_title = "الاختبار التجريبي - اختبر قدراتك المعرفية";
$page_description = "اختبار تجريبي شامل لقياس القدرات المعرفية والاستعداد لاختبارات القدرات";
$additional_js = ['assets/js/quiz.js'];

include 'includes/header.php';
?>




<main class="bg-gray-50 min-h-screen py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Quiz Header -->
        <div class="quiz-header bg-white rounded-2xl shadow-lg p-8 sm:p-10 text-center mb-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-blue-600 mb-4">
                <i class="fas fa-brain text-blue-500 mr-3"></i> الاختبار التجريبي
            </h1>
            <p class="text-lg text-gray-600 mb-8">اختبر قدراتك المعرفية واستعد لاختبارات القدرات الفعلية</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-gray-50 p-6 rounded-xl text-center border-l-4 border-blue-500">
                    <i class="fas fa-question-circle text-2xl text-blue-500 mb-3 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">عدد الأسئلة</h3>
                    <p class="text-gray-600">20 سؤال</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center border-l-4 border-blue-500">
                    <i class="fas fa-clock text-2xl text-blue-500 mb-3 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">المدة الزمنية</h3>
                    <p class="text-gray-600">30 دقيقة</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center border-l-4 border-blue-500">
                    <i class="fas fa-chart-line text-2xl text-blue-500 mb-3 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">نوع الاختبار</h3>
                    <p class="text-gray-600">قدرات معرفية</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl text-center border-l-4 border-blue-500">
                    <i class="fas fa-award text-2xl text-blue-500 mb-3 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">النتيجة</h3>
                    <p class="text-gray-600">فورية</p>
                </div>
            </div>
            
            <button id="startQuiz" class="bg-gradient-to-r from-primary-600 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-primary-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                <i class="fas fa-play mr-2"></i> ابدأ الاختبار
            </button>
        </div>

        <!-- Quiz Progress -->
        <div id="quizProgress" class="bg-white rounded-xl shadow-lg p-6 mb-8 hidden">
            <div class="flex justify-between items-center mb-4">
                <span id="progressText" class="text-lg font-semibold text-gray-800">السؤال 1 من 20</span>
                <span id="timer" class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full font-semibold border-2 border-yellow-200">30:00</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                <div id="progressFill" class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full transition-all duration-300 ease-out" style="width: 0%"></div>
            </div>
        </div>

        <!-- Quiz Question -->
        <div id="quizQuestion" class="bg-white rounded-2xl shadow-lg p-8 sm:p-10 mb-8 border-t-4 border-blue-500 hidden">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <span id="questionNumber" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-full font-semibold text-lg">السؤال 1</span>
                <span id="questionCategory" class="bg-cyan-500 text-white px-4 py-2 rounded-full text-sm font-semibold">القدرة اللفظية</span>
            </div>
            
            <div id="questionText" class="text-xl sm:text-2xl text-gray-800 mb-6 leading-relaxed font-medium">
                <!-- Question text will be inserted here -->
            </div>
            
            <div id="questionImage" class="hidden mb-6">
                <img class="max-w-full h-auto rounded-xl shadow-md" alt="صورة السؤال">
            </div>
            
            <div id="options" class="space-y-4 mb-8">
                <!-- Options will be inserted here -->
            </div>
            
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <button id="prevBtn" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-200 hidden order-2 sm:order-1">
                    <i class="fas fa-arrow-right mr-2"></i> السؤال السابق
                </button>
                <button id="nextBtn" class="bg-gradient-to-r from-primary-600 to-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-primary-700 hover:to-blue-700 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed order-1 sm:order-2" disabled>
                    <i class="fas fa-arrow-left mr-2"></i> السؤال التالي
                </button>
                <button id="finishBtn" class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-lg font-semibold hover:from-green-700 hover:to-green-800 transition-all duration-200 hidden order-1 sm:order-2">
                    <i class="fas fa-check mr-2"></i> إنهاء الاختبار
                </button>
            </div>
        </div>

        <!-- Quiz Results -->
        <div id="quizResults" class="bg-white rounded-2xl shadow-lg p-8 sm:p-10 text-center hidden">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">
                <i class="fas fa-trophy text-yellow-500 mr-3"></i> نتائج الاختبار
            </h2>
            <div id="finalScore" class="text-6xl sm:text-7xl font-bold text-blue-600 mb-6"></div>
            <div id="resultsMessage" class="text-xl sm:text-2xl text-gray-700 mb-8 font-semibold"></div>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-blue-500">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">الإجابات الصحيحة</h4>
                    <p id="correctAnswers" class="text-2xl font-bold text-gray-600"></p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-blue-500">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">مجموع الأسئلة</h4>
                    <p id="totalQuestions" class="text-2xl font-bold text-gray-600"></p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-blue-500">
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">الوقت المستغرق</h4>
                    <p id="timeTaken" class="text-2xl font-bold text-gray-600"></p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button id="retakeQuiz" class="bg-gradient-to-r from-primary-600 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-primary-700 hover:to-blue-700 transition-all duration-200">
                    <i class="fas fa-redo mr-2"></i> إعادة الاختبار
                </button>
                <a href="index.php" class="bg-gray-100 text-gray-700 px-8 py-4 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-200 inline-flex items-center">
                    <i class="fas fa-home mr-2"></i> العودة للرئيسية
                </a>
            </div>
        </div>
    </div>
</main>

<script>
// Initialize quiz
document.addEventListener('DOMContentLoaded', () => {
    // Quiz functionality is now in assets/js/quiz.js
});
</script>

<?php include 'includes/footer.php'; ?>