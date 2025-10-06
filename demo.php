<?php
$page_title = "الاستعداد للقدرات - دورة القدرة المعرفية";
$page_description = "دورة شاملة للاستعداد لاختبار القدرات المعرفية مع أمثلة تطبيقية ونماذج اختبارات";
$additional_css = [];
$additional_js = [];

include 'includes/header.php';
?>



<main class="main-content">
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary-500 via-primary-600 to-primary-700 text-white py-20 md:py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/5"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/10 backdrop-blur-sm rounded-2xl mb-8">
                    <i class="fas fa-graduation-cap text-3xl text-accent-300"></i>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    دورة القدرة المعرفية
                </h1>
                <p class="text-xl md:text-2xl text-primary-100 mb-10 max-w-3xl mx-auto leading-relaxed font-medium">
                    استعد لاختبار القدرات بأحدث الطرق والأساليب التعليمية المتطورة
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="quiz.php" class="inline-flex items-center bg-white text-primary-600 hover:bg-gray-50 font-semibold py-4 px-8 rounded-xl transition-all duration-200 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-white/30">
                        <i class="fas fa-play mr-3"></i>
                        ابدأ الاختبار التجريبي
                    </a>
                    <a href="#course-content" class="inline-flex items-center bg-transparent border-2 border-white/30 text-white hover:bg-white/10 font-semibold py-4 px-8 rounded-xl transition-all duration-200 text-lg backdrop-blur-sm focus:outline-none focus:ring-4 focus:ring-white/30">
                        <i class="fas fa-info-circle mr-3"></i>
                        تفاصيل الدورة
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-accent-400/20 rounded-full blur-xl"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-white/10 rounded-full blur-xl"></div>
    </section>

    <!-- Course Information -->
    <section class="bg-gray-50 py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">معلومات الدورة</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">تفاصيل شاملة عن دورة الاستعداد لاختبار القدرات المعرفية</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="bg-white p-8 rounded-2xl text-center shadow-card hover:shadow-card-hover transition-all duration-300 hover:-translate-y-1 border border-gray-100 group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-2xl mb-6 group-hover:bg-primary-200 transition-colors duration-300">
                        <i class="fas fa-clock text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">مدة الدورة</h3>
                    <p class="text-gray-600 leading-relaxed">35 يوم تدريبي مكثف مع جلسات يومية مدتها ساعة ونصف لضمان الاستيعاب الكامل</p>
                </div>
                <div class="bg-white p-8 rounded-2xl text-center shadow-card hover:shadow-card-hover transition-all duration-300 hover:-translate-y-1 border border-gray-100 group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-2xl mb-6 group-hover:bg-primary-200 transition-colors duration-300">
                        <i class="fas fa-users text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">المدرب</h3>
                    <p class="text-gray-600 leading-relaxed">عبدالله الغامدي - خبير في اختبارات القدرات مع أكثر من 10 سنوات خبرة</p>
                </div>
                <div class="bg-white p-8 rounded-2xl text-center shadow-card hover:shadow-card-hover transition-all duration-300 hover:-translate-y-1 border border-gray-100 group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-2xl mb-6 group-hover:bg-primary-200 transition-colors duration-300">
                        <i class="fas fa-calendar text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">التاريخ</h3>
                    <p class="text-gray-600 leading-relaxed">من 28 أبريل إلى 1 يونيو 2024 - جلسات مسائية من 8:00 إلى 9:30</p>
                </div>
                <div class="bg-white p-8 rounded-2xl text-center shadow-card hover:shadow-card-hover transition-all duration-300 hover:-translate-y-1 border border-gray-100 group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-2xl mb-6 group-hover:bg-primary-200 transition-colors duration-300">
                        <i class="fas fa-map-marker-alt text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">المكان</h3>
                    <p class="text-gray-600 leading-relaxed">قاعة التدريب الرئيسية - مركز الاستعداد للقدرات</p>
                </div>
                <div class="bg-white p-8 rounded-2xl text-center shadow-card hover:shadow-card-hover transition-all duration-300 hover:-translate-y-1 border border-gray-100 group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-accent-100 rounded-2xl mb-6 group-hover:bg-accent-200 transition-colors duration-300">
                        <i class="fas fa-money-bill-wave text-2xl text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">الرسوم</h3>
                    <p class="text-gray-600 leading-relaxed">290 ريال شامل جميع المواد التدريبية والاختبارات التجريبية</p>
                </div>
                <div class="bg-white p-8 rounded-2xl text-center shadow-card hover:shadow-card-hover transition-all duration-300 hover:-translate-y-1 border border-gray-100 group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-2xl mb-6 group-hover:bg-primary-200 transition-colors duration-300">
                        <i class="fas fa-certificate text-2xl text-primary-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">الشهادة</h3>
                    <p class="text-gray-600 leading-relaxed">شهادة معتمدة من مركز الاستعداد للقدرات عند إتمام الدورة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Content -->
    <section id="course-content" class="bg-white py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    محتوى الدورة
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-primary-600 mx-auto mb-6 rounded-full"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">برنامج تدريبي شامل يغطي جميع جوانب اختبار القدرات المعرفية</p>
            </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 rounded-2xl p-8 shadow-card hover:shadow-card-hover border border-gray-100 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-primary-500 to-primary-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mr-5 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">القدرة الكمية</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            تطوير المهارات الرياضية والحسابية اللازمة لحل المسائل الكمية بطريقة سريعة ودقيقة
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الحساب الذهني والتقدير
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الجبر والمعادلات
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الهندسة والقياس
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الإحصاء والاحتمالات
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                حل المسائل اللفظية
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 shadow-card hover:shadow-card-hover border border-gray-100 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-primary-500 to-primary-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mr-5 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-language"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">القدرة اللفظية</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            تنمية المهارات اللغوية والفهم القرائي وإثراء المفردات العربية
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                فهم المقروء والاستيعاب
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                المفردات والمرادفات
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                التناظر اللفظي
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                إكمال الجمل
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الخطأ السياقي
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 shadow-card hover:shadow-card-hover border border-gray-100 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-primary-500 to-primary-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mr-5 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">التفكير المنطقي</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            تطوير مهارات التفكير النقدي والتحليل المنطقي لحل المشكلات المعقدة
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الأنماط والتسلسل
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                الاستنتاج المنطقي
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                التفكير النقدي
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                حل المشكلات
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                التحليل والتركيب
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 shadow-card hover:shadow-card-hover border border-gray-100 hover:-translate-y-1 transition-all duration-300 group">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-br from-accent-500 to-accent-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center text-2xl mr-5 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-stopwatch"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900">إدارة الوقت</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            استراتيجيات فعالة لإدارة الوقت أثناء الاختبار وتحسين الأداء
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                تقسيم الوقت بفعالية
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                ترتيب الأولويات
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                تقنيات الحل السريع
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                التعامل مع ضغط الوقت
                            </li>
                            <li class="flex items-center text-gray-700 pr-6 relative">
                                <span class="absolute right-0 text-green-500 font-bold">✓</span>
                                استراتيجيات التخمين الذكي
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quiz Demo -->
    <section class="bg-gray-50 py-20 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    جرب الاختبار الآن
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary-500 to-primary-600 mx-auto mb-6 rounded-full"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">اختبر مهاراتك مع نموذج من الأسئلة التفاعلية</p>
            </div>
            
            <div class="bg-white rounded-3xl shadow-soft p-8 md:p-12 border border-gray-100 hover:shadow-medium transition-shadow duration-300">
                <div class="flex items-center justify-between mb-10 pb-8 border-b border-gray-100">
                    <div class="flex items-center">
                        <span class="bg-gradient-to-br from-primary-500 to-primary-600 text-white w-14 h-14 rounded-2xl flex items-center justify-center text-lg font-bold mr-5 shadow-primary">1</span>
                        <span class="bg-accent-50 text-accent-700 px-5 py-2 rounded-full text-sm font-medium border border-accent-200">القدرة الكمية</span>
                    </div>
                </div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-10 leading-relaxed">إذا كان س + ص = 15 و س - ص = 5، فما قيمة س؟</h3>
                
                <div class="space-y-5">
                    <div class="quiz-option bg-gray-50 border-2 border-gray-200 rounded-2xl p-5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 hover:shadow-card transition-all duration-300 group focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2" onclick="selectOption(this, false)" tabindex="0">
                        <div class="flex items-center">
                            <span class="bg-gray-300 text-gray-700 w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold mr-5 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">أ</span>
                            <span class="text-gray-800 font-medium text-lg">5</span>
                        </div>
                    </div>
                    <div class="quiz-option bg-gray-50 border-2 border-gray-200 rounded-2xl p-5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 hover:shadow-card transition-all duration-300 group focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2" onclick="selectOption(this, false)" tabindex="0">
                        <div class="flex items-center">
                            <span class="bg-gray-300 text-gray-700 w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold mr-5 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">ب</span>
                            <span class="text-gray-800 font-medium text-lg">8</span>
                        </div>
                    </div>
                    <div class="quiz-option bg-gray-50 border-2 border-gray-200 rounded-2xl p-5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 hover:shadow-card transition-all duration-300 group focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2" onclick="selectOption(this, true)" tabindex="0">
                        <div class="flex items-center">
                            <span class="bg-gray-300 text-gray-700 w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold mr-5 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">ج</span>
                            <span class="text-gray-800 font-medium text-lg">10</span>
                        </div>
                    </div>
                    <div class="quiz-option bg-gray-50 border-2 border-gray-200 rounded-2xl p-5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 hover:shadow-card transition-all duration-300 group focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2" onclick="selectOption(this, false)" tabindex="0">
                        <div class="flex items-center">
                            <span class="bg-gray-300 text-gray-700 w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold mr-5 group-hover:bg-primary-500 group-hover:text-white transition-colors duration-300">د</span>
                            <span class="text-gray-800 font-medium text-lg">12</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 py-20 md:py-24 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/20 to-accent-500/10"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-accent-400/20 rounded-full blur-2xl"></div>
            <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-white/5 rounded-full blur-lg"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                ابدأ رحلتك نحو النجاح اليوم
            </h2>
            <p class="text-xl md:text-2xl text-primary-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                انضم إلى آلاف الطلاب الذين حققوا أهدافهم الأكاديمية معنا
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="quiz.php" class="inline-flex items-center bg-white text-primary-700 px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-gray-50 hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-white/30 group">
                    <span>ابدأ الاختبار الآن</span>
                    <i class="fas fa-arrow-left mr-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
                <a href="#course-content" class="inline-flex items-center border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-white/10 hover:border-white/50 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-white/30">
                    <span>تعرف على المحتوى</span>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
