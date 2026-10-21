/**
 * AMROBARI GOVT PRIMARY SCHOOL - INTERACTIVE CORE JS
 * Modern, High-Performance, Vanilla JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
  initThemeToggle();
  initSmartHeader();
  initHeroSlider();
  initCounterAnimation();
  initGalleryFilterAndLightbox();
  initMobileNav();
});

/* --------------------------------------------------------------------------
   1. Dark Mode / Light Mode Switcher with LocalStorage
   -------------------------------------------------------------------------- */
function initThemeToggle() {
  const toggleBtn = document.getElementById('themeToggleBtn');
  if (!toggleBtn) return;

  const currentTheme = localStorage.getItem('school_theme') || 
    (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

  document.documentElement.setAttribute('data-theme', currentTheme);
  updateThemeIcon(toggleBtn, currentTheme);

  toggleBtn.addEventListener('click', () => {
    const activeTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = activeTheme === 'dark' ? 'light' : 'dark';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('school_theme', newTheme);
    updateThemeIcon(toggleBtn, newTheme);
  });
}

function updateThemeIcon(btn, theme) {
  btn.innerHTML = theme === 'dark' 
    ? '<i class="ti-sun"></i>' 
    : '<i class="ti-shine"></i>';
  btn.setAttribute('aria-label', theme === 'dark' ? 'লাইট মোড অন করুন' : 'ডার্ক মোড অন করুন');
}

/* --------------------------------------------------------------------------
   2. Smart Sticky Header (No Gap, Seamless GPU-accelerated motion)
   -------------------------------------------------------------------------- */
function initSmartHeader() {
  const header = document.querySelector('.smart-header');
  const topBar = document.querySelector('.top-bar');
  if (!header) return;

  function updateBodySpacing() {
    const headerHeight = header.offsetHeight;
    document.body.style.paddingTop = headerHeight + 'px';
  }

  updateBodySpacing();
  window.addEventListener('resize', updateBodySpacing);

  let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
  let ticking = false;

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
        const topBarHeight = topBar ? topBar.offsetHeight : 0;
        const navMenu = document.querySelector('.nav-menu');
        const isMenuOpen = navMenu && navMenu.classList.contains('open');

        if (currentScrollY <= 15) {
          header.style.transform = 'translateY(0)';
        } else if (isMenuOpen) {
          header.style.transform = 'translateY(0)';
        } else if (currentScrollY > topBarHeight && currentScrollY > lastScrollY) {
          // Scroll down: hide top bar smoothly
          header.style.transform = `translateY(-${topBarHeight}px)`;
        } else if (currentScrollY < lastScrollY) {
          // Scroll up: reveal full header
          header.style.transform = 'translateY(0)';
        }

        lastScrollY = Math.max(0, currentScrollY);
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });

  window.addEventListener('load', updateBodySpacing);
}

/* --------------------------------------------------------------------------
   3. Interactive Hero Slider with Auto-play & Touch Controls
   -------------------------------------------------------------------------- */
function initHeroSlider() {
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.slider-dot');
  const prevBtn = document.getElementById('sliderPrevBtn');
  const nextBtn = document.getElementById('sliderNextBtn');
  
  if (!slides.length) return;

  let currentIndex = 0;
  let slideInterval = null;

  function goToSlide(index) {
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === index);
    });
    dots.forEach((d, i) => {
      d.classList.toggle('active', i === index);
    });
    currentIndex = index;
  }

  function nextSlide() {
    const nextIdx = (currentIndex + 1) % slides.length;
    goToSlide(nextIdx);
  }

  function prevSlide() {
    const prevIdx = (currentIndex - 1 + slides.length) % slides.length;
    goToSlide(prevIdx);
  }

  function startAutoPlay() {
    stopAutoPlay();
    slideInterval = setInterval(nextSlide, 5000);
  }

  function stopAutoPlay() {
    if (slideInterval) clearInterval(slideInterval);
  }

  if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); startAutoPlay(); });
  if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); startAutoPlay(); });

  dots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      goToSlide(idx);
      startAutoPlay();
    });
  });

  const sliderContainer = document.querySelector('.hero-slider-section');
  if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', stopAutoPlay);
    sliderContainer.addEventListener('mouseleave', startAutoPlay);
  }

  startAutoPlay();
}

/* --------------------------------------------------------------------------
   4. Animated Metric Number Counters (Bangla digits support)
   -------------------------------------------------------------------------- */
function initCounterAnimation() {
  const statBoxes = document.querySelectorAll('.stat-item-box');
  if (!statBoxes.length) return;

  const banglaDigits = {'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};

  function toBanglaNum(num) {
    return String(num).replace(/[0-9]/g, d => banglaDigits[d]);
  }

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const valElem = entry.target.querySelector('.stat-value');
        if (valElem) {
          const target = parseInt(valElem.getAttribute('data-target') || '0', 10);
          const suffix = valElem.getAttribute('data-suffix') || '';
          let count = 0;
          const duration = 1600;
          const step = Math.ceil(target / (duration / 25));

          const counter = setInterval(() => {
            count += step;
            if (count >= target) {
              count = target;
              clearInterval(counter);
            }
            valElem.textContent = toBanglaNum(count) + suffix;
          }, 25);
        }
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.25 });

  statBoxes.forEach(box => observer.observe(box));
}

/* --------------------------------------------------------------------------
   5. Filterable Gallery & Fullscreen Lightbox Modal
   -------------------------------------------------------------------------- */
function initGalleryFilterAndLightbox() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryCards = document.querySelectorAll('.gallery-card');
  const modal = document.getElementById('galleryModal');
  const modalImg = document.getElementById('modalImage');
  const modalCaption = document.getElementById('modalCaption');
  const closeBtn = document.querySelector('.modal-close-btn');

  // Filter Buttons
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const cat = btn.getAttribute('data-filter');

      galleryCards.forEach(card => {
        if (cat === 'all' || card.getAttribute('data-category') === cat) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Lightbox
  if (modal && modalImg) {
    galleryCards.forEach(card => {
      card.addEventListener('click', () => {
        const img = card.querySelector('img');
        const caption = card.querySelector('.gallery-overlay h5');
        if (img) {
          modalImg.src = img.src;
          if (modalCaption && caption) modalCaption.textContent = caption.textContent;
          modal.classList.add('active');
          document.body.style.overflow = 'hidden';
        }
      });
    });

    const closeModal = () => {
      modal.classList.remove('active');
      document.body.style.overflow = '';
    };

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
    });
  }
}

/* --------------------------------------------------------------------------
   6. Mobile Navigation Drawer
   -------------------------------------------------------------------------- */
function initMobileNav() {
  const toggleBtn = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      const isOpen = navMenu.classList.contains('open');
      toggleBtn.innerHTML = isOpen 
        ? '<i class="ti-close"></i>' 
        : '<i class="ti-menu"></i>';
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !toggleBtn.contains(e.target) && navMenu.classList.contains('open')) {
        navMenu.classList.remove('open');
        toggleBtn.innerHTML = '<i class="ti-menu"></i>';
      }
    });
  }
}
