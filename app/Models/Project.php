<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'website_url',
        'thumbnail_image',
        'description',
        'completed_at',
    ];

    // Cast the date string to a Carbon Date object automatically
    protected $casts = [
        'completed_at' => 'date',
    ];

    // Relationship: One Project has many Gallery Images
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
