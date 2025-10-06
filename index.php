<?php
$page_title = "الاستعداد للقدرات - دورات احترافية في القدرة المعرفية";
$page_description = "دورات احترافية ومتخصصة في القدرة المعرفية والقدرات العامة مع أفضل المدربين المعتمدين";

include 'includes/header.php';
?>

<main class="min-h-screen">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 via-primary-900 to-blue-900 text-white py-14 md:py-22 lg:py-36 text-center overflow-hidden">
        <!-- Background Pattern - More organic and varied -->
        <div class="absolute inset-0 opacity-8">
            <svg class="w-full h-full" viewBox="0 0 1200 600">
                <defs>
                    <pattern id="hero-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                        <circle cx="28" cy="32" r="1.8" fill="rgba(255,255,255,0.25)"/>
                        <circle cx="45" cy="15" r="1.2" fill="rgba(255,255,255,0.15)"/>
                        <circle cx="12" cy="48" r="2.2" fill="rgba(255,255,255,0.2)"/>
                    </pattern>
                </defs>
                <rect width="1200" height="600" fill="url(#hero-pattern)"/>
            </svg>
            <!-- Additional organic shapes -->
            <div class="absolute top-20 left-16 w-32 h-24 bg-primary-400/5 rounded-full blur-2xl transform rotate-12"></div>
            <div class="absolute bottom-32 right-20 w-28 h-36 bg-cyan-400/5 rounded-full blur-xl transform -rotate-6"></div>
            <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-white/3 rounded-full blur-lg transform rotate-45"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Main Heading with subtle asymmetry -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-5 md:mb-7 leading-tight transform -rotate-0.5">
                    <i class="fas fa-graduation-cap text-primary-400 mb-3 md:mb-5 block text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl transform rotate-1"></i>
                    الاستعداد للقدرات
                </h1>
                
                <!-- Subtitle with natural spacing -->
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-7 md:mb-11 opacity-95 max-w-3xl mx-auto leading-relaxed text-gray-100 px-4 transform rotate-0.3">
                    احصل على أعلى الدرجات في اختبار القدرات مع برنامجنا المتخصص
                </p>
                
                <!-- Hero Stats with varied positioning -->
                <div class="grid grid-cols-3 gap-4 sm:gap-5 md:gap-7 lg:gap-9 mb-9 md:mb-13 max-w-2xl mx-auto px-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 lg:p-6 border border-white/20 transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-primary-300 mb-1 md:mb-2">95%</span>
                        <span class="text-xs sm:text-sm md:text-base text-gray-200">نسبة النجاح</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 lg:p-6 border border-white/20 transform -rotate-0.5 hover:rotate-0 transition-transform duration-300 mt-2">
                        <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-primary-300 mb-1 md:mb-2">5000+</span>
                        <span class="text-xs sm:text-sm md:text-base text-gray-200">طالب متدرب</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 lg:p-6 border border-white/20 transform rotate-0.8 hover:rotate-0 transition-transform duration-300 -mt-1">
                        <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-primary-300 mb-1 md:mb-2">10+</span>
                        <span class="text-xs sm:text-sm md:text-base text-gray-200">سنوات خبرة</span>
                    </div>
                </div>
                
                <!-- Hero Buttons with natural positioning -->
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 justify-center items-center mb-7 md:mb-9 px-4">
                    <a href="#pricing" class="group bg-primary-600 hover:bg-primary-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg sm:rounded-xl font-bold text-base sm:text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center gap-2 sm:gap-3 w-full sm:w-auto justify-center rotate-0.5 hover:rotate-0">
                        <i class="fas fa-rocket group-hover:rotate-12 transition-transform duration-300 text-sm sm:text-base"></i>
                        ابدأ الآن - 290 ريال
                    </a>
                    <a href="quiz.php" class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/30 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg sm:rounded-xl font-bold text-base sm:text-lg transition-all duration-300 hover:shadow-xl flex items-center gap-2 sm:gap-3 w-full sm:w-auto justify-center transform -rotate-0.3 hover:rotate-0 mt-1 sm:mt-0">
                        <i class="fas fa-play text-sm sm:text-base"></i>
                        اختبار مجاني
                    </a>
                </div>
                
                <!-- Guarantee with slight tilt -->
                <div class="inline-flex items-center gap-2 sm:gap-3 bg-green-500/20 backdrop-blur-sm border border-green-400/30 rounded-full px-4 sm:px-6 py-2 sm:py-3 text-green-100 mx-4 transform -rotate-0.8 hover:rotate-0 transition-transform duration-300">
                    <i class="fas fa-shield-alt text-green-400 text-sm sm:text-base"></i>
                    <span class="text-xs sm:text-sm font-medium">ضمان استرداد المبلغ خلال 7 أيام</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Brochure Section -->
    <section class="py-18 md:py-26 bg-gray-50 relative overflow-hidden">
        <!-- Organic background elements -->
        <div class="absolute top-16 right-12 w-24 h-32 bg-primary-100/30 rounded-full blur-2xl transform rotate-12"></div>
        <div class="absolute bottom-20 left-16 w-36 h-20 bg-cyan-100/20 rounded-full blur-xl transform -rotate-6"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-18 items-center">
                <!-- Content -->
                <div class="order-2 lg:order-1 transform rotate-0.3">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-7 leading-tight transform -rotate-0.5">
                        دليل دورة القدرة المعرفية
                    </h2>
                    <p class="text-base md:text-lg text-gray-600 mb-9 leading-relaxed transform rotate-0.2">
                        اطلع على المنهج التفصيلي والمحتوى الشامل لدورة القدرة المعرفية. دليل متكامل يوضح جميع المواضيع والمهارات التي ستتقنها خلال الدورة.
                    </p>
                    
                    <!-- Features with organic spacing -->
                    <div class="space-y-5 mb-9">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform rotate-0.5 hover:rotate-0">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center transform -rotate-3">
                                <i class="fas fa-book-open text-primary-600 text-lg"></i>
                            </div>
                            <span class="text-gray-700 font-medium">منهج شامل ومتدرج</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform -rotate-0.3 hover:rotate-0 ml-3">
                            <div class="flex-shrink-0 w-12 h-12 bg-cyan-100 rounded-lg flex items-center justify-center transform rotate-2">
                                <i class="fas fa-chart-line text-cyan-600 text-lg"></i>
                            </div>
                            <span class="text-gray-700 font-medium">استراتيجيات متقدمة</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform rotate-0.8 hover:rotate-0 mr-2">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center transform -rotate-1">
                                <i class="fas fa-target text-primary-600 text-lg"></i>
                            </div>
                            <span class="text-gray-700 font-medium">تدريب مكثف على الأسئلة</span>
                        </div>
                    </div>
                </div>
                
                <!-- Image with natural positioning -->
                <div class="order-1 lg:order-2 transform -rotate-0.5">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-500 to-cyan-500 rounded-2xl transform rotate-2 opacity-90"></div>
                        <div class="absolute -inset-2 bg-gradient-to-tr from-primary-300/20 to-cyan-300/20 rounded-3xl transform -rotate-1 blur-sm"></div>
                        <img src="assets/images/بروشور-دورة-القدرة-المعرفية-ج47.jpg" 
                             alt="دليل دورة القدرة المعرفية" 
                             class="relative w-full h-auto rounded-2xl shadow-2xl transform hover:scale-105 hover:rotate-0 transition-all duration-500 rotate-1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-18 md:py-26 bg-white relative overflow-hidden">
        <!-- Organic background elements -->
        <div class="absolute top-24 left-20 w-28 h-40 bg-primary-50/40 rounded-full blur-3xl transform rotate-45"></div>
        <div class="absolute bottom-16 right-24 w-32 h-24 bg-cyan-50/30 rounded-full blur-2xl transform -rotate-12"></div>
        <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-yellow-50/20 rounded-full blur-xl transform rotate-30"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header with natural positioning -->
            <div class="text-center mb-18 transform rotate-0.2">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-5 transform -rotate-0.3">
                    اختر الباقة المناسبة لك
                </h2>
                <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto transform rotate-0.1">
                    باقات مصممة خصيصاً لضمان نجاحك في اختبار القدرات
                </p>
            </div>
            
            <!-- Pricing Grid with organic spacing -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-9 lg:gap-7">
                <!-- Basic Package -->
                <div class="bg-white border border-gray-200 rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 relative transform rotate-0.5 hover:rotate-0 mt-3">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">الباقة الأساسية</h3>
                        <div class="mb-2">
                            <span class="text-sm text-gray-500">ريال</span>
                            <span class="text-3xl md:text-4xl font-bold text-gray-900">190</span>
                        </div>
                        <p class="text-sm text-gray-600">لمدة شهر واحد</p>
                    </div>
                    
                    <!-- Features -->
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-green-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">20 ساعة تدريبية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-green-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">500+ سؤال تدريبي</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-green-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">اختبارات تجريبية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-green-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">دعم فني</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-times text-gray-400 text-sm"></i>
                            <span class="text-gray-400 text-sm md:text-base">جلسات فردية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-times text-gray-400 text-sm"></i>
                            <span class="text-gray-400 text-sm md:text-base">ضمان النتيجة</span>
                        </li>
                    </ul>
                    
                    <!-- Button -->
                    <a href="#contact" class="block w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-3 px-6 rounded-xl transition-colors duration-300">
                        اختر هذه الباقة
                    </a>
                </div>

                <!-- Premium Package (Most Popular) -->
                <div class="bg-gradient-to-br from-primary-50 to-primary-100 border-2 border-primary-500 rounded-2xl p-6 md:p-8 shadow-xl hover:shadow-2xl transition-all duration-300 relative transform -rotate-0.3 hover:rotate-0 hover:scale-105 -mt-2">
                    <!-- Popular Badge -->
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                            الأكثر طلباً
                        </span>
                    </div>
                    
                    <!-- Header -->
                    <div class="text-center mb-8 pt-4">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">الباقة المتميزة</h3>
                        <div class="mb-2">
                            <span class="text-sm text-gray-500">ريال</span>
                            <span class="text-3xl md:text-4xl font-bold text-primary-600">290</span>
                            <span class="text-lg text-gray-400 line-through mr-2">350</span>
                        </div>
                        <p class="text-sm text-gray-600">لمدة شهرين</p>
                    </div>
                    
                    <!-- Features -->
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-primary-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base font-medium">35 ساعة تدريبية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-primary-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base font-medium">1000+ سؤال تدريبي</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-primary-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base font-medium">اختبارات تجريبية متقدمة</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-primary-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base font-medium">دعم فني 24/7</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-primary-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base font-medium">3 جلسات فردية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-primary-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base font-medium">ضمان تحسن الدرجة</span>
                        </li>
                    </ul>
                    
                    <!-- Button -->
                    <a href="#contact" class="block w-full text-center bg-primary-600 hover:bg-primary-700 text-white font-bold py-4 px-6 rounded-xl transition-colors duration-300 shadow-lg hover:shadow-xl">
                        ابدأ الآن
                    </a>
                </div>

                <!-- VIP Package -->
                <div class="bg-gradient-to-br from-yellow-50 to-amber-100 border-2 border-yellow-400 rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 relative transform rotate-0.4 hover:rotate-0 mt-4">
                    <!-- Gold Crown Icon -->
                    <div class="absolute -top-3 right-6">
                        <i class="fas fa-crown text-yellow-500 text-2xl"></i>
                    </div>
                    
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">الباقة الذهبية</h3>
                        <div class="mb-2">
                            <span class="text-sm text-gray-500">ريال</span>
                            <span class="text-3xl md:text-4xl font-bold text-yellow-600">450</span>
                        </div>
                        <p class="text-sm text-gray-600">لمدة 3 أشهر</p>
                    </div>
                    
                    <!-- Features -->
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-yellow-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">60 ساعة تدريبية</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-yellow-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">2000+ سؤال تدريبي</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-yellow-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">اختبارات محاكاة كاملة</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-yellow-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">دعم فني مخصص</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-yellow-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">جلسات فردية مفتوحة</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-yellow-500 text-sm"></i>
                            <span class="text-gray-700 text-sm md:text-base">ضمان الدرجة المطلوبة</span>
                        </li>
                    </ul>
                    
                    <!-- Button -->
                    <a href="#contact" class="block w-full text-center bg-gradient-to-r from-yellow-500 to-amber-500 hover:from-yellow-600 hover:to-amber-600 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        اختر هذه الباقة
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Dashboard Preview Section -->
    <section class="py-18 md:py-26 bg-gray-50 relative overflow-hidden">
        <!-- Organic background elements -->
        <div class="absolute top-32 right-16 w-24 h-36 bg-primary-100/30 rounded-full blur-2xl transform -rotate-45"></div>
        <div class="absolute bottom-20 left-28 w-20 h-20 bg-cyan-100/40 rounded-full blur-xl transform rotate-60"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header with natural positioning -->
            <div class="text-center mb-18 transform -rotate-0.1">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-5 transform rotate-0.2">
                    منصة التعلم الذكية
                </h2>
                <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto transform -rotate-0.1">
                    تابع تقدمك وأنجز مهامك بسهولة من خلال لوحة التحكم المتطورة
                </p>
            </div>

            <!-- Dashboard Preview -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-9">
                <!-- Learning Progress -->
                <div class="lg:col-span-2 bg-white rounded-2xl p-6 md:p-8 shadow-lg transform rotate-0.2 hover:rotate-0 transition-all duration-300 mt-2">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg md:text-xl font-bold text-gray-900">تقدم التعلم</h3>
                        <span class="text-sm text-gray-500">هذا الأسبوع</span>
                    </div>
                    
                    <!-- Progress Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-primary-50 rounded-xl p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-primary-700">القدرات اللفظية</span>
                                <span class="text-sm text-primary-600">85%</span>
                            </div>
                            <div class="w-full bg-primary-200 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="bg-cyan-50 rounded-xl p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-cyan-700">القدرات الكمية</span>
                                <span class="text-sm text-cyan-600">72%</span>
                            </div>
                            <div class="w-full bg-cyan-200 rounded-full h-2">
                                <div class="bg-cyan-600 h-2 rounded-full" style="width: 72%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Activity -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-sm"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">أكملت درس "التناسب والتناسب العكسي"</p>
                                <p class="text-xs text-gray-500">منذ ساعتين</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-play text-primary-600 text-sm"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">بدأت اختبار تجريبي جديد</p>
                                <p class="text-xs text-gray-500">أمس</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Todo List Widget -->
                <div class="bg-white rounded-2xl p-6 shadow-lg transform -rotate-0.3 hover:rotate-0 transition-all duration-300 -mt-1">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-gray-900">مهام اليوم</h3>
                        <button class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                            <i class="fas fa-plus mr-1"></i>إضافة
                        </button>
                    </div>
                    
                    <!-- Todo Items -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <input type="checkbox" checked class="w-4 h-4 text-primary-600 rounded border-gray-300 focus:ring-primary-500">
                            <span class="text-sm text-gray-500 line-through">مراجعة الدرس الأول</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg border border-primary-200">
                            <input type="checkbox" class="w-4 h-4 text-primary-600 rounded border-gray-300 focus:ring-primary-500">
                            <span class="text-sm font-medium text-gray-900">حل 20 سؤال في القدرات الكمية</span>
                            <span class="text-xs bg-accent-100 text-accent-700 px-2 py-1 rounded-full mr-auto">عالي</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <input type="checkbox" class="w-4 h-4 text-primary-600 rounded border-gray-300 focus:ring-primary-500">
                            <span class="text-sm text-gray-700">مشاهدة فيديو الاستراتيجيات</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                            <input type="checkbox" class="w-4 h-4 text-primary-600 rounded border-gray-300 focus:ring-primary-500">
                            <span class="text-sm text-gray-700">اختبار تجريبي سريع</span>
                        </div>
                    </div>
                    
                    <!-- Study Streak -->
                    <div class="mt-6 p-4 bg-gradient-to-r from-primary-500 to-cyan-500 rounded-xl text-white">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm opacity-90">سلسلة الدراسة</p>
                                <p class="text-lg font-bold">7 أيام 🔥</p>
                            </div>
                            <i class="fas fa-calendar-check text-2xl opacity-80"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-18 md:py-26 bg-white relative overflow-hidden">
        <!-- Organic background elements -->
        <div class="absolute top-20 left-12 w-32 h-24 bg-primary-50/30 rounded-full blur-2xl transform rotate-30"></div>
        <div class="absolute bottom-24 right-20 w-28 h-28 bg-accent-50/40 rounded-full blur-xl transform -rotate-45"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header with natural positioning -->
            <div class="text-center mb-18 transform rotate-0.1">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-5 transform -rotate-0.2">
                    ماذا يقول طلابنا
                </h2>
                <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto transform rotate-0.1">
                    شهادات حقيقية من طلاب حققوا نتائج متميزة
                </p>
            </div>
            
            <!-- Testimonials Grid with organic spacing -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-9 lg:gap-7">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 transform rotate-0.3 hover:rotate-0 mt-2">
                    <!-- Stars -->
                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    
                    <!-- Quote -->
                    <p class="text-gray-700 mb-6 leading-relaxed text-sm md:text-base">
                        "حصلت على 89 في اختبار القدرات بعد التدريب هنا. المدربين ممتازين والمنهج شامل ومفيد جداً"
                    </p>
                    
                    <!-- Author -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm md:text-base">أحمد محمد</h4>
                            <span class="text-gray-500 text-xs md:text-sm">طالب ثانوي - الرياض</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 transform -rotate-0.2 hover:rotate-0 -mt-1">
                    <!-- Stars -->
                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    
                    <!-- Quote -->
                    <p class="text-gray-700 mb-6 leading-relaxed text-sm md:text-base">
                        "الدورة ساعدتني كثيراً في فهم أنواع الأسئلة وطرق الحل السريع. نصيحتي لكل طالب يسجل هنا"
                    </p>
                    
                    <!-- Author -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-accent-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm md:text-base">فاطمة العلي</h4>
                            <span class="text-gray-500 text-xs md:text-sm">طالبة ثانوي - جدة</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 transform rotate-0.4 hover:rotate-0 mt-3">
                    <!-- Stars -->
                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    
                    <!-- Quote -->
                    <p class="text-gray-700 mb-6 leading-relaxed text-sm md:text-base">
                        "تحسنت درجتي من 65 إلى 92 في شهرين فقط! شكراً لفريق العمل المتميز"
                    </p>
                    
                    <!-- Author -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm md:text-base">خالد السعد</h4>
                            <span class="text-gray-500 text-xs md:text-sm">طالب ثانوي - الدمام</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact/Registration Section -->
    <section id="contact" class="py-18 md:py-26 bg-gray-50 relative overflow-hidden">
        <!-- Organic background elements -->
        <div class="absolute top-16 right-24 w-36 h-28 bg-primary-50/20 rounded-full blur-3xl transform rotate-60"></div>
        <div class="absolute bottom-32 left-16 w-24 h-32 bg-cyan-50/30 rounded-full blur-2xl transform -rotate-30"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-18">
                <!-- Contact Info -->
                <div class="space-y-9 transform rotate-0.1">
                    <div>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                            ابدأ رحلتك نحو النجاح
                        </h2>
                        <p class="text-base md:text-lg text-gray-600">
                            سجل الآن واحصل على استشارة مجانية لتحديد الباقة المناسبة لك
                        </p>
                    </div>
                    
                    <!-- Contact Features -->
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm md:text-base">اتصل بنا</h4>
                                <p class="text-gray-600 text-sm md:text-base">+966 50 123 4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fab fa-whatsapp text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm md:text-base">واتساب</h4>
                                <p class="text-gray-600 text-sm md:text-base">متاح 24/7 للاستفسارات</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-cyan-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm md:text-base">الموقع</h4>
                                <p class="text-gray-600 text-sm md:text-base">الرياض - حي الملك فهد</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Registration Form -->
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg transform -rotate-0.2 hover:rotate-0 transition-all duration-300">
                    <form id="registrationForm" class="space-y-6">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-6">سجل الآن</h3>
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">الاسم الكامل *</label>
                            <input type="text" id="name" name="name" placeholder="أدخل اسمك الكامل" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm md:text-base transition-all duration-200 hover:border-gray-400">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">رقم الجوال *</label>
                            <input type="tel" id="phone" name="phone" placeholder="05xxxxxxxx" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm md:text-base transition-all duration-200 hover:border-gray-400">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">البريد الإلكتروني *</label>
                            <input type="email" id="email" name="email" placeholder="example@email.com" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm md:text-base transition-all duration-200 hover:border-gray-400">
                        </div>
                        
                        <div>
                            <label for="package" class="block text-sm font-medium text-gray-700 mb-2">اختر الباقة *</label>
                            <select id="package" name="package" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm md:text-base transition-all duration-200 hover:border-gray-400 bg-white">
                                <option value="">اختر الباقة المناسبة</option>
                                <option value="basic">الباقة الأساسية - 190 ريال</option>
                                <option value="premium">الباقة المتميزة - 290 ريال</option>
                                <option value="vip">الباقة الذهبية - 450 ريال</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">ملاحظات إضافية (اختياري)</label>
                            <textarea id="message" name="message" placeholder="أي ملاحظات أو استفسارات إضافية..." rows="3"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm md:text-base resize-none transition-all duration-200 hover:border-gray-400"></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 text-sm md:text-base">
                            <i class="fas fa-paper-plane mr-2"></i> إرسال الطلب
                        </button>
                        
                        <p class="text-xs md:text-sm text-gray-500 text-center">
                            <i class="fas fa-lock mr-1"></i>
                            بياناتك محمية ولن يتم مشاركتها مع أطراف أخرى
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    لماذا تختار دوراتنا؟
                </h2>
                <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto">
                    نقدم تجربة تعليمية متميزة تجمع بين الخبرة الأكاديمية والتطبيق العملي
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-graduate text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-4">مدربون معتمدون</h3>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        فريق من أفضل المدربين المعتمدين والمتخصصين في اختبارات القدرات مع سنوات من الخبرة في التدريب
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-4">نتائج مضمونة</h3>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        برامج تدريبية مثبتة الفعالية مع ضمان تحسن الدرجات وتحقيق النتائج المرجوة في الاختبارات الفعلية
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-laptop text-cyan-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-4">تعلم تفاعلي</h3>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        منصة تعليمية متطورة مع اختبارات تفاعلية وتقييم فوري لضمان فهم أفضل وتطبيق عملي
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-4">مرونة في التوقيت</h3>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        جدولة مرنة تناسب ظروفك مع إمكانية الوصول للمحتوى في أي وقت ومن أي مكان
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-cyan-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-4">دعم مستمر</h3>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        فريق دعم متاح على مدار الساعة للإجابة على استفساراتك ومساعدتك في رحلتك التعليمية
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-certificate text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-4">شهادات معتمدة</h3>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        احصل على شهادات معتمدة عند إتمام الدورات تضيف قيمة لسيرتك الذاتية ومسيرتك المهنية
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    إنجازاتنا بالأرقام
                </h2>
                <p class="text-base md:text-lg text-gray-600">
                    أرقام تتحدث عن جودة خدماتنا ونجاح طلابنا
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl p-6 md:p-8 text-center shadow-lg">
                    <span class="block text-3xl md:text-4xl lg:text-5xl font-bold text-primary-600 mb-2 stat-number">5000+</span>
                    <span class="text-gray-600 text-sm md:text-base font-medium stat-label">طالب متدرب</span>
                </div>

                <div class="bg-white rounded-2xl p-6 md:p-8 text-center shadow-lg">
                    <span class="block text-3xl md:text-4xl lg:text-5xl font-bold text-green-600 mb-2 stat-number">95%</span>
                    <span class="text-gray-600 text-sm md:text-base font-medium stat-label">معدل النجاح</span>
                </div>

                <div class="bg-white rounded-2xl p-6 md:p-8 text-center shadow-lg">
                    <span class="block text-3xl md:text-4xl lg:text-5xl font-bold text-accent-600 mb-2 stat-number">50+</span>
                    <span class="text-gray-600 text-sm md:text-base font-medium stat-label">مدرب معتمد</span>
                </div>

                <div class="bg-white rounded-2xl p-6 md:p-8 text-center shadow-lg">
                    <span class="block text-3xl md:text-4xl lg:text-5xl font-bold text-primary-600 mb-2 stat-number">10+</span>
                    <span class="text-gray-600 text-sm md:text-base font-medium stat-label">سنوات خبرة</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-primary-600 to-cyan-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4">
                ابدأ رحلتك نحو التميز
            </h2>
            <p class="text-base md:text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                انضم إلى آلاف الطلاب الذين حققوا أحلامهم الأكاديمية والمهنية معنا
            </p>
            
            <!-- Contact Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/966501234567" target="_blank" 
                   class="inline-flex items-center justify-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-bold rounded-lg transition-colors duration-200 text-sm md:text-base">
                    <i class="fab fa-whatsapp mr-2"></i> تواصل عبر واتساب
                </a>
                <a href="https://t.me/readiness_abilities" target="_blank" 
                   class="inline-flex items-center justify-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition-colors duration-200 text-sm md:text-base">
                    <i class="fab fa-telegram mr-2"></i> انضم لقناة تليجرام
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<script>
    // Smooth scrolling for navigation links
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

    // Fade in animation on scroll (using observerOptions from footer.php)
    const pageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.card, .feature-card, .stat-card, .pricing-card, .testimonial-card').forEach(el => {
        pageObserver.observe(el);
    });

    // Registration form handling
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const data = {
            name: formData.get('name'),
            phone: formData.get('phone'),
            email: formData.get('email'),
            package: formData.get('package'),
            message: formData.get('message')
        };
        
        // Enhanced validation with better user feedback
        const errors = [];
        
        if (!data.name || data.name.trim().length < 2) {
            errors.push('يرجى إدخال الاسم الكامل (حرفين على الأقل)');
        }
        
        if (!data.phone || !/^[0-9+\-\s()]{10,}$/.test(data.phone.trim())) {
            errors.push('يرجى إدخال رقم جوال صحيح');
        }
        
        if (!data.email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(data.email.trim())) {
            errors.push('يرجى إدخال بريد إلكتروني صحيح');
        }
        
        if (!data.package) {
            errors.push('يرجى اختيار الباقة المناسبة');
        }
        
        if (errors.length > 0) {
            alert('يرجى تصحيح الأخطاء التالية:\n\n' + errors.join('\n'));
            return;
        }
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الإرسال...';
        submitBtn.disabled = true;
        
        // Simulate form submission (replace with actual API call)
        setTimeout(() => {
            // Create WhatsApp message
            const packageNames = {
                'basic': 'الباقة الأساسية - 190 ريال',
                'premium': 'الباقة المتميزة - 290 ريال',
                'vip': 'الباقة الذهبية - 450 ريال'
            };
            
            const whatsappMessage = `مرحباً، أريد التسجيل في دورة القدرات
            
الاسم: ${data.name}
الجوال: ${data.phone}
البريد الإلكتروني: ${data.email}
الباقة المختارة: ${packageNames[data.package]}
${data.message ? `ملاحظات: ${data.message}` : ''}`;
            
            const whatsappUrl = `https://wa.me/966501234567?text=${encodeURIComponent(whatsappMessage)}`;
            
            // Reset form
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success message
            alert('تم إرسال طلبك بنجاح! سيتم توجيهك إلى واتساب لإكمال التسجيل.');
            
            // Redirect to WhatsApp
            window.open(whatsappUrl, '_blank');
            
        }, 2000);
    });

    // Counter animation for stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
            const increment = target / 100;
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = counter.textContent.replace(/\d+/, target);
                    clearInterval(timer);
                } else {
                    counter.textContent = counter.textContent.replace(/\d+/, Math.floor(current));
                }
            }, 20);
        });
    }

    // Trigger counter animation when hero section is visible
    const heroObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                heroObserver.unobserve(entry.target);
            }
        });
    });

    // Use a more specific selector for the hero section
    const heroSection = document.querySelector('section.relative.bg-gradient-to-br') || document.querySelector('main section:first-child');
    if (heroSection) {
        heroObserver.observe(heroSection);
    }
