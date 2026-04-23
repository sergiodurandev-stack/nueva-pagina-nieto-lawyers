(function($){
  'use strict';

  /* ── Sticky header ── */
  const header = document.querySelector('.site-header');
  function onScroll() {
    header && header.classList.toggle('scrolled', window.scrollY > 60);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── Mobile menu ── */
  const toggle = document.querySelector('.menu-toggle');
  const nav    = document.querySelector('.primary-nav');
  const spans  = toggle ? toggle.querySelectorAll('span') : [];

  if (toggle && nav) {
    toggle.addEventListener('click', function() {
      nav.classList.toggle('open');
      const open = nav.classList.contains('open');
      document.body.style.overflow = open ? 'hidden' : '';
      if (spans[0]) spans[0].style.transform = open ? 'rotate(45deg) translate(5px,5px)' : '';
      if (spans[1]) spans[1].style.opacity  = open ? '0' : '1';
      if (spans[2]) spans[2].style.transform = open ? 'rotate(-45deg) translate(5px,-5px)' : '';
    });

    nav.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', function() {
        nav.classList.remove('open');
        document.body.style.overflow = '';
        spans.forEach(function(s) { s.style.transform = ''; s.style.opacity = ''; });
      });
    });
  }

  /* ── Scroll reveal ── */
  const reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function(el) { observer.observe(el); });
  } else {
    reveals.forEach(function(el) { el.classList.add('visible'); });
  }

  /* ── Active nav link on scroll ── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.primary-nav a[href^="#"]');
  function highlightNav() {
    let current = '';
    sections.forEach(function(s) {
      if (window.scrollY >= s.offsetTop - 120) current = s.id;
    });
    navLinks.forEach(function(a) {
      a.classList.toggle('active', a.getAttribute('href') === '#' + current);
    });
  }
  window.addEventListener('scroll', highlightNav, { passive: true });

  /* ── Contact form ── */
  const form = document.querySelector('#nlContactForm');
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      const btn     = form.querySelector('[type=submit]');
      const resp    = document.querySelector('#nlFormResponse');
      const origTxt = btn.textContent;

      btn.disabled    = true;
      btn.textContent = 'Enviando…';
      if (resp) { resp.className = 'form-response'; resp.textContent = ''; }

      $.ajax({
        url:  NietoAjax.url,
        type: 'POST',
        data: {
          action:  'nieto_contact',
          nonce:   NietoAjax.nonce,
          name:    form.querySelector('[name=name]').value,
          email:   form.querySelector('[name=email]').value,
          phone:   form.querySelector('[name=phone]') ? form.querySelector('[name=phone]').value : '',
          area:    form.querySelector('[name=area]')  ? form.querySelector('[name=area]').value  : '',
          message: form.querySelector('[name=message]').value,
        },
        success: function(r) {
          if (r.success) {
            if (resp) { resp.className = 'form-response success'; resp.textContent = r.data.message; }
            form.reset();
          } else {
            if (resp) { resp.className = 'form-response error'; resp.textContent = r.data.message; }
          }
        },
        error: function() {
          if (resp) { resp.className = 'form-response error'; resp.textContent = 'Error de conexión. Intenta de nuevo.'; }
        },
        complete: function() {
          btn.disabled    = false;
          btn.textContent = origTxt;
        }
      });
    });
  }

  /* ── Job application form ── */
  const jobForm = document.querySelector('#nlJobForm');
  if (jobForm) {
    jobForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const btn     = jobForm.querySelector('[type=submit]');
      const resp    = document.querySelector('#nlJobFormResponse');
      const origTxt = btn.textContent;

      btn.disabled    = true;
      btn.textContent = 'Enviando…';
      if (resp) { resp.className = 'form-response'; resp.textContent = ''; }

      $.ajax({
        url:  NietoAjax.url,
        type: 'POST',
        data: {
          action:  'nieto_job_application',
          nonce:   NietoAjax.nonce,
          name:    jobForm.querySelector('[name=name]').value,
          email:   jobForm.querySelector('[name=email]').value,
          phone:   jobForm.querySelector('[name=phone]') ? jobForm.querySelector('[name=phone]').value : '',
          area:    jobForm.querySelector('[name=area]')  ? jobForm.querySelector('[name=area]').value  : '',
          message: jobForm.querySelector('[name=message]').value,
        },
        success: function(r) {
          if (r.success) {
            if (resp) { resp.className = 'form-response success'; resp.textContent = r.data.message; }
            jobForm.reset();
          } else {
            if (resp) { resp.className = 'form-response error'; resp.textContent = r.data.message; }
          }
        },
        error: function() {
          if (resp) { resp.className = 'form-response error'; resp.textContent = 'Error de conexión. Intenta de nuevo.'; }
        },
        complete: function() {
          btn.disabled    = false;
          btn.textContent = origTxt;
        }
      });
    });
  }

  /* ── Counter animation ── */
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const duration = 1800;
    const step = Math.ceil(target / (duration / 16));
    let current = 0;
    const timer = setInterval(function() {
      current += step;
      if (current >= target) { current = target; clearInterval(timer); }
      el.textContent = current + (el.dataset.suffix || '');
    }, 16);
  }

  const counters = document.querySelectorAll('[data-counter]');
  if (counters.length && 'IntersectionObserver' in window) {
    const co = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          co.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(function(el) { co.observe(el); });
  }

})(jQuery);
