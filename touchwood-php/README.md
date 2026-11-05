# A Home Away From Home — Touchwood Lifespaces blog page (PHP)

Plain PHP + vanilla JavaScript. No Node, npm or database needed.

## Run it locally

**Option 1: PHP built-in server** (if PHP is installed)

    php -S localhost:8000

Then open http://localhost:8000

**Option 2: XAMPP / WAMP / Laragon**

Copy this folder into `htdocs` (XAMPP) or `www` (WAMP), start Apache, and open
http://localhost/touchwood-php/

**Option 3: Upload to hosting**

Upload the whole folder to your web host (needs PHP 7.4 or newer). It works as `index.php`.

## Files

- `index.php`: the page
- `includes/data.php`: all text facts, contact details and image paths (edit here)
- `includes/header.php`, `includes/footer.php`: shared header and footer
- `assets/css/style.css`: styling
- `assets/js/main.js`: smooth scroll, progress bar, reveal animations, tabs, gallery, FAQ

Needs an internet connection for the Google fonts, the Lenis smooth-scroll library (CDN) and the photos,
which load from touchwoodbliss.com. If Lenis cannot load, the page falls back to the browser's normal smooth scrolling.