</script>

<style>
/* Human-like imperfections and natural design elements */
.human-imperfect {
    position: relative;
}

.human-imperfect::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -1px;
    right: 1px;
    bottom: -1px;
    background: linear-gradient(
        45deg + 0.3deg,
        rgba(255, 255, 255, 0.02) 0%,
        rgba(255, 255, 255, 0.01) 50%,
        rgba(0, 0, 0, 0.01) 100%
    );
    border-radius: inherit;
    pointer-events: none;
    z-index: -1;
}

/* Subtle text imperfections */
.text-natural {
    letter-spacing: 0.01em;
    word-spacing: 0.02em;
}

.text-natural:nth-child(odd) {
    letter-spacing: -0.005em;
}

/* Natural button variations */
.btn-natural {
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.btn-natural:hover {
    transform: translateY(-1px) rotate(0.2deg);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.btn-natural:active {
    transform: translateY(0) rotate(-0.1deg);
}

/* Organic spacing variations */
.spacing-organic > * {
    margin-bottom: calc(1rem + 0.1rem * sin(var(--index, 1) * 0.5));
}

.spacing-organic > *:nth-child(2n) {
    margin-left: 0.2rem;
}

.spacing-organic > *:nth-child(3n) {
    margin-right: 0.15rem;
}

/* Natural color variations */
.color-natural {
    filter: hue-rotate(0.5deg) saturate(1.02);
}

.color-natural:nth-child(even) {
    filter: hue-rotate(-0.3deg) saturate(0.98);
}

/* Handwritten-style borders */
.border-handdrawn {
    border-radius: 8px 9px 7px 8px / 9px 7px 8px 9px;
    border: 2px solid;
    border-color: currentColor;
    position: relative;
}

.border-handdrawn::after {
    content: '';
    position: absolute;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    border: 1px solid;
    border-color: inherit;
    border-radius: 7px 8px 9px 7px / 8px 9px 7px 8px;
    opacity: 0.3;
}

/* Natural shadow variations */
.shadow-organic {
    box-shadow: 
        0 2px 8px rgba(0, 0, 0, 0.1),
        0 1px 3px rgba(0, 0, 0, 0.08),
        0 0 1px rgba(0, 0, 0, 0.05);
}

.shadow-organic:nth-child(odd) {
    box-shadow: 
        1px 3px 9px rgba(0, 0, 0, 0.09),
        0 1px 4px rgba(0, 0, 0, 0.07),
        -0.5px 0 1px rgba(0, 0, 0, 0.04);
}

/* Breathing animation for natural feel */
@keyframes breathe {
    0%, 100% { transform: scale(1) rotate(0deg); }
    50% { transform: scale(1.005) rotate(0.1deg); }
}

.breathe {
    animation: breathe 6s ease-in-out infinite;
}

/* Subtle parallax effect */
.parallax-subtle {
    transform: translateZ(0);
    will-change: transform;
}

/* Natural grid imperfections */
.grid-natural {
    display: grid;
    gap: calc(1rem + 0.1rem * sin(var(--row, 1)));
}

.grid-natural > *:nth-child(odd) {
    transform: translateY(2px);
}

.grid-natural > *:nth-child(even) {
    transform: translateY(-1px);
}

/* Organic background patterns */
.bg-organic {
    background-image: 
        radial-gradient(circle at 20% 30%, rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.015) 1px, transparent 1px),
        radial-gradient(circle at 40% 80%, rgba(255, 255, 255, 0.01) 1px, transparent 1px);
    background-size: 50px 50px, 75px 75px, 100px 100px;
    background-position: 0 0, 25px 25px, 50px 50px;
}

/* Apply natural classes to existing elements */
.hero-content h1,
.section-title {
    @apply text-natural;
}

.btn-primary,
.btn-secondary {
    @apply btn-natural;
}

.card,
.testimonial-card,
.pricing-card {
    @apply human-imperfect shadow-organic;
}

.hero,
.section {
    @apply bg-organic;
}

.features-grid,
.testimonials-grid,
.pricing-grid {
    @apply grid-natural;
}

/* Responsive natural adjustments */
@media (max-width: 768px) {
    .human-imperfect::before {
        top: -1px;
        left: -0.5px;
        right: 0.5px;
        bottom: -0.5px;
    }
    
    .btn-natural:hover {
        transform: translateY(-0.5px) rotate(0.1deg);
    }
    
    .spacing-organic > *:nth-child(2n) {
        margin-left: 0.1rem;
    }
    
    .spacing-organic > *:nth-child(3n) {
        margin-right: 0.075rem;
    }
}
</style>

</body>
</html>
