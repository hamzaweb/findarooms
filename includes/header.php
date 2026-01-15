<?php
require_once 'config.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME . ' - Book Hotels Online'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Subtle Hover Scale */
        .hover-scale {
            transition: transform 0.2s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.02);
        }
        
        /* Rating Badge */
        .rating-badge {
            background: #003580;
            color: white;
            padding: 4px 8px;
            border-radius: 6px 6px 6px 0;
            font-size: 14px;
            font-weight: 700;
        }
        
        /* Mobile Menu Slide Animation */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        /* Active Nav Border */
        .nav-item {
            position: relative;
            padding-bottom: 4px;
        }
        
        .nav-item.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: #003580;
            border-radius: 2px 2px 0 0;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f3f4f6;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
        
        /* Remove default date input styling */
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
        }
        
        /* Overlay for mobile menu */
        .mobile-overlay {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }
        
        .mobile-overlay.active {
            opacity: 1;
            visibility: visible;
        }
    </style>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#003580',
                            'blue-dark': '#002347',
                            orange: '#ff8c00',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Top Utility Bar -->
    <div class="bg-gray-100 border-b border-slate-200 hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-9 text-xs">
                <!-- Left Side - Support -->
                <div class="flex items-center space-x-4">
                    <a href="contact.php" class="flex items-center space-x-1 text-gray-700 hover:text-brand-blue transition">
                        <i class="fas fa-headset"></i>
                        <span>Support & Help</span>
                    </a>
                    <a href="#" class="flex items-center space-x-1 text-gray-700 hover:text-brand-blue transition">
                        <i class="fas fa-suitcase"></i>
                        <span>My Trips</span>
                    </a>
                </div>
                
                <!-- Right Side - Language & Currency -->
                <div class="flex items-center space-x-3">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-brand-blue transition">
                        <i class="fas fa-globe"></i>
                        <span>English (US)</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <span class="text-gray-400">|</span>
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-brand-blue transition">
                        <i class="fas fa-dollar-sign"></i>
                        <span>USD</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2 group">
                    <div class="w-10 h-10 bg-brand-blue rounded-lg flex items-center justify-center group-hover:bg-brand-blue-dark transition">
                        <i class="fas fa-hotel text-white text-lg"></i>
                    </div>
                    <span class="text-2xl font-bold text-brand-blue"><?php echo SITE_NAME; ?></span>
                </a>
                
                <!-- Desktop Navigation Links -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index.php" class="nav-item <?php echo $current_page == 'index.php' ? 'active text-brand-blue' : 'text-gray-700 hover:text-brand-blue'; ?> transition font-medium flex items-center space-x-2">
                        <i class="fas fa-bed"></i>
                        <span>Stays</span>
                    </a>
                    <a href="#" class="nav-item text-gray-700 hover:text-brand-blue transition font-medium flex items-center space-x-2">
                        <i class="fas fa-plane"></i>
                        <span>Flights</span>
                    </a>
                    <a href="#" class="nav-item text-gray-700 hover:text-brand-blue transition font-medium flex items-center space-x-2">
                        <i class="fas fa-car"></i>
                        <span>Car Rentals</span>
                    </a>
                    <a href="destinations.php" class="nav-item <?php echo $current_page == 'destinations.php' ? 'active text-brand-blue' : 'text-gray-700 hover:text-brand-blue'; ?> transition font-medium flex items-center space-x-2">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>Destinations</span>
                    </a>
                    <a href="blog.php" class="nav-item <?php echo $current_page == 'blog.php' ? 'active text-brand-blue' : 'text-gray-700 hover:text-brand-blue'; ?> transition font-medium flex items-center space-x-2">
                        <i class="fas fa-compass"></i>
                        <span>Travel Guide</span>
                    </a>
                </div>
                
                <!-- Right Side Actions -->
                <div class="hidden lg:flex items-center space-x-4">
                    <button class="flex items-center space-x-2 px-4 py-2 border-2 border-brand-blue text-brand-blue rounded hover:bg-brand-blue hover:text-white transition font-semibold text-sm">
                        <i class="fas fa-building"></i>
                        <span>List your property</span>
                    </button>
                    <button class="text-gray-700 hover:text-brand-blue transition">
                        <i class="far fa-heart text-xl"></i>
                    </button>
                    <button class="text-gray-700 hover:text-brand-blue transition">
                        <i class="far fa-user text-xl"></i>
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-gray-700 hover:text-brand-blue p-2">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="mobile-overlay fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"></div>
    
    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 left-0 h-full w-80 bg-white z-50 lg:hidden shadow-2xl overflow-y-auto">
        <div class="p-6">
            <!-- Close Button -->
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-brand-blue rounded-lg flex items-center justify-center">
                        <i class="fas fa-hotel text-white text-lg"></i>
                    </div>
                    <span class="text-2xl font-bold text-brand-blue"><?php echo SITE_NAME; ?></span>
                </div>
                <button id="mobile-menu-close" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile Navigation Links -->
            <div class="space-y-1 mb-8">
                <a href="index.php" class="flex items-center space-x-3 px-4 py-3 <?php echo $current_page == 'index.php' ? 'bg-blue-50 text-brand-blue' : 'text-gray-700 hover:bg-gray-50'; ?> rounded-lg transition">
                    <i class="fas fa-bed text-lg w-6"></i>
                    <span class="font-medium">Stays</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    <i class="fas fa-plane text-lg w-6"></i>
                    <span class="font-medium">Flights</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    <i class="fas fa-car text-lg w-6"></i>
                    <span class="font-medium">Car Rentals</span>
                </a>
                <a href="destinations.php" class="flex items-center space-x-3 px-4 py-3 <?php echo $current_page == 'destinations.php' ? 'bg-blue-50 text-brand-blue' : 'text-gray-700 hover:bg-gray-50'; ?> rounded-lg transition">
                    <i class="fas fa-map-marked-alt text-lg w-6"></i>
                    <span class="font-medium">Destinations</span>
                </a>
                <a href="blog.php" class="flex items-center space-x-3 px-4 py-3 <?php echo $current_page == 'blog.php' ? 'bg-blue-50 text-brand-blue' : 'text-gray-700 hover:bg-gray-50'; ?> rounded-lg transition">
                    <i class="fas fa-compass text-lg w-6"></i>
                    <span class="font-medium">Travel Guide</span>
                </a>
            </div>
            
            <!-- Divider -->
            <div class="border-t border-slate-200 my-6"></div>
            
            <!-- Mobile Utility Links -->
            <div class="space-y-1 mb-8">
                <a href="contact.php" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    <i class="fas fa-headset text-lg w-6"></i>
                    <span class="font-medium">Support & Help</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    <i class="fas fa-suitcase text-lg w-6"></i>
                    <span class="font-medium">My Trips</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    <i class="far fa-heart text-lg w-6"></i>
                    <span class="font-medium">Saved</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition">
                    <i class="far fa-user text-lg w-6"></i>
                    <span class="font-medium">Account</span>
                </a>
            </div>
            
            <!-- CTA Button -->
            <button class="w-full flex items-center justify-center space-x-2 px-4 py-3 bg-brand-blue text-white rounded-lg hover:bg-brand-blue-dark transition font-semibold">
                <i class="fas fa-building"></i>
                <span>List your property</span>
            </button>
            
            <!-- Language & Currency -->
            <div class="mt-6 pt-6 border-t border-slate-200">
                <div class="grid grid-cols-2 gap-3">
                    <button class="flex items-center justify-center space-x-2 px-3 py-2 border border-slate-200 rounded-lg hover:border-brand-blue hover:text-brand-blue transition text-sm">
                        <i class="fas fa-globe"></i>
                        <span>English</span>
                    </button>
                    <button class="flex items-center justify-center space-x-2 px-3 py-2 border border-slate-200 rounded-lg hover:border-brand-blue hover:text-brand-blue transition text-sm">
                        <i class="fas fa-dollar-sign"></i>
                        <span>USD</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileOverlay = document.getElementById('mobile-overlay');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        
        function openMobileMenu() {
            mobileMenu.classList.add('active');
            mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        mobileMenuBtn?.addEventListener('click', openMobileMenu);
        mobileMenuClose?.addEventListener('click', closeMobileMenu);
        mobileOverlay?.addEventListener('click', closeMobileMenu);
    </script>