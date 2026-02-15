import './bootstrap';
import Alpine from 'alpinejs';

/* -------------------------------------------------------
   Alpine.js — Navigation
   ------------------------------------------------------- */
Alpine.data('navigation', () => ({
    scrolled: false,
    mobileOpen: false,

    init() {
        this.checkScroll();
        window.addEventListener('scroll', () => this.checkScroll(), { passive: true });
    },

    checkScroll() {
        this.scrolled = window.scrollY > 50;
    },

    toggleMobile() {
        this.mobileOpen = !this.mobileOpen;
        document.body.style.overflow = this.mobileOpen ? 'hidden' : '';
    },

    closeMobile() {
        this.mobileOpen = false;
        document.body.style.overflow = '';
    },
}));

/* -------------------------------------------------------
   Alpine.js — Contact form
   ------------------------------------------------------- */
Alpine.data('contactForm', () => ({
    formData: {
        name: '',
        email: '',
        subject: '',
        message: '',
    },
    errors: {},
    success: false,
    submitting: false,
    honeypot: '',

    async submit() {
        if (this.honeypot) {
            return;
        }

        this.submitting = true;
        this.errors = {};
        this.success = false;

        try {
            const formEl = this.$refs.form;
            const formData = new FormData(formEl);

            const response = await fetch(formEl.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
            });

            const data = await response.json();

            if (!response.ok) {
                this.errors = data.errors
                    ? data.errors
                    : { general: [data.message || 'Something went wrong. Please try again.'] };
            } else {
                this.success = true;
                this.formData = { name: '', email: '', subject: '', message: '' };
                formEl.reset();
            }
        } catch {
            this.errors = { general: ['A network error occurred. Please try again.'] };
        } finally {
            this.submitting = false;
        }
    },
}));

/* -------------------------------------------------------
   Alpine.js — Counter animation
   ------------------------------------------------------- */
Alpine.data('counter', (target, suffix = '') => ({
    count: 0,
    target: target,
    suffix: suffix,
    animated: false,

    init() {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !this.animated) {
                this.animated = true;
                this.animateCounter();
                observer.unobserve(this.$el);
            }
        }, { threshold: 0.3 });

        observer.observe(this.$el);
    },

    animateCounter() {
        const duration = 2000;
        const start = performance.now();

        const animate = (now) => {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);

            this.count = Math.floor(eased * this.target);

            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                this.count = this.target;
            }
        };

        requestAnimationFrame(animate);
    },

    get display() {
        return this.count + this.suffix;
    },
}));

/* -------------------------------------------------------
   Start Alpine
   ------------------------------------------------------- */
window.Alpine = Alpine;
Alpine.start();

/* -------------------------------------------------------
   Scroll-reveal — Intersection Observer
   ------------------------------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
    const revealSelectors = '.reveal, .reveal-left, .reveal-right, .line-animate, .img-reveal';
    const revealElements = document.querySelectorAll(revealSelectors);

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -50px 0px' },
    );

    revealElements.forEach((el) => observer.observe(el));

    /* ---------------------------------------------------
       Email & phone obfuscation (anti-scraping)
       --------------------------------------------------- */
    document.querySelectorAll('[data-encode]').forEach((el) => {
        const encoded = el.getAttribute('data-encode');
        const decoded = atob(encoded);
        const type = el.getAttribute('data-type') || 'email';

        if (type === 'email') {
            el.href = 'mailto:' + decoded;
            el.textContent = decoded;
        } else if (type === 'phone') {
            el.href = 'tel:' + decoded.replace(/\s/g, '');
            el.textContent = decoded;
        }
    });

    /* ---------------------------------------------------
       Magnetic button effect
       --------------------------------------------------- */
    document.querySelectorAll('.magnetic-btn').forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transition = 'transform 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
            btn.style.transform = 'translate(0, 0)';
        });

        btn.addEventListener('mouseenter', () => {
            btn.style.transition = 'none';
        });
    });

    /* ---------------------------------------------------
       Parallax for background elements
       --------------------------------------------------- */
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    if (parallaxElements.length > 0) {
        window.addEventListener(
            'scroll',
            () => {
                const scrollY = window.scrollY;

                parallaxElements.forEach((el) => {
                    const speed = parseFloat(el.getAttribute('data-parallax')) || 0.3;
                    const rect = el.getBoundingClientRect();

                    if (rect.top < window.innerHeight && rect.bottom > 0) {
                        el.style.transform = `translateY(${scrollY * speed}px)`;
                    }
                });
            },
            { passive: true },
        );
    }
});
