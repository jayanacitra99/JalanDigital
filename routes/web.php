<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');

Route::get('/', [LandingController::class, 'index']);

// Menggunakan parameter dinamis agar satu fungsi bisa menangani banyak link undangan
Route::get('/{slug}', [InvitationController::class, 'show'])->whereIn('slug', [
    'ngunduh-mantu-alan-thea',
    'akad-resepsi-thea-alan'
])->name('invitation.show');

// Route untuk memproses form RSVP
Route::post('/{slug}/rsvp', [InvitationController::class, 'storeRsvp'])->name('invitation.rsvp');

Route::post('/contact', function () {
    return back()->with('success', 'Message sent!');
})->name('contact.store');