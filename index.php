<?php 
$page_title = 'Home';
include 'includes/header.php'; 
?>

<!-- Hero Section with Overlapping Search Bar -->
<section class="relative">
    <!-- Hero Image -->
    <div class="h-96 bg-gradient-to-r from-brand-blue to-brand-blue-dark relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1920&q=80" 
             alt="Luxury Hotel" 
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Find your next stay</h1>
                <p class="text-lg md:text-xl font-light">Search deals on hotels, homes, and much more...</p>
            </div>
        </div>
    </div>
    
    <!-- Floating Search Bar (Expedia Style) -->
    <div class="max-w-6xl mx-auto px-4 -mt-8 relative z-10">
        <div class="bg-white rounded-lg shadow-lg border border-slate-200 p-4">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                <!-- Destination -->
                <div class="md:col-span-3">
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Where are you going?</label>
                    <div class="relative">
                        <i class="fas fa-map-marker-alt absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="text" 
                               placeholder="City, hotel, or region" 
                               class="w-full pl-9 pr-3 py-2.5 border border-slate-200 rounded text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent">
                    </div>
                </div>
                
                <!-- Check-in Date -->
                <div class="md:col-span-3">
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Check-in</label>
                    <div class="relative">
                        <i class="far fa-calendar absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="date" 
                               class="w-full pl-9 pr-3 py-2.5 border border-slate-200 rounded text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent">
                    </div>
                </div>
                
                <!-- Check-out Date -->
                <div class="md:col-span-3">
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Check-out</label>
                    <div class="relative">
                        <i class="far fa-calendar absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="date" 
                               class="w-full pl-9 pr-3 py-2.5 border border-slate-200 rounded text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent">
                    </div>
                </div>
                
                <!-- Guests -->
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Guests</label>
                    <div class="relative">
                        <i class="far fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm"></i>
                        <select class="w-full pl-9 pr-3 py-2.5 border border-slate-200 rounded text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent appearance-none">
                            <option>1 guest</option>
                            <option>2 guests</option>
                            <option>3 guests</option>
                            <option>4+ guests</option>
                        </select>
                    </div>
                </div>
                
                <!-- Search Button -->
                <div class="md:col-span-1 flex items-end">
                    <button class="w-full bg-brand-blue hover:bg-brand-blue-dark text-white py-2.5 rounded font-semibold text-sm transition">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="max-w-6xl mx-auto px-4 py-12">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a href="#" class="bg-white p-6 rounded-lg border border-slate-200 hover-scale hover:shadow-md transition text-center">
            <i class="fas fa-percent text-brand-blue text-3xl mb-3"></i>
            <h3 class="font-bold text-gray-900 text-sm">Deals</h3>
            <p class="text-xs text-gray-600 mt-1">Save up to 50%</p>
        </a>
        <a href="#" class="bg-white p-6 rounded-lg border border-slate-200 hover-scale hover:shadow-md transition text-center">
            <i class="fas fa-award text-brand-blue text-3xl mb-3"></i>
            <h3 class="font-bold text-gray-900 text-sm">Top Rated</h3>
            <p class="text-xs text-gray-600 mt-1">Guest favorites</p>
        </a>
        <a href="#" class="bg-white p-6 rounded-lg border border-slate-200 hover-scale hover:shadow-md transition text-center">
            <i class="fas fa-umbrella-beach text-brand-blue text-3xl mb-3"></i>
            <h3 class="font-bold text-gray-900 text-sm">Beaches</h3>
            <p class="text-xs text-gray-600 mt-1">Coastal getaways</p>
        </a>
        <a href="#" class="bg-white p-6 rounded-lg border border-slate-200 hover-scale hover:shadow-md transition text-center">
            <i class="fas fa-city text-brand-blue text-3xl mb-3"></i>
            <h3 class="font-bold text-gray-900 text-sm">City Breaks</h3>
            <p class="text-xs text-gray-600 mt-1">Urban adventures</p>
        </a>
    </div>
</section>

<!-- Popular Destinations -->
<section class="max-w-6xl mx-auto px-4 py-8">
    <div class="mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Popular destinations</h2>
        <p class="text-gray-600">Travelers searching for hotels also booked these</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach (array_slice($destinations, 0, 6) as $destination): ?>
        <a href="destination-detail.php?id=<?php echo $destination['id']; ?>" 
           class="bg-white rounded-lg border border-slate-200 overflow-hidden hover-scale hover:shadow-md transition">
            <div class="relative h-48">
                <img src="<?php echo $destination['image']; ?>" 
                     alt="<?php echo $destination['name']; ?>" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold"><?php echo $destination['name']; ?></h3>
                    <p class="text-sm"><?php echo $destination['hotels_count']; ?> properties</p>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>

