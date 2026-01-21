<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. SERVICES: What you sell (e.g., "E-commerce Dev", "Landing Page")
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // For SEO friendly URLs
            $table->string('icon')->nullable(); // Class name for FontAwesome or SVG path
            $table->text('short_description'); // For the card view
            $table->longText('content')->nullable(); // Detailed page content
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. PROJECTS: Your Portfolio
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client_name')->nullable();
            $table->string('website_url')->nullable();
            $table->string('thumbnail_image'); // Path to main image
            $table->longText('description');
            $table->date('completed_at')->nullable();
            $table->timestamps();
        });

        // 3. PROJECT IMAGES: Multiple screenshots for one project
        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });

        // 4. TESTIMONIALS: Social Proof
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_position')->nullable(); // e.g., CEO of X
            $table->string('client_photo')->nullable();
            $table->text('message');
            $table->integer('rating')->default(5); // 1-5 stars
            $table->boolean('is_featured')->default(false); // Show on homepage?
            $table->timestamps();
        });

        // 5. INQUIRIES: Leads form the "Contact Us" page
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('service_interest')->nullable(); // Dropdown selection
            $table->text('message');
            $table->enum('status', ['new', 'read', 'contacted', 'archived'])->default('new');
            $table->timestamps();
        });

        // 6. SETTINGS: Dynamic site config (Address, WhatsApp number, SEO Title)
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // e.g., 'site_phone', 'hero_title'
            $table->text('value')->nullable();
            $table->string('type')->default('text'); // text, image, boolean
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('services');
    }
};