function selectOption(element, isCorrect) {
    // Remove previous selections
    document.querySelectorAll('.quiz-option').forEach(option => {
        option.classList.remove('border-green-500', 'bg-green-50', 'border-red-500', 'bg-red-50', 'border-primary-500', 'bg-primary-50');
        option.classList.add('border-gray-200', 'bg-gray-50');
        
        // Reset icon styling
        const icon = option.querySelector('span');
        if (icon) {
            icon.classList.remove('bg-green-500', 'bg-red-500', 'bg-primary-500');
            icon.classList.add('bg-gray-300', 'text-gray-700');
        }
    });
    
    // Style the selected option
    const icon = element.querySelector('span');
    if (isCorrect) {
        element.classList.remove('border-gray-200', 'bg-gray-50');
        element.classList.add('border-green-500', 'bg-green-50');
        if (icon) {
            icon.classList.remove('bg-gray-300', 'text-gray-700');
            icon.classList.add('bg-green-500', 'text-white');
        }
    } else {
        element.classList.remove('border-gray-200', 'bg-gray-50');
        element.classList.add('border-red-500', 'bg-red-50');
        if (icon) {
            icon.classList.remove('bg-gray-300', 'text-gray-700');
            icon.classList.add('bg-red-500', 'text-white');
        }
    }
}

// Add smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add fade-in animation for cards
const demoObserverOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const demoObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, demoObserverOptions);

// Observe all cards and sections
document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.bg-white, .bg-gray-50 > div');
    animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        demoObserver.observe(element);
    });
});
</script>

<?php include 'includes/footer.php'; ?>