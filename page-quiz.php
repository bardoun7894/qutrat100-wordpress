<?php
/**
 * Template Name: Quiz Page
 * 
 * Place this file in your active WordPress theme directory
 * Create a new page in WordPress admin and select "Quiz Page" as the template
 */

get_header(); ?>

<div class="quiz-container">
    <!-- Quiz Application -->
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
        <div class="container mx-auto px-4">
            <!-- Quiz Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">اختبار القدرة المعرفية</h1>
                <p class="text-lg text-gray-600">اختبر معرفتك وقدراتك المعرفية</p>
            </div>

            <!-- Quiz Card -->
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Quiz Progress -->
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                    <div class="flex justify-between items-center text-white mb-4">
                        <div class="flex items-center gap-4">
                            <span id="questionNumber" class="text-lg font-semibold">السؤال 1</span>
                            <span id="questionCategory" class="px-3 py-1 bg-white/20 rounded-full text-sm">عام</span>
                        </div>
                        <div id="timer" class="flex items-center gap-2 bg-white/20 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            <span id="timeDisplay">00:00</span>
                        </div>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="w-full bg-white/20 rounded-full h-3">
                        <div id="progressFill" class="bg-white h-3 rounded-full transition-all duration-500" style="width: 0%"></div>
                    </div>
                    <div class="flex justify-between text-sm text-white/80 mt-2">
                        <span>التقدم</span>
                        <span id="progressText">0 من 0</span>
                    </div>
                </div>

                <!-- Quiz Content -->
                <div class="p-8">
                    <!-- Start Screen -->
                    <div id="startScreen" class="text-center">
                        <div class="mb-8">
                            <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">مرحباً بك في اختبار القدرة المعرفية</h2>
                            <p class="text-gray-600 mb-6">استعد لاختبار معرفتك وقدراتك في مختلف المجالات</p>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-blue-50 p-6 rounded-xl">
                                <div class="text-blue-600 text-2xl font-bold mb-2" id="totalQuestions">--</div>
                                <div class="text-gray-600">إجمالي الأسئلة</div>
                            </div>
                            <div class="bg-green-50 p-6 rounded-xl">
                                <div class="text-green-600 text-2xl font-bold mb-2">متنوعة</div>
                                <div class="text-gray-600">فئات مختلفة</div>
                            </div>
                            <div class="bg-purple-50 p-6 rounded-xl">
                                <div class="text-purple-600 text-2xl font-bold mb-2">مؤقت</div>
                                <div class="text-gray-600">اختبار زمني</div>
                            </div>
                        </div>
                        
                        <button id="startQuiz" class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            ابدأ الاختبار
                        </button>
                    </div>

                    <!-- Question Screen -->
                    <div id="questionScreen" class="hidden">
                        <div class="mb-8">
                            <h2 id="questionText" class="text-xl font-semibold text-gray-800 leading-relaxed mb-6"></h2>
                            <div id="questionImage" class="hidden mb-6">
                                <img src="" alt="Question Image" class="question-image mx-auto">
                            </div>
                        </div>
                        
                        <div id="optionsContainer" class="space-y-4 mb-8">
                            <!-- Options will be populated by JavaScript -->
                        </div>
                        
                        <div class="flex justify-between">
                            <button id="prevQuestion" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                                السؤال السابق
                            </button>
                            <button id="nextQuestion" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg hover:from-blue-600 hover:to-indigo-700 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                                السؤال التالي
                            </button>
                        </div>
                    </div>

                    <!-- Results Screen -->
                    <div id="quizResults" class="hidden text-center">
                        <div class="mb-8">
                            <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">تم إنهاء الاختبار!</h2>
                            <p class="text-gray-600 mb-6">إليك نتائجك</p>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-green-50 p-6 rounded-xl">
                                <div id="correctAnswers" class="text-green-600 text-3xl font-bold mb-2">0</div>
                                <div class="text-gray-600">إجابات صحيحة</div>
                            </div>
                            <div class="bg-blue-50 p-6 rounded-xl">
                                <div id="totalQuestionsResult" class="text-blue-600 text-3xl font-bold mb-2">0</div>
                                <div class="text-gray-600">إجمالي الأسئلة</div>
                            </div>
                            <div class="bg-purple-50 p-6 rounded-xl">
                                <div id="timeTaken" class="text-purple-600 text-3xl font-bold mb-2">00:00</div>
                                <div class="text-gray-600">الوقت المستغرق</div>
                            </div>
                        </div>
                        
                        <div class="flex gap-4 justify-center">
                            <button id="retakeQuiz" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg hover:from-blue-600 hover:to-indigo-700 transition-all duration-200">
                                إعادة الاختبار
                            </button>
                            <a href="<?php echo home_url(); ?>" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors duration-200 inline-block">
                                العودة للرئيسية
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Load Quiz Styles and Scripts -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/quiz-styles.css">
<script>
// WordPress-compatible quiz configuration
window.quizConfig = {
    apiUrl: '<?php echo home_url('/wp-quiz-api.php'); ?>',
    homeUrl: '<?php echo home_url(); ?>',
    themeUrl: '<?php echo get_template_directory_uri(); ?>'
};
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/quiz-wp.js"></script>

<?php get_footer(); ?>