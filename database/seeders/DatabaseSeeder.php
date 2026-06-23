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
        User::updateOrCreate(
            ['email' => 'admin@jalandigital.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'), // Password is 'password'
            ]
        );
//        $this->call([
//            EventSeeder::class,
//        ]);

        // 2. Settings (Key-Value pair)
        // We do not randomize these because they are specific site configurations
        $settings = [
            ['key' => 'site_name', 'value' => 'Jalan Digital'],
            ['key' => 'hero_title', 'value' => 'Building your digital path'],
            ['key' => 'hero_subtitle', 'value' => 'Welcome to Jalan Digital. Operating from the creative hub of Malang, East Java, we are a dynamic technology company dedicated to guiding businesses into the modern digital landscape.'],
            ['key' => 'hero_description', 'value' => 'In an era where a strong online presence is mandatory, we serve as the architect of your digital journey, ensuring you step confidently into the future of digital marketing and brand elevation.'],
            ['key' => 'contact_email', 'value' => 'hello@jalan.digital'],
            ['key' => 'contact_phone', 'value' => '+62 812 3456 7890'],
            ['key' => 'address', 'value' => 'Malang, East Java, Indonesia'],
            ['key' => 'vision', 'value' => 'To be the ultimate catalyst for digital transformation, illuminating the path for businesses and consumers through innovative web solutions and cutting-edge proprietary technologies.'],
            ['key' => 'mission_1', 'value' => 'Empower clients with tailored, high-performance websites that serve as the foundation for their digital marketing strategies.'],
            ['key' => 'mission_2', 'value' => 'Design and launch intuitive, in-house digital products that solve real-world problems.'],
            ['key' => 'mission_3', 'value' => 'Elevate the digital competitiveness of brands from our headquarters in Malang to the global stage.'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // 3. Clear and Generate 2 Services (from summary)
        Service::truncate();
        Service::create([
            'title' => 'Custom Web Development',
            'slug' => 'custom-web-development',
            'short_description' => 'Your website is your digital storefront. We build bespoke web platforms designed to meet your specific strategic needs.',
            'content' => 'Whether you require an engaging corporate profile, a robust e-commerce ecosystem, or a dynamic web application, we craft solutions that enhance your brand\'s value and perfectly position you for digital marketing success.',
            'icon' => 'fa-code',
            'is_active' => true,
        ]);
        Service::create([
            'title' => 'In-House Digital Products',
            'slug' => 'in-house-digital-products',
            'short_description' => 'Beyond client services, Jalan Digital is an active product incubator.',
            'content' => 'We independently design, develop, and manage our own proprietary digital products. This dual-engine approach keeps our engineering and design teams at the absolute forefront of industry trends, ensuring we bring fresh, entrepreneurial solutions to the market.',
            'icon' => 'fa-lightbulb',
            'is_active' => true,
        ]);

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
