(function () {
  'use strict';

  /* ─── DOM READY ─── */
  document.addEventListener('DOMContentLoaded', function () {

    /* ─── MOBILE HAMBURGER MENU ─── */
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const body = document.body;

    if (hamburger) {
      hamburger.addEventListener('click', function () {
        this.classList.toggle('open');
        navLinks.classList.toggle('open');
        body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
      });

      document.querySelectorAll('.nav-links li').forEach(function (link) {
        link.addEventListener('click', function () {
          hamburger.classList.remove('open');
          navLinks.classList.remove('open');
          body.style.overflow = '';
        });
      });
    }

    /* ─── STICKY HEADER ─── */
    const header = document.querySelector('.Navigation-header');
    let lastScroll = 0;

    window.addEventListener('scroll', function () {
      const currentScroll = window.pageYOffset;
      if (currentScroll > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
      lastScroll = currentScroll;
    });

    /* ─── ACTIVE NAV LINK ─── */
    function setActiveNav() {
      const sections = document.querySelectorAll('section[id]');
      const navItems = document.querySelectorAll('.nav-links li');
      let current = '';

      sections.forEach(function (section) {
        const top = section.offsetTop - 120;
        const bottom = top + section.offsetHeight;
        if (window.pageYOffset >= top && window.pageYOffset < bottom) {
          current = section.getAttribute('id');
        }
      });

      navItems.forEach(function (li) {
        li.classList.remove('active');
        if (li.getAttribute('data-section') === current) {
          li.classList.add('active');
        }
      });
    }

    if (document.querySelector('section[id]')) {
      window.addEventListener('scroll', setActiveNav);
    }

    /* ─── SMOOTH SCROLL FOR NAV ─── */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          const headerOffset = 80;
          const elementPosition = target.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
          window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
        }
      });
    });

    /* ─── SCROLL ANIMATIONS (Intersection Observer) ─── */
    const animateElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right');

    if (animateElements.length) {
      const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });

      animateElements.forEach(function (el) {
        observer.observe(el);
      });
    }

    /* ─── BACK TO TOP ─── */
    const backToTop = document.createElement('button');
    backToTop.className = 'back-to-top';
    backToTop.innerHTML = '↑';
    backToTop.setAttribute('aria-label', 'Back to top');
    document.body.appendChild(backToTop);

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 400) {
        backToTop.classList.add('show');
      } else {
        backToTop.classList.remove('show');
      }
    });

    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* ─── TESTIMONIAL SLIDER ─── */
    const testimonialSlider = document.querySelector('.testimonial-slider');
    if (testimonialSlider) {
      const slides = testimonialSlider.querySelectorAll('.testimonial-slide');
      let currentSlide = 0;
      let slideInterval;

      function showSlide(index) {
        slides.forEach(function (s, i) {
          s.classList.toggle('active', i === index);
          s.style.display = i === index ? 'block' : 'none';
        });
      }

      function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
      }

      // Start auto-play
      if (slides.length > 1) {
        showSlide(0);
        slideInterval = setInterval(nextSlide, 5000);

        testimonialSlider.addEventListener('mouseenter', function () {
          clearInterval(slideInterval);
        });

        testimonialSlider.addEventListener('mouseleave', function () {
          slideInterval = setInterval(nextSlide, 5000);
        });

        // Dot navigation
        const dots = testimonialSlider.querySelectorAll('.slider-dot');
        dots.forEach(function (dot, i) {
          dot.addEventListener('click', function () {
            clearInterval(slideInterval);
            currentSlide = i;
            showSlide(currentSlide);
            slideInterval = setInterval(nextSlide, 5000);
          });
        });
      }
    }

    /* ─── PORTFOLIO FILTER ─── */
    const filterBtns = document.querySelectorAll('.filter-btn');
    const filterItems = document.querySelectorAll('.filter-item');

    if (filterBtns.length && filterItems.length) {
      filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
          filterBtns.forEach(function (b) { b.classList.remove('active'); });
          this.classList.add('active');
          const filter = this.getAttribute('data-filter');

          filterItems.forEach(function (item) {
            if (filter === 'all' || item.classList.contains(filter)) {
              item.style.display = 'block';
              item.classList.remove('fade-up');
              void item.offsetWidth;
              item.classList.add('fade-up');
              setTimeout(function () { item.classList.add('visible'); }, 50);
            } else {
              item.style.display = 'none';
              item.classList.remove('visible');
            }
          });
        });
      });
    }

    /* ─── FAQ ACCORDION ─── */
    const faqItems = document.querySelectorAll('.faq-item');
    if (faqItems.length) {
      faqItems.forEach(function (item) {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', function () {
          const isOpen = item.classList.contains('open');
          faqItems.forEach(function (i) { i.classList.remove('open'); });
          if (!isOpen) {
            item.classList.add('open');
          }
        });
      });
    }

    /* ─── CONTACT FORM VALIDATION ─── */
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
      const formStatus = contactForm.querySelector('.form-status');

      // Show toast notification
      function showToast(message, type) {
        const existing = document.querySelector('.toast');
        if (existing) existing.remove();

        const toast = document.createElement('div');
        toast.className = 'toast ' + type;
        toast.textContent = message;
        document.body.appendChild(toast);

        setTimeout(function () { toast.classList.add('show'); }, 100);
        setTimeout(function () {
          toast.classList.remove('show');
          setTimeout(function () { toast.remove(); }, 400);
        }, 4000);
      }

      // Validate single field
      function validateField(field) {
        const errorEl = field.parentElement.querySelector('.error-message');
        if (!errorEl) return true;

        let valid = true;
        let message = '';

        if (field.hasAttribute('required') && !field.value.trim()) {
          valid = false;
          message = field.getAttribute('data-error') || 'This field is required';
        } else if (field.type === 'email' && field.value.trim()) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(field.value.trim())) {
            valid = false;
            message = 'Please enter a valid email address';
          }
        } else if (field.tagName === 'TEXTAREA' && field.value.trim().length < 10) {
          valid = false;
          message = 'Message must be at least 10 characters';
        }

        field.classList.toggle('error', !valid);
        errorEl.textContent = valid ? '' : message;
        errorEl.style.display = valid ? 'none' : 'block';
        return valid;
      }

      // Real-time validation
      contactForm.querySelectorAll('input, textarea').forEach(function (field) {
        field.addEventListener('blur', function () { validateField(this); });
        field.addEventListener('input', function () {
          if (this.classList.contains('error')) {
            validateField(this);
          }
        });
      });

      // Form submit
      contactForm.addEventListener('submit', function (e) {
        e.preventDefault();

        let allValid = true;
        const fields = this.querySelectorAll('input[required], textarea[required]');
        fields.forEach(function (field) {
          if (!validateField(field)) allValid = false;
        });

        if (!allValid) {
          showToast('Please fix the errors before submitting.', 'error');
          return;
        }

        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        const formData = new FormData(this);

        fetch(this.getAttribute('action'), {
          method: 'POST',
          body: formData,
          headers: { 'Accept': 'application/json' }
        })
        .then(function (response) {
          if (response.ok) {
            showToast('Message sent successfully! We\'ll get back to you soon.', 'success');
            contactForm.reset();
            formStatus.className = 'form-status success';
            formStatus.textContent = 'Thank you! Your message has been sent.';
            formStatus.style.display = 'block';
          } else {
            throw new Error('Form submission failed');
          }
        })
        .catch(function () {
          showToast('Oops! Something went wrong. Please try again.', 'error');
          formStatus.className = 'form-status error';
          formStatus.textContent = 'There was a problem sending your message. Please try again.';
          formStatus.style.display = 'block';
        })
        .finally(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;
        });
      });
    }

    /* ─── IMAGE LAZY LOAD ─── */
    if ('loading' in HTMLImageElement.prototype) {
      document.querySelectorAll('img[loading="lazy"]').forEach(function (img) {
        img.src = img.getAttribute('src');
      });
    } else {
      // Fallback: use Intersection Observer
      const lazyImages = document.querySelectorAll('img[data-src]');
      if (lazyImages.length) {
        const imgObserver = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              const img = entry.target;
              img.src = img.getAttribute('data-src');
              img.removeAttribute('data-src');
              imgObserver.unobserve(img);
            }
          });
        });
        lazyImages.forEach(function (img) { imgObserver.observe(img); });
      }
    }

    /* ─── COUNTER ANIMATION ─── */
    const counters = document.querySelectorAll('.counter');
    if (counters.length) {
      const counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.getAttribute('data-target'), 10);
            const duration = 2000;
            const step = Math.ceil(target / (duration / 16));
            let current = 0;

            function updateCounter() {
              current += step;
              if (current >= target) {
                el.textContent = target;
                return;
              }
              el.textContent = current;
              requestAnimationFrame(updateCounter);
            }
            updateCounter();
            counterObserver.unobserve(el);
          }
        });
      }, { threshold: 0.5 });

      counters.forEach(function (c) { counterObserver.observe(c); });
    }

  });
})();
