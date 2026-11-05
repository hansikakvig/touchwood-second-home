(function () {
  'use strict';

  var $ = function (s, r) { return (r || document).querySelector(s); };
  var $$ = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- smooth scrolling (Lenis, falls back to native if the CDN is blocked) ---------- */
  var lenis = null;
  if (window.Lenis) {
    lenis = new Lenis({ duration: reduce ? 0 : 1.25, smoothWheel: !reduce });
    var raf = function (t) { lenis.raf(t); requestAnimationFrame(raf); };
    requestAnimationFrame(raf);
  }
  function scrollToTarget(target, offset) {
    if (lenis) lenis.scrollTo(target, { offset: offset || 0, duration: 1.5 });
    else if (typeof target === 'number') window.scrollTo({ top: target, behavior: 'smooth' });
    else target.scrollIntoView({ behavior: 'smooth' });
  }
  function goTo(sel) {
    if (sel === '#top') return scrollToTarget(0);
    var el = $(sel);
    if (el) scrollToTarget(el, -70);
  }

  $$('[data-scroll]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      e.preventDefault();
      closeMenu();
      goTo(a.getAttribute('data-scroll'));
    });
  });

  /* ---------- header, progress bar, parallax, back-to-top ---------- */
  var header = $('#header'), bar = $('#progressBar'), toTop = $('#toTop');
  var parallax = $$('[data-parallax]');

  function onScroll() {
    var y = window.scrollY || window.pageYOffset;
    var max = document.documentElement.scrollHeight - window.innerHeight;
    bar.style.transform = 'scaleY(' + (max > 0 ? y / max : 0) + ')';
    header.classList.toggle('solid', y > 80 || $('#nav').classList.contains('open'));
    toTop.classList.toggle('show', y > 700);
    if (!reduce) {
      parallax.forEach(function (el) {
        var r = el.parentElement.getBoundingClientRect();
        var speed = parseFloat(el.getAttribute('data-parallax')) || 0.2;
        el.style.transform = 'translate3d(0,' + ((r.top + r.height / 2 - window.innerHeight / 2) * -speed) + 'px,0)';
      });
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  if (lenis) lenis.on('scroll', onScroll);
  onScroll();
  toTop.addEventListener('click', function () { scrollToTarget(0); });

  /* ---------- mobile menu + accent toggle ---------- */
  var nav = $('#nav'), burger = $('#burger');
  function closeMenu() { nav.classList.remove('open'); burger.classList.remove('open'); onScroll(); }
  burger.addEventListener('click', function () {
    nav.classList.toggle('open'); burger.classList.toggle('open'); onScroll();
  });
  var toggle = $('#toggle');
  toggle.addEventListener('click', function () {
    var on = toggle.classList.toggle('on');
    toggle.setAttribute('aria-pressed', on ? 'true' : 'false');
  });

  /* ---------- reveal on scroll ---------- */
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.15 });
    $$('.reveal').forEach(function (el) { io.observe(el); });
  } else {
    $$('.reveal').forEach(function (el) { el.classList.add('in'); });
  }

  /* ---------- count-up stats ---------- */
  function countUp(el) {
    var to = parseInt(el.getAttribute('data-count'), 10);
    var prefix = el.getAttribute('data-prefix') || '', suffix = el.getAttribute('data-suffix') || '';
    var start = performance.now(), dur = 1800;
    (function tick(t) {
      var p = Math.min((t - start) / dur, 1);
      el.textContent = prefix + Math.round(to * (1 - Math.pow(1 - p, 3))).toLocaleString('en-IN') + suffix;
      if (p < 1) requestAnimationFrame(tick);
    })(start);
  }
  if ('IntersectionObserver' in window) {
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { countUp(e.target); cio.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    $$('[data-count]').forEach(function (el) { cio.observe(el); });
  } else {
    $$('[data-count]').forEach(countUp);
  }

  /* ---------- villa tabs + thumbnails ---------- */
  function showVilla(id) {
    $$('[data-villa-tab]').forEach(function (t) {
      var on = t.getAttribute('data-villa-tab') === id;
      t.classList.toggle('active', on);
      t.setAttribute('aria-selected', on ? 'true' : 'false');
    });
    $$('.villa').forEach(function (v) {
      v.hidden = v.getAttribute('data-villa') !== id;
    });
  }
  $$('[data-villa-tab]').forEach(function (t) {
    t.addEventListener('click', function () { showVilla(t.getAttribute('data-villa-tab')); });
  });
  $$('.villa').forEach(function (v) {
    var main = $('.villa-main', v);
    $$('.thumbs button', v).forEach(function (b) {
      b.addEventListener('click', function () {
        main.src = b.getAttribute('data-photo');
        main.style.visibility = 'visible';
        $$('.thumbs button', v).forEach(function (x) { x.classList.toggle('active', x === b); });
      });
    });
  });

  /* ---------- matcher ---------- */
  var result = $('#matchResult');
  $$('[data-match]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      $$('[data-match]').forEach(function (b) { b.classList.toggle('active', b === btn); });
      var id = btn.getAttribute('data-match');
      var v = $('.villa[data-villa="' + id + '"]');
      result.innerHTML = '';
      var b = document.createElement('b');
      b.textContent = v.getAttribute('data-name');
      result.appendChild(document.createTextNode('Take a look at the '));
      result.appendChild(b);
      result.appendChild(document.createTextNode(' — ' + v.getAttribute('data-tagline').toLowerCase() + '. It’s open in the villa section above.'));
      showVilla(id);
      goTo('#villas');
    });
  });

  /* ---------- gallery lightbox ---------- */
  var items = $$('#masonry button img');
  var lb = $('#lightbox'), lbImg = $('#lbImg'), lbCap = $('#lbCap'), cur = 0;
  function openLb(i) {
    cur = (i + items.length) % items.length;
    lbImg.src = items[cur].src; lbImg.alt = items[cur].alt; lbCap.textContent = items[cur].alt;
    if (lb.hidden) { lb.hidden = false; if (lenis) lenis.stop(); document.body.style.overflow = 'hidden'; }
  }
  function closeLb() { lb.hidden = true; if (lenis) lenis.start(); document.body.style.overflow = ''; }
  $$('#masonry button').forEach(function (b, i) { b.addEventListener('click', function () { openLb(i); }); });
  $('#lbClose').addEventListener('click', closeLb);
  $('#lbPrev').addEventListener('click', function (e) { e.stopPropagation(); openLb(cur - 1); });
  $('#lbNext').addEventListener('click', function (e) { e.stopPropagation(); openLb(cur + 1); });
  lb.addEventListener('click', function (e) { if (e.target === lb) closeLb(); });
  document.addEventListener('keydown', function (e) {
    if (lb.hidden) return;
    if (e.key === 'Escape') closeLb();
    if (e.key === 'ArrowRight') openLb(cur + 1);
    if (e.key === 'ArrowLeft') openLb(cur - 1);
  });

  /* ---------- FAQ accordion ---------- */
  var qas = $$('.qa');
  qas.forEach(function (qa) {
    $('button', qa).addEventListener('click', function () {
      var willOpen = !qa.classList.contains('open');
      qas.forEach(function (o) { o.classList.remove('open'); $('button', o).setAttribute('aria-expanded', 'false'); });
      if (willOpen) { qa.classList.add('open'); $('button', qa).setAttribute('aria-expanded', 'true'); }
    });
  });

  /* ---------- hide broken images instead of showing a broken icon ---------- */
  $$('img[data-hide-on-error]').forEach(function (im) {
    im.addEventListener('error', function () { im.style.visibility = 'hidden'; });
  });
  $$('img[data-hide-parent-on-error]').forEach(function (im) {
    im.addEventListener('error', function () { im.parentElement.style.display = 'none'; });
  });
})();
