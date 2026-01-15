<!-- Newsletter Section -->
    <section class="bg-gradient-to-r from-blue-600 to-brand-blue py-12 mt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-white mb-6 md:mb-0 text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-2">Save time, save money!</h3>
                    <p class="text-blue-100">Sign up and we'll send the best deals to you</p>
                </div>
                <div class="flex w-full md:w-auto">
                    <input type="email" 
                           placeholder="Your email address" 
                           class="px-4 py-3 rounded-l-lg w-full md:w-80 text-gray-900 focus:outline-none text-sm">
                    <button class="bg-white hover:bg-gray-100 text-brand-blue px-6 py-3 rounded-r-lg font-semibold text-sm transition whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="bg-gray-100 border-t border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-brand-blue rounded flex items-center justify-center">
                            <i class="fas fa-bed text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold text-brand-blue"><?php echo SITE_NAME; ?></span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Your trusted partner for finding the perfect accommodation worldwide. Best prices guaranteed.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-9 h-9 bg-white border border-slate-200 rounded flex items-center justify-center hover:bg-brand-blue hover:text-white hover:border-brand-blue transition text-sm">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white border border-slate-200 rounded flex items-center justify-center hover:bg-brand-blue hover:text-white hover:border-brand-blue transition text-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white border border-slate-200 rounded flex items-center justify-center hover:bg-brand-blue hover:text-white hover:border-brand-blue transition text-sm">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-9 h-9 bg-white border border-slate-200 rounded flex items-center justify-center hover:bg-brand-blue hover:text-white hover:border-brand-blue transition text-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Top Destinations -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4 text-sm">Top Destinations</h3>
                    <ul class="space-y-2">
                        <?php 
                        $featured_destinations = array_slice($destinations, 0, 6);
                        foreach ($featured_destinations as $dest): 
                        ?>
                        <li>
                            <a href="destination-detail.php?id=<?php echo $dest['id']; ?>" 
                               class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Hotels in <?php echo $dest['name']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Support & Help -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4 text-sm">Support</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="contact.php" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Customer Service
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Help Center
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Cancellation Options
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Refund Policy
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Report a Safety Issue
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- For Partners -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4 text-sm">For Partners</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                List Your Property
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Affiliate Program
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Travel Agent Tool
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Partner Portal
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Become an Affiliate
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Extranet Login
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-4 text-sm">Company</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="about.php" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="blog.php" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Travel Blog
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Careers
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Press Center
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-600 hover:text-brand-blue hover:underline transition text-sm">
                                Investor Relations
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Trust Badges & Payment Methods -->
            <div class="border-t border-slate-200 mt-10 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <!-- Payment Methods -->
                    <div class="flex items-center space-x-3">
                        <span class="text-xs text-gray-600 font-semibold mr-2">We accept:</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa" class="h-6 opacity-70 hover:opacity-100 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-6 opacity-70 hover:opacity-100 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="h-5 opacity-70 hover:opacity-100 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg" alt="Amex" class="h-6 opacity-70 hover:opacity-100 transition">
                    </div>
                    
                    <!-- Trust & Security Badges -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-1 text-xs text-gray-600">
                            <i class="fas fa-shield-alt text-green-600"></i>
                            <span>Secure Payments</span>
                        </div>
                        <div class="flex items-center space-x-1 text-xs text-gray-600">
                            <i class="fas fa-lock text-green-600"></i>
                            <span>SSL Encrypted</span>
                        </div>
                        <div class="flex items-center space-x-1 text-xs text-gray-600">
                            <i class="fas fa-certificate text-blue-600"></i>
                            <span>Verified Business</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bottom Bar -->
    <div class="bg-white border-t border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0 text-xs text-gray-600">
                <!-- Copyright -->
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-x-4 gap-y-1">
                    <span>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</span>
                    <a href="#" class="hover:text-brand-blue hover:underline transition">Terms & Conditions</a>
                    <a href="#" class="hover:text-brand-blue hover:underline transition">Privacy Policy</a>
                    <a href="#" class="hover:text-brand-blue hover:underline transition">Cookie Policy</a>
                    <a href="#" class="hover:text-brand-blue hover:underline transition">Sitemap</a>
                </div>
                
                <!-- Language & Currency Selector -->
                <div class="flex items-center space-x-3">
                    <button class="flex items-center space-x-1 px-3 py-1.5 border border-slate-200 rounded hover:border-brand-blue hover:text-brand-blue transition">
                        <i class="fas fa-globe text-sm"></i>
                        <span>English (US)</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <button class="flex items-center space-x-1 px-3 py-1.5 border border-slate-200 rounded hover:border-brand-blue hover:text-brand-blue transition">
                        <i class="fas fa-dollar-sign text-sm"></i>
                        <span>USD</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>