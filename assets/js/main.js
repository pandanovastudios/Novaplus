/**
 * PandaNova Studios - Main JavaScript Controller
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Loader Removal
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => loader.style.display = 'none', 500);
        }, 600);
    }

    // 2. Sticky Navbar & Scroll Progress
    const navbar = document.getElementById('navbar');
    const progressBar = document.getElementById('progressBar');
    const backToTopBtn = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;

        if (progressBar) {
            progressBar.style.width = scrolled + "%";
        }

        if (winScroll > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        if (winScroll > 400) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Mobile Navigation Menu Toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });
    }

    // 4. Scroll Reveal Animations
    const revealElements = document.querySelectorAll('.scroll-reveal');
    const revealOnScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;
        revealElements.forEach(el => {
            const elTop = el.getBoundingClientRect().top;
            if (elTop < triggerBottom) {
                el.classList.add('revealed');
            }
        });
    };

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Trigger initial check

    // 5. Image Lightbox Functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxClose = document.querySelector('.lightbox-close');
    const lightboxDisplay = document.getElementById('lightbox-display');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const triggers = document.querySelectorAll('.lightbox-trigger');

    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const title = trigger.getAttribute('data-title') || 'PandaNova Teaser';
            if (lightboxDisplay) lightboxDisplay.innerText = title;
            if (lightboxCaption) lightboxCaption.innerText = 'Official Promotional Artwork';
            if (lightbox) lightbox.classList.add('active');
        });
    });

    if (lightboxClose) {
        lightboxClose.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });
    }

    // 6. Counter Animation for About Page
    const counters = document.querySelectorAll('.counter-number');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / 100;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
});


