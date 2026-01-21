<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@jalandigital.com',
            'password' => bcrypt('password'), // Password is 'password'
        ]);

        // 2. Settings (Key-Value pair)
        // We do not randomize these because they are specific site configurations
        $settings = [
            ['key' => 'site_name', 'value' => 'JalanDigital'],
            ['key' => 'hero_title', 'value' => 'Build Your Digital Future'],
            ['key' => 'hero_subtitle', 'value' => 'Professional Web Development Services'],
            ['key' => 'contact_email', 'value' => 'hello@jalandigital.com'],
            ['key' => 'contact_phone', 'value' => '+62 812 3456 7890'],
            ['key' => 'address', 'value' => 'Malang, East Java, Indonesia'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(['key' => $setting['key']], $setting);
        }

        // 3. Generate 20 Services
        Service::factory(20)->create();

        // 4. Generate 20 Projects, each with 3 Related Images (Total 60 images)
        Project::factory(20)
            ->has(ProjectImage::factory()->count(3), 'images')
            ->create();

        // 5. Generate 20 Testimonials
        Testimonial::factory(20)->create();

        // 6. Generate 50 Inquiries (More leads is realistic!)
        Inquiry::factory(50)->create();

        echo "✅ Database seeded successfully with 20+ records per model!";
    }
}
