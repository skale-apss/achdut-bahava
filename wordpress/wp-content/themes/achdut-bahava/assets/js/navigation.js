/**
 * Navigation — sticky header, mobile menu toggle.
 * Vanilla JS, no dependencies.
 */
(function () {
  'use strict';

  const header  = document.querySelector('.site-header');
  const toggle  = document.querySelector('.menu-toggle');
  const nav     = document.querySelector('.primary-nav');
  const SOLID   = 'site-header--solid';
  const TRANS   = 'site-header--transparent';
  const OPEN    = 'is-open';

  if (!header) return;

  // --- Sticky header: transparent → solid on scroll ---
  function updateHeader() {
    const scrolled = window.scrollY > 60;
    header.classList.toggle(SOLID, scrolled);
    header.classList.toggle(TRANS, !scrolled);
  }

  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });

  // --- Mobile menu toggle ---
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      const isOpen = nav.classList.toggle(OPEN);
      toggle.setAttribute('aria-expanded', String(isOpen));
      // Prevent body scroll when menu is open
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close menu on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains(OPEN)) {
        nav.classList.remove(OPEN);
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        toggle.focus();
      }
    });

    // Close when a nav link is clicked (mobile)
    nav.querySelectorAll('.primary-nav__link').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove(OPEN);
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }
})();
