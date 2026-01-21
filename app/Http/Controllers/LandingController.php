<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->get();
        $projects = Project::latest()->take(6)->get();
        $settings = Setting::pluck('value', 'key')->toArray();
        $testimonials = Testimonial::where('is_featured', true)->take(3)->get();

        return view('welcome', compact('services', 'projects', 'settings', 'testimonials'));
    }
}
