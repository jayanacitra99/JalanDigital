<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // ex: 'unduh-mantu-thea-alan'
            $table->string('title'); // ex: 'Unduh Mantu' atau 'Akad & Resepsi'
            
            // Mempelai Wanita
            $table->string('bride_nickname');
            $table->string('bride_fullname');
            $table->string('bride_parents');
            $table->string('bride_ig')->nullable();
            
            // Mempelai Pria
            $table->string('groom_nickname');
            $table->string('groom_fullname');
            $table->string('groom_parents');
            $table->string('groom_ig')->nullable();
            
            // Waktu & Tempat
            $table->dateTime('event_date');
            $table->string('event_time_text'); // ex: '14.00 - 17.00 WIB'
            $table->string('location_name');
            $table->text('location_address');
            $table->text('maps_link');
            
            // Tanda Kasih
            $table->string('bank_name')->nullable(); // ex: 'BCA'
            $table->string('bank_account')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->text('gift_address')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};