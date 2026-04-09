/**
 * Main JS — scroll animations, metric counters, smooth scroll.
 * Vanilla JS, no dependencies.
 */
(function () {
  'use strict';

  // --- Smooth scroll for in-page anchor links ---
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = parseInt(
        getComputedStyle(document.documentElement).getPropertyValue('--header-height') || '72',
        10
      );
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  });

  // --- Animated metric counters ---
  function animateCounter(el) {
    const target  = parseFloat(el.dataset.target || el.textContent.replace(/[^0-9.]/g, ''));
    const prefix  = el.dataset.prefix || '';
    const suffix  = el.dataset.suffix || '';
    const duration = 1800;
    const start    = performance.now();

    function step(now) {
      const elapsed  = now - start;
      const progress = Math.min(elapsed / duration, 1);
      // Ease-out cubic
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = Math.round(eased * target);
      el.textContent = prefix + value.toLocaleString() + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  // Observe metric numbers and trigger counter when visible
  const counterEls = document.querySelectorAll('.metric-card__number[data-target]');
  if (counterEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    counterEls.forEach(function (el) { observer.observe(el); });
  }

  // --- Fade-in on scroll (section reveal) ---
  const revealEls = document.querySelectorAll(
    '.section-header, .pillar-card, .track-card, .why-card, .stage-item, .promise-item, .bridge-card'
  );

  if (revealEls.length && 'IntersectionObserver' in window) {
    // Add initial hidden state via JS (so CSS-off users still see content)
    revealEls.forEach(function (el, i) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.5s ease ' + (i % 5 * 0.08) + 's, transform 0.5s ease ' + (i % 5 * 0.08) + 's';
    });

    const revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );

    revealEls.forEach(function (el) { revealObserver.observe(el); });
  }

})();
