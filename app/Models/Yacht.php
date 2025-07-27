<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yacht extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'price_per_day',
        'length',
        'max_guests',
        'cabins',
        'rating',
        'reviews_count',
        'image_url',
        'has_skipper',
        'has_crew',
        'has_catering',
        'has_watersports',
        'description'
    ];

    protected $casts = [
        'has_skipper' => 'boolean',
        'has_crew' => 'boolean',
        'has_catering' => 'boolean',
        'has_watersports' => 'boolean',
        'price_per_day' => 'decimal:2',
        'rating' => 'decimal:1'
    ];

    // Accessor za formatiranje cijene
    public function getFormattedPriceAttribute()
    {
        return '€' . number_format($this->price_per_day, 0, ',', '.');
    }

    // Accessor za features
    public function getFeaturesAttribute()
    {
        $features = [];
        
        if ($this->has_skipper) $features[] = 'Skipper';
        if ($this->has_crew) $features[] = 'Posada';
        if ($this->has_catering) $features[] = 'Catering';
        if ($this->has_watersports) $features[] = 'Vodeni sport';
        
        return $features;
    }
}