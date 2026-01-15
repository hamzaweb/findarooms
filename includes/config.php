<?php
// Site Configuration
define('SITE_NAME', 'LuxStay');
define('SITE_URL', 'http://localhost/hotel-booking');

// Dummy Destinations Data
$destinations = [
    [
        'id' => 1,
        'name' => 'Paris',
        'country' => 'France',
        'image' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=800',
        'hotels_count' => 45,
        'description' => 'The City of Light awaits with its iconic landmarks and romantic atmosphere.'
    ],
    [
        'id' => 2,
        'name' => 'Tokyo',
        'country' => 'Japan',
        'image' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=800',
        'hotels_count' => 38,
        'description' => 'Experience the perfect blend of ancient traditions and cutting-edge technology.'
    ],
    [
        'id' => 3,
        'name' => 'Dubai',
        'country' => 'UAE',
        'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800',
        'hotels_count' => 52,
        'description' => 'Luxury and innovation meet in this desert metropolis.'
    ],
    [
        'id' => 4,
        'name' => 'New York',
        'country' => 'USA',
        'image' => 'https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?w=800',
        'hotels_count' => 67,
        'description' => 'The city that never sleeps offers endless entertainment and culture.'
    ],
    [
        'id' => 5,
        'name' => 'Bali',
        'country' => 'Indonesia',
        'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800',
        'hotels_count' => 41,
        'description' => 'Tropical paradise with stunning beaches and rich culture.'
    ],
    [
        'id' => 6,
        'name' => 'London',
        'country' => 'United Kingdom',
        'image' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=800',
        'hotels_count' => 58,
        'description' => 'Historic charm meets modern sophistication in the British capital.'
    ]
];

// Dummy Hotels Data
$hotels = [
    [
        'id' => 1,
        'destination_id' => 1,
        'name' => 'Le Grand Hôtel Paris',
        'rating' => 4.8,
        'reviews' => 1247,
        'price' => 320,
        'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800',
        'images' => [
            'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800',
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800',
            'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=800'
        ],
        'description' => 'Experience Parisian elegance at its finest. Located in the heart of the city, our hotel offers breathtaking views of the Eiffel Tower and world-class amenities.',
        'amenities' => ['Free WiFi', 'Pool', 'Spa', 'Restaurant', 'Bar', 'Gym', 'Room Service', 'Concierge'],
        'address' => '123 Champs-Élysées, 75008 Paris'
    ],
    [
        'id' => 2,
        'destination_id' => 1,
        'name' => 'Parisian Boutique Hotel',
        'rating' => 4.6,
        'reviews' => 892,
        'price' => 250,
        'image' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800',
        'images' => [
            'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800',
            'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800'
        ],
        'description' => 'A charming boutique hotel offering authentic Parisian hospitality in a historic building.',
        'amenities' => ['Free WiFi', 'Breakfast', 'Bar', 'Room Service'],
        'address' => '45 Rue Saint-Honoré, 75001 Paris'
    ],
    [
        'id' => 3,
        'destination_id' => 2,
        'name' => 'Tokyo Sky Tower Hotel',
        'rating' => 4.9,
        'reviews' => 2103,
        'price' => 280,
        'image' => 'https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=800',
        'images' => [
            'https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=800',
            'https://images.unsplash.com/photo-1584132967334-10e028bd69f7?w=800'
        ],
        'description' => 'Modern luxury hotel with panoramic city views and traditional Japanese hospitality.',
        'amenities' => ['Free WiFi', 'Onsen', 'Restaurant', 'Bar', 'Gym', 'Business Center'],
        'address' => '1-1-1 Shibuya, Tokyo 150-0002'
    ],
    [
        'id' => 4,
        'destination_id' => 3,
        'name' => 'Dubai Luxury Resort',
        'rating' => 5.0,
        'reviews' => 1678,
        'price' => 450,
        'image' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800',
        'images' => [
            'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800',
            'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800'
        ],
        'description' => 'Unparalleled luxury on the Arabian Gulf with private beach access and world-class dining.',
        'amenities' => ['Private Beach', 'Pool', 'Spa', 'Multiple Restaurants', 'Bar', 'Gym', 'Kids Club'],
        'address' => 'Jumeirah Beach Road, Dubai'
    ]
];

// Dummy Blog Posts
$blog_posts = [
    [
        'id' => 1,
        'title' => '10 Hidden Gems in Paris You Must Visit',
        'excerpt' => 'Discover the secret spots that locals love but tourists often miss in the City of Light.',
        'image' => 'https://images.unsplash.com/photo-1511739001486-6bfe10ce785f?w=800',
        'author' => 'Sophie Martin',
        'date' => '2026-01-10',
        'category' => 'Travel Tips',
        'content' => 'Full blog post content would go here...'
    ],
    [
        'id' => 2,
        'title' => 'The Ultimate Guide to Tokyo Neighborhoods',
        'excerpt' => 'From Shibuya to Shinjuku, explore the diverse districts that make Tokyo unique.',
        'image' => 'https://images.unsplash.com/photo-1503899036084-c55cdd92da26?w=800',
        'author' => 'Yuki Tanaka',
        'date' => '2026-01-08',
        'category' => 'Destination Guides',
        'content' => 'Full blog post content would go here...'
    ],
    [
        'id' => 3,
        'title' => 'Luxury Travel: Is It Worth the Splurge?',
        'excerpt' => 'We break down the benefits of luxury accommodations and when to invest in premium stays.',
        'image' => 'https://images.unsplash.com/photo-1590381105924-c72589b9ef3f?w=800',
        'author' => 'James Anderson',
        'date' => '2026-01-05',
        'category' => 'Travel Tips',
        'content' => 'Full blog post content would go here...'
    ]
];

// Helper function to get destination by ID
function getDestinationById($id) {
    global $destinations;
    foreach ($destinations as $dest) {
        if ($dest['id'] == $id) {
            return $dest;
        }
    }
    return null;
}

// Helper function to get hotels by destination
function getHotelsByDestination($destination_id) {
    global $hotels;
    $result = [];
    foreach ($hotels as $hotel) {
        if ($hotel['destination_id'] == $destination_id) {
            $result[] = $hotel;
        }
    }
    return $result;
}

// Helper function to get hotel by ID
function getHotelById($id) {
    global $hotels;
    foreach ($hotels as $hotel) {
        if ($hotel['id'] == $id) {
            return $hotel;
        }
    }
    return null;
}

// Helper function to get blog post by ID
function getBlogPostById($id) {
    global $blog_posts;
    foreach ($blog_posts as $post) {
        if ($post['id'] == $id) {
            return $post;
        }
    }
    return null;
}
?>