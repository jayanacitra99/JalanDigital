<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',              // URL-friendly version of title
        'icon',             // CSS class (e.g., 'fa-solid fa-code')
        'short_description', // Displayed on the homepage card
        'content',           // Full HTML content for the detail page
        'is_active',         // Toggle to hide/show service without deleting
    ];

    // Use slug for routing instead of ID
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