<!-- Hotel Listings (Booking.com Style) -->
<section class="max-w-6xl mx-auto px-4 py-8">
    <div class="mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Homes guests love</h2>
        <p class="text-gray-600">Highly rated hotels with exceptional service</p>
    </div>
    
    <div class="space-y-4">
        <?php foreach ($hotels as $hotel): 
            $dest = getDestinationById($hotel['destination_id']);
        ?>
        <a href="hotel-detail.php?id=<?php echo $hotel['id']; ?>" 
           class="bg-white rounded-lg border border-slate-200 overflow-hidden hover-scale hover:shadow-md transition block">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-0">
                <!-- Hotel Image (4:3 Aspect Ratio) -->
                <div class="md:col-span-4 relative">
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="<?php echo $hotel['image']; ?>" 
                             alt="<?php echo $hotel['name']; ?>" 
                             class="w-full h-full object-cover">
                        <!-- Wishlist Heart -->
                        <button class="absolute top-3 right-3 w-9 h-9 bg-white rounded-full flex items-center justify-center hover:bg-gray-100 transition shadow-sm">
                            <i class="far fa-heart text-gray-700"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Hotel Details -->
                <div class="md:col-span-5 p-4">
                    <div class="mb-2">
                        <h3 class="text-lg font-bold text-gray-900 mb-1 hover:text-brand-blue transition">
                            <?php echo $hotel['name']; ?>
                        </h3>
                        <p class="text-sm text-gray-600 flex items-center">
                            <i class="fas fa-map-marker-alt text-brand-blue mr-1 text-xs"></i>
                            <?php echo $dest ? $dest['name'] . ', ' . $dest['country'] : 'Unknown Location'; ?>
                        </p>
                    </div>
                    
                    <!-- Trust Signals -->
                    <div class="flex flex-wrap gap-2 mb-3">
                        <span class="inline-flex items-center px-2 py-1 bg-green-50 text-green-700 text-xs font-semibold rounded">
                            <i class="fas fa-check-circle mr-1"></i>
                            Free cancellation
                        </span>
                        <span class="inline-flex items-center px-2 py-1 bg-blue-50 text-brand-blue text-xs font-semibold rounded">
                            <i class="fas fa-shield-alt mr-1"></i>
                            Verified property
                        </span>
                    </div>
                    
                    <!-- Amenities Preview -->
                    <div class="flex flex-wrap gap-2 text-xs text-gray-600">
                        <?php foreach (array_slice($hotel['amenities'], 0, 4) as $amenity): ?>
                        <span class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-1"></i>
                            <?php echo $amenity; ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Rating & Price -->
                <div class="md:col-span-3 p-4 flex flex-col justify-between items-end text-right border-l border-slate-100">
                    <div>
                        <!-- Rating Badge (Booking.com Style) -->
                        <div class="flex items-center justify-end mb-2">
                            <div class="text-right mr-2">
                                <p class="text-sm font-bold text-gray-900">
                                    <?php 
                                    $rating_text = $hotel['rating'] >= 9 ? 'Superb' : ($hotel['rating'] >= 8 ? 'Fabulous' : 'Very Good');
                                    echo $rating_text; 
                                    ?>
                                </p>
                                <p class="text-xs text-gray-600"><?php echo number_format($hotel['reviews']); ?> reviews</p>
                            </div>
                            <div class="rating-badge">
                                <?php echo $hotel['rating']; ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Price -->
                    <div class="mt-4">
                        <p class="text-xs text-gray-600 mb-1">1 night, 2 adults</p>
                        <p class="text-2xl font-bold text-gray-900">
                            $<?php echo number_format($hotel['price']); ?>
                        </p>
                        <p class="text-xs text-gray-500">+$<?php echo number_format($hotel['price'] * 0.15, 2); ?> taxes and fees</p>
                        <button class="mt-3 w-full bg-brand-blue hover:bg-brand-blue-dark text-white py-2 px-4 rounded font-semibold text-sm transition">
                            See availability
                        </button>
                    </div>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
    
    <div class="text-center mt-8">
        <button class="bg-white border-2 border-brand-blue text-brand-blue px-8 py-3 rounded font-semibold hover:bg-brand-blue hover:text-white transition">
            Show more properties
        </button>
    </div>
</section>

<!-- Why Book With Us -->
<section class="bg-white border-y border-slate-200 py-12 my-12">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Why book with <?php echo SITE_NAME; ?>?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-tag text-brand-blue text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Best Price Guarantee</h3>
                <p class="text-sm text-gray-600">Found a lower price? We'll match it and refund the difference.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-times text-brand-blue text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Free Cancellation</h3>
                <p class="text-sm text-gray-600">Plans change. Book with flexibility on most properties.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-brand-blue text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">24/7 Customer Support</h3>
                <p class="text-sm text-gray-600">Get help anytime, anywhere. We're here for you.</p>
            </div>
        </div>
    </div>
</section>

<!-- Travel Tips (Blog Preview) -->
<section class="max-w-6xl mx-auto px-4 py-8 mb-12">
    <div class="mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Get inspiration for your next trip</h2>
        <p class="text-gray-600">Tips, guides, and articles from our travel experts</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($blog_posts as $post): ?>
        <a href="blog-detail.php?id=<?php echo $post['id']; ?>" 
           class="bg-white rounded-lg border border-slate-200 overflow-hidden hover-scale hover:shadow-md transition">
            <div class="aspect-video relative overflow-hidden">
                <img src="<?php echo $post['image']; ?>" 
                     alt="<?php echo $post['title']; ?>" 
                     class="w-full h-full object-cover">
            </div>
            <div class="p-4">
                <span class="inline-block px-2 py-1 bg-blue-50 text-brand-blue text-xs font-semibold rounded mb-2">
                    <?php echo $post['category']; ?>
                </span>
                <h3 class="font-bold text-gray-900 mb-2 hover:text-brand-blue transition">
                    <?php echo $post['title']; ?>
                </h3>
                <p class="text-sm text-gray-600 mb-3">
                    <?php echo substr($post['excerpt'], 0, 100); ?>...
                </p>
                <div class="flex items-center text-xs text-gray-500">
                    <i class="far fa-calendar mr-1"></i>
                    <?php echo date('M d, Y', strtotime($post['date'])); ?>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>