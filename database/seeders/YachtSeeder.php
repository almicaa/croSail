<?php

namespace Database\Seeders;

use App\Models\Yacht;
use Illuminate\Database\Seeder;

class YachtSeeder extends Seeder
{
    public function run()
    {
        $yachts = [
            [
                'name' => 'Azure Dream',
                'location' => 'Split, Hrvatska',
                'price_per_day' => 850,
                'length' => 12,
                'max_guests' => 6,
                'cabins' => 3,
                'rating' => 4.8,
                'reviews_count' => 24,
                'image_url' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=400',
                'has_skipper' => true,
                'has_crew' => false,
                'has_catering' => false,
                'has_watersports' => false,
                'description' => 'Moderna jahta savršena za obitelj ili grupu prijatelja.'
            ],
            [
                'name' => 'Mediterranean Star',
                'location' => 'Dubrovnik, Hrvatska',
                'price_per_day' => 1200,
                'length' => 18,
                'max_guests' => 10,
                'cabins' => 5,
                'rating' => 4.9,
                'reviews_count' => 31,
                'image_url' => 'https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?w=400',
                'has_skipper' => true,
                'has_crew' => true,
                'has_catering' => false,
                'has_watersports' => false,
                'description' => 'Luksuzna jahta s profesionalnom posadom.'
            ],
            [
                'name' => 'Ocean Breeze',
                'location' => 'Hvar, Hrvatska',
                'price_per_day' => 950,
                'length' => 15,
                'max_guests' => 8,
                'cabins' => 4,
                'rating' => 4.7,
                'reviews_count' => 18,
                'image_url' => 'https://images.unsplash.com/photo-1563911302283-d2bc129e7570?w=400',
                'has_skipper' => false,
                'has_crew' => false,
                'has_catering' => true,
                'has_watersports' => false,
                'description' => 'Elegantan dizajn s vrhunskim catering uslugama.'
            ],
            [
                'name' => 'Luxury Pearl',
                'location' => 'Zadar, Hrvatska',
                'price_per_day' => 1500,
                'length' => 22,
                'max_guests' => 12,
                'cabins' => 6,
                'rating' => 5.0,
                'reviews_count' => 12,
                'image_url' => 'https://images.unsplash.com/photo-1540946485063-a40da27545f8?w=400',
                'has_skipper' => true,
                'has_crew' => true,
                'has_catering' => true,
                'has_watersports' => false,
                'description' => 'Premium jahta s kompletnim luksuznim uslugama.'
            ],
            [
                'name' => 'Sunset Dreams',
                'location' => 'Šibenik, Hrvatska',
                'price_per_day' => 780,
                'length' => 14,
                'max_guests' => 7,
                'cabins' => 3,
                'rating' => 4.6,
                'reviews_count' => 27,
                'image_url' => 'https://images.unsplash.com/photo-1563911302283-d2bc129e7570?w=400',
                'has_skipper' => false,
                'has_crew' => false,
                'has_catering' => false,
                'has_watersports' => true,
                'description' => 'Jahta opremljena za vodene sportove i avanturu.'
            ]
        ];

        foreach ($yachts as $yacht) {
            Yacht::create($yacht);
        }
    }
}