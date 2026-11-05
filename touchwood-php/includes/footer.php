<svg class="palm" viewBox="0 0 90 130" fill="none" stroke="#7ea20c" stroke-width="2" aria-hidden="true">
  <path d="M42 128c2-30 6-55 16-78"/>
  <path d="M58 50C44 34 30 34 16 44M58 50C50 30 56 14 74 6M58 50c8-18 22-26 40-22M58 50c14 0 22 8 26 22M58 50C46 52 34 60 30 74"/>
</svg>
<footer class="footer" id="footer">
  <div class="wrap">
    <div class="f-links">
      <a href="#contact" data-scroll="#contact">Contact Us</a>
      <a href="<?= e(SITE_URL) ?>" target="_blank" rel="noreferrer">Projects</a>
      <a href="<?= e(SITE_URL) ?>" target="_blank" rel="noreferrer">Privacy Policy</a>
      <div class="socials">
        <?php foreach ($contact['social'] as [$label, $short, $href]): ?>
          <a href="<?= e($href) ?>" target="_blank" rel="noreferrer" aria-label="<?= e($label) ?>"><?= e($short) ?></a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="f-col">
      <p class="f-title">Have any Question</p>
      <?php foreach ($contact['phones'] as $p): ?>
        <a class="big" href="<?= e(tel($p)) ?>"><?= e($p) ?></a>
      <?php endforeach; ?>
      <p class="f-title" style="margin-top:24px">Write Email</p>
      <a class="big" href="mailto:<?= e($contact['email']) ?>"><?= e($contact['email']) ?></a>
    </div>
    <div class="f-col">
      <p class="f-title">Corporate Office</p>
      <p><?= e($contact['corporate']) ?></p>
      <p class="f-title" style="margin-top:18px">Site Office</p>
      <p><?= e($contact['site']) ?></p>
    </div>
  </div>
</footer>
<div class="copyright">Copyright © <?= date('Y') ?>| All rights reserved.</div>

<a class="float-call" href="<?= e(tel($contact['phones'][0])) ?>" aria-label="Call Touchwood Lifespaces">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="#fff"><path d="M6.6 10.8a15 15 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25c1.1.37 2.3.57 3.6.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.6a1 1 0 0 1-.25 1z"/></svg>
  Call us
</a>
<button class="to-top" id="toTop" aria-label="Back to top">↑</button>

<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" hidden>
  <button class="lb-btn lb-close" id="lbClose" aria-label="Close">×</button>
  <button class="lb-btn lb-prev" id="lbPrev" aria-label="Previous">‹</button>
  <button class="lb-btn lb-next" id="lbNext" aria-label="Next">›</button>
  <div><img id="lbImg" src="" alt=""><p id="lbCap"></p></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
