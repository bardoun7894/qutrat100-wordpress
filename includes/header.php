<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'الاستعداد للقدرات'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'دورات احترافية في القدرة المعرفية والقدرات العامة'; ?>">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Integrated CSS with TailwindCSS -->
    <link rel="stylesheet" href="assets/css/wordpress-integrated.css">
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a'
                        },
                        'secondary': {
                            50: '#ecfeff',
                            100: '#cffafe',
                            200: '#a5f3fc',
                            300: '#67e8f9',
                            400: '#22d3ee',
                            500: '#06b6d4',
                            600: '#0891b2',
                            700: '#0e7490',
                            800: '#155e75',
                            900: '#164e63'
                        },
                        'accent': {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95'
                        }
                    },
                    fontFamily: {
                        'cairo': ['Cairo', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if(isset($additional_css)): ?>
        <?php foreach($additional_css as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+CjxsaW5lYXJHcmFkaWVudCBpZD0icGFpbnQwX2xpbmVhcl8xXzEiIHgxPSIzMCIgeTE9IjAiIHgyPSIzMCIgeTI9IjYwIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CjxzdG9wIHN0b3AtY29sb3I9IiM0QTkwRTIiLz4KPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjOUI1OUI2Ii8+CjwvbGluZWFyR3JhZGllbnQ+CjwvZGVmcz4KPHBhdGggZD0iTTMwIDVMNTAgMjBMNDUgNDBMMTUgNDBMMTAgMjBMMzAgNVoiIGZpbGw9InVybCgjcGFpbnQwX2xpbmVhcl8xXzEpIi8+CjxwYXRoIGQ9Ik0zMCAxNUw0MCAyNUwzNSAzNUwyNSAzNUwyMCAyNUwzMCAxNVoiIGZpbGw9IiNGRkZGRkYiIGZpbGwtb3BhY2l0eT0iMC4zIi8+Cjwvc3ZnPg==">
</head>
<body class="font-cairo leading-relaxed text-gray-700 bg-gray-50 min-h-screen overflow-x-hidden text-base" dir="rtl">
    <!-- Top Bar -->
     

    <!-- Header -->
    <header class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-blue-100/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center gap-6 py-3">
                <div class="flex items-center gap-3">
                    <div class="flex items-center justify-center">
                        <img src="assets/images/iconword.png" alt="شعار الاستعداد للقدرات" class="h-10 w-auto object-contain transition-transform duration-300 hover:scale-105">
                    </div>
                   
                </div>
                
                <nav class="hidden lg:block">
                    <ul class="flex gap-6">
                        <li><a href="index.php" class="flex items-center gap-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-all duration-300 font-medium text-sm whitespace-nowrap">
                            <i class="fas fa-home text-xs opacity-80"></i> الرئيسية
                        </a></li>
                        <li><a href="quiz.php" class="flex items-center gap-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-all duration-300 font-medium text-sm whitespace-nowrap">
                            <i class="fas fa-brain text-xs opacity-80"></i> الاختبارات
                        </a></li>
                        <li><a href="demo.php" class="flex items-center gap-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-all duration-300 font-medium text-sm whitespace-nowrap">
                            <i class="fas fa-play text-xs opacity-80"></i> عرض تجريبي
                        </a></li>
                        <li><a href="#pricing" class="flex items-center gap-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-all duration-300 font-medium text-sm whitespace-nowrap">
                            <i class="fas fa-tags text-xs opacity-80"></i> الباقات
                        </a></li>
                        <li><a href="#contact" class="flex items-center gap-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 px-3 py-2 rounded-lg transition-all duration-300 font-medium text-sm whitespace-nowrap">
                            <i class="fas fa-envelope text-xs opacity-80"></i> التواصل
                        </a></li>
                        <li><a href="admin.php" class="flex items-center gap-2 text-primary-600 bg-primary-100 hover:bg-primary-200 px-3 py-2 rounded-lg transition-all duration-300 font-medium text-sm whitespace-nowrap">
                            <i class="fas fa-cog text-xs opacity-80"></i> الإدارة
                        </a></li>
                    </ul>
                </nav>
                
                <div class="flex items-center gap-4">
                  
                    
                    <!-- Mobile Menu Toggle -->
                    <button class="lg:hidden bg-primary-100 hover:bg-primary-200 text-primary-600 p-2 rounded-lg transition-all duration-300 w-10 h-10 flex flex-col items-center justify-center gap-1" id="mobile-menu-toggle">
                        <span class="w-6 h-0.5 bg-primary-600 transition-all duration-300"></span>
                        <span class="w-6 h-0.5 bg-primary-600 transition-all duration-300"></span>
                        <span class="w-6 h-0.5 bg-primary-600 transition-all duration-300"></span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="lg:hidden hidden bg-white border-t border-gray-100 shadow-lg" id="mobile-menu">
            <div class="max-w-7xl mx-auto px-4 py-4">
                <nav>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="flex items-center gap-3 text-gray-700 hover:text-primary-600 hover:bg-gray-50 px-4 py-3 rounded-lg transition-all duration-300 font-medium">
                            <i class="fas fa-home text-sm opacity-80"></i> الرئيسية
                        </a></li>
                        <li><a href="quiz.php" class="flex items-center gap-3 text-gray-700 hover:text-primary-600 hover:bg-gray-50 px-4 py-3 rounded-lg transition-all duration-300 font-medium">
                            <i class="fas fa-brain text-sm opacity-80"></i> الاختبارات
                        </a></li>
                        <li><a href="demo.php" class="flex items-center gap-3 text-gray-700 hover:text-primary-600 hover:bg-gray-50 px-4 py-3 rounded-lg transition-all duration-300 font-medium">
                            <i class="fas fa-play text-sm opacity-80"></i> عرض تجريبي
                        </a></li>
                        <li><a href="#pricing" class="flex items-center gap-3 text-gray-700 hover:text-primary-600 hover:bg-gray-50 px-4 py-3 rounded-lg transition-all duration-300 font-medium">
                            <i class="fas fa-tags text-sm opacity-80"></i> الباقات
                        </a></li>
                        <li><a href="#contact" class="flex items-center gap-3 text-gray-700 hover:text-primary-600 hover:bg-gray-50 px-4 py-3 rounded-lg transition-all duration-300 font-medium">
                            <i class="fas fa-envelope text-sm opacity-80"></i> التواصل
                        </a></li>
                        <li><a href="admin.php" class="flex items-center gap-3 text-primary-600 bg-primary-50 hover:bg-primary-100 px-4 py-3 rounded-lg transition-all duration-300 font-medium">
                            <i class="fas fa-cog text-sm opacity-80"></i> الإدارة
                        </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileToggle && mobileMenu) {
                mobileToggle.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    
                    // Animate hamburger menu
                    const spans = this.querySelectorAll('span');
                    if (mobileMenu.classList.contains('hidden')) {
                        spans[0].style.transform = 'rotate(0deg)';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'rotate(0deg)';
                    } else {
                        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                        spans[1].style.opacity = '0';
                        spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
                    }
                });
                
                // Close menu when clicking on a link
                const navLinks = mobileMenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                        const spans = mobileToggle.querySelectorAll('span');
                        spans[0].style.transform = 'rotate(0deg)';
                        spans[1].style.opacity = '1';
                        spans[2].style.transform = 'rotate(0deg)';
                    });
                });
                
                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!mobileToggle.contains(e.target) && !navMenu.contains(e.target)) {
                        mobileToggle.classList.remove('active');
                        navMenu.classList.remove('active');
                    }
                });
            }
        });
    </script>

    <!-- Main Content -->