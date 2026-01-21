import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Navbar Scroll Effect ---
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if (navbar && window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else if (navbar) {
            navbar.classList.remove('scrolled');
        }
    });

    // --- 2. Mobile Navigation Toggle ---
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const navLinksItems = document.querySelectorAll('.nav-links a');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Animate hamburger icon (optional simple switch)
            const icon = hamburger.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });
    }

    // Close mobile nav when a link is clicked
    navLinksItems.forEach(item => {
        item.addEventListener('click', () => {
            if(navLinks && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                const icon = hamburger.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        })
    })


    // --- 3. Scroll Animations (Intersection Observer) ---
    // This is the core "cool animation" part. It watches for elements
    // entering the screen and adds the 'visible' class to trigger CSS transitions.

    const animationOptions = {
        root: null, // use browser viewport
        rootMargin: '0px',
        threshold: 0.15 // Trigger when 15% of element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // If element is in view
            if (entry.isIntersecting) {
                // Add the class that triggers the CSS transition
                entry.target.classList.add('visible');

                // Stop observing this element after it has animated once
                // (Remove this line if you want animations to re-trigger on scroll up/down)
                observer.unobserve(entry.target);
            }
        });
    }, animationOptions);

    // Select all elements with animation classes
    const elementsToAnimate = document.querySelectorAll(
        '.animate-fade-up, .animate-slide-left, .animate-slide-right'
    );

    // Start observing them
    elementsToAnimate.forEach(el => {
        observer.observe(el);
    });

    // Manually trigger hero section animation on load just in case it's already in view
    const heroContent = document.querySelector('.hero-content');
    if(heroContent) setTimeout(() => heroContent.classList.add('visible'), 100);

});
