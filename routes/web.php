<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');

Route::get('/', [LandingController::class, 'index']);

Route::get('/unduh-mantu-thea-alan', [InvitationController::class, 'index']);
Route::get('/akad-resepsi-thea-alan', [InvitationController::class, 'index']);

Route::post('/contact', function () {
    return back()->with('success', 'Message sent!');
})->name('contact.store');
