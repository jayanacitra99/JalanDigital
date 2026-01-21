<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_position',
        'client_photo',
        'message',
        'rating',      // Integer: 1 to 5
        'is_featured', // Boolean: true/false
    ];

    // Helper: Retrieve only 5-star reviews
    public function scopeFiveStar($query)
    {
        return $query->where('rating', 5);
    }
}
