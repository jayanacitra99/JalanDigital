<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];

    // Relasi ke RSVP
    public function rsvps()
    {
        return $this->hasMany(Rsvp::class);
    }
}