<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', // Foreign Key
        'image_path', // Path to storage folder
    ];

    // Relationship: An Image belongs to one Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
