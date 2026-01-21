<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jalan Digital - Transformation Starts Here</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar">
    <div class="container nav-container">
        <a href="#" class="logo">Jalan<span class="gradient-text">Digital</span></a>
        <ul class="nav-links">
            <li><a href="#services">Services</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact" class="btn btn-primary">Let's Talk</a></li>
        </ul>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="hero-bg-shapes"></div>
    <div class="container hero-content animate-fade-up">
        <p class="subtitle highlight-green">Digital Transformation Agency</p>
        <h1>Jalan Digital<br>
            <span class="gradient-text-main">Transformasi Digital</span><br>
            Dimulai Di Sini</h1>
        <p class="hero-description">We help innovative companies build dynamic, robust, and scalable digital products.</p>
        <div class="hero-btns">
            <a href="#contact" class="btn btn-gradient">Mulai Sekarang <i class="fas fa-arrow-right"></i></a>
            <a href="#work" class="btn btn-outline">View Portfolio</a>
        </div>
    </div>
</section>

<section id="about" class="about-section">
    <div class="container about-container">
        <div class="about-text animate-slide-right">
            <h2>More Than Just <br><span class="gradient-text-blue">Code & Pixels</span></h2>
            <p>We don't just build websites; we create digital experiences that elevate your brand and connect with your audience in meaningful ways.</p>
            <p>Our data-driven strategy and creative design combine to deliver results that matter.</p>

            <div class="stats-grid">
                <div class="stat-item">
                    <h3 class="gradient-text-blue">{{ $settings['stat_clients'] ?? '50+' }}</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-item">
                    <h3 class="gradient-text-pink">{{ $settings['stat_success'] ?? '98%' }}</h3>
                    <p>Success Rate</p>
                </div>
                <div class="stat-item">
                    <h3 class="gradient-text-green">{{ $settings['stat_support'] ?? '24/7' }}</h3>
                    <p>Support</p>
                </div>
            </div>
        </div>
        <div class="about-image animate-slide-left">
            <img src="https://placehold.co/600x500/13132b/8800ff?text=Retro+Tech+Illustration" alt="Digital Strategy Illustration" class="floating-img">
        </div>
    </div>
</section>

<section id="services" class="services-section">
    <div class="container">
        <div class="section-header animate-fade-up">
            <h2>Our <span class="highlight-green">Services</span></h2>
            <p>We provide end-to-end digital solutions.</p>
        </div>

        <div class="grid-container">
            @foreach($services as $index => $service)
                <div class="service-card animate-fade-up delay-{{ $index + 1 }}">
                    <div class="icon-box">
                        <i class="fas {{ $service->icon }}"></i>
                    </div>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->short_description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="work" class="work-section">
    <div class="container">
        <div class="section-header animate-fade-up">
            <h2>Featured <span class="gradient-text-pink">Work</span></h2>
            <p>Check out some of our recent projects.</p>
        </div>

        <div class="work-grid">
            @foreach($projects as $index => $project)
                <div class="work-item animate-fade-up delay-{{ $index % 3 }}">
                    <img src="{{ $project->thumbnail_image }}" alt="{{ $project->title }}">
                    <div class="work-overlay">
                        <h3>{{ $project->title }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="section-header animate-fade-up">
            <h2>Client <span class="gradient-text-blue">Feedback</span></h2>
            <p>What our clients say about us.</p>
        </div>

        <div class="grid-container">
            @foreach($testimonials as $index => $testimonial)
                <div class="testimonial-card animate-fade-up delay-{{ $index + 1 }}">
                    <div class="testimonial-content">
                        <p>"{{ $testimonial->message }}"</p>
                    </div>
                    <div class="testimonial-author">
                        @if($testimonial->client_photo)
                            <img src="{{ $testimonial->client_photo }}" alt="{{ $testimonial->client_name }}" class="author-img">
                        @endif
                        <div class="author-info">
                            <h4>{{ $testimonial->client_name }}</h4>
                            <p>{{ $testimonial->client_position }}</p>
                            <div class="rating">
                                @for($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star text-yellow"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="choose-us-section animate-fade-up">
    <div class="container">
        <div class="section-header">
            <h2>Why Choose <span class="highlight-green">Us?</span></h2>
        </div>
        <div class="choose-grid animate-fade-up">
            <div class="choose-item">
                <i class="fas fa-rocket icon-green"></i>
                <div>
                    <h4>Fast Delivery</h4>
                    <p>We understand the importance of time-to-market and deliver high-quality work swiftly.</p>
                </div>
            </div>
            <div class="choose-item">
                <i class="fas fa-palette icon-green"></i>
                <div>
                    <h4>Creative Solutions</h4>
                    <p>Our team thinks outside the box to provide unique designs that stand out.</p>
                </div>
            </div>
            <div class="choose-item">
                <i class="fas fa-headset icon-green"></i>
                <div>
                    <h4>24/7 Support</h4>
                    <p>We are always here to help you with any issues or questions you might have.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact-section">
    <div class="container animate-fade-up">
        <div class="contact-card">
            <h2>Let's Build Something <span class="gradient-text-pink">Epic</span></h2>
            <p>Ready to start your project? Send us a message.</p>

            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="form-row">
                    <div class="input-group">
                        <input type="text" id="name" name="name" required placeholder=" " value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name') <span style="color:red; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                    <div class="input-group">
                        <input type="email" id="email" name="email" required placeholder=" " value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email') <span style="color:red; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group">
                        <input type="text" id="phone" name="phone" placeholder=" " value="{{ old('phone') }}">
                        <label for="phone">Phone (Optional)</label>
                        @error('phone') <span style="color:red; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                    <div class="input-group">
                        <select id="service_interest" name="service_interest">
                            <option value="" disabled {{ old('service_interest') ? '' : 'selected' }}>Select Service Interest</option>
                            @foreach($services as $service)
                                <option value="{{ $service->title }}" {{ old('service_interest') == $service->title ? 'selected' : '' }}>{{ $service->title }}</option>
                            @endforeach
                        </select>
                        @error('service_interest') <span style="color:red; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="input-group">
                    <textarea id="message" name="message" rows="4" required placeholder=" ">{{ old('message') }}</textarea>
                    <label for="message">Message</label>
                    @error('message') <span style="color:red; font-size:0.8rem;">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-gradient btn-block">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-about">
            <a href="#" class="logo">Jalan<span class="gradient-text">Digital</span></a>
            <p>We transform businesses through innovative digital solutions. Based in Malang, Indonesia.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#work">Featured Work</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>Contact</h4>
            <p><i class="fas fa-envelope"></i> {{ $settings['contact_email'] ?? 'hello@jalandigital.com' }}</p>
            <p><i class="fas fa-phone"></i> {{ $settings['contact_phone'] ?? '+62 812 3456 7890' }}</p>
            <p><i class="fas fa-map-marker-alt"></i> {{ $settings['address'] ?? 'Malang, East Java' }}</p>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p>&copy; {{ date('Y') }} Jalan Digital. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
