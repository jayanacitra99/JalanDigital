<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',   // Unique identifier, e.g., 'site_title'
        'value', // The actual content
        'type',  // 'text', 'textarea', 'image' (helps the CMS know which input to show)
    ];

    // Helper to get a value by key easily: Setting::getValue('site_phone');
    public static function getValue($key, $default = null)
    {
        return self::where('key', $key)->value('value', $default);
    }
}
