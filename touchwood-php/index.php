<?php
require __DIR__ . '/includes/data.php';
require __DIR__ . '/includes/header.php';
$heroWords = explode(' ', 'A Home Away From Home');
?>

<!-- HERO -->
<section class="hero" id="top">
  <div class="hero-bg" data-parallax="0.25">
    <img src="<?= e($images['hero']) ?>" alt="Aerial view of Touchwood Bliss in the hills of Igatpuri" data-hide-on-error>
  </div>
  <div class="hero-copy">
    <h1>
      <?php foreach ($heroWords as $i => $w): ?>
        <span class="word"><span style="animation-delay:<?= 0.15 + $i * 0.09 ?>s"><?= e($w) ?>&nbsp;</span></span>
      <?php endforeach; ?>
    </h1>
    <p class="sub">Why most people are choosing a second home</p>
  </div>
  <div class="scroll-cue"><button aria-label="Scroll to article" data-scroll="#article"></button></div>
</section>

<!-- ARTICLE -->
<section class="article" id="article">
  <div class="narrow">
    <p class="eyebrow reveal">Touchwood Lifespaces · Blog</p>
    <h2 class="title reveal d1" style="margin:0;padding:0">A Home Away From Home: Why Most People Are Choosing a Second Home</h2>
    <p class="meta reveal d2">Thoughtful by Nature · 5 min read</p>

    <p class="lead reveal">What truly makes a place unforgettable? Is it the mountain views, the comfortable rooms, the peaceful silence away from the city, the food? Or the way a place makes you feel? More and more people are answering that last one, and it is a big reason a second home has moved from “someday” to “now”.</p>
    <p class="reveal">A second home is not about owning more. It is about having somewhere you can arrive and feel, almost immediately, that the chaos of everyday life is fading. The air feels fresher, the mountains feel calmer, and somehow you begin breathing a little deeper.</p>

    <h2 class="reveal">It starts with a feeling of belonging</h2>
    <p class="reveal">At Touchwood Bliss, the idea is simple: you are not welcomed like a guest, you are welcomed like family. Between the warm hospitality, the peaceful atmosphere and the views, you start feeling at home in a place away from home. That sense of belonging is what people are really looking for when they decide to buy a second home rather than keep renting a holiday stay.</p>

    <figure class="figure reveal">
      <img src="<?= e($images['amora']) ?>" alt="Amora Villa at Touchwood Bliss" loading="lazy" data-hide-on-error>
      <figcaption>Amora Villa, India’s first biophilic villa, at Touchwood Bliss, Igatpuri.</figcaption>
    </figure>

    <blockquote class="pull reveal">Between mountains and moments, you don’t just spend time… you feel it.</blockquote>

    <h2 class="reveal">Why people are choosing a second home</h2>
  </div>

  <div class="wrap reasons">
    <div class="reason-grid">
      <?php foreach ($reasons as $i => [$t, $p]): ?>
        <div class="reason reveal d<?= $i ?>">
          <div class="num">0<?= $i + 1 ?></div>
          <h3><?= e($t) ?></h3>
          <p><?= e($p) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="narrow">
    <h2 class="reveal">Nature should be part of the design</h2>
    <p class="reveal">The most loved second homes are not boxes dropped on a hillside. At Touchwood Bliss, the Farmsyde villas were planned on a 3-acre plot where the villas occupy half the land and the other half keeps its existing farms. Courts, verandas and rooftop machans are part of the layout, and the sloping roofs and walls blend with the landscape, echoing the nearby hills and streams while managing rainwater runoff. The result is a “rurban” setting where urban aesthetics meet rural vibes.</p>
    <p class="reveal">Amora takes it further as India’s first biophilic villa, crafted to bring nature into every corner, while the Courtyard Villa brings the soul of Kerala living, with light, stillness and an infinity pool facing the mountains.</p>

    <figure class="figure reveal">
      <img src="<?= e($images['farmsyde']) ?>" alt="Farmsyde Villas" loading="lazy" data-hide-on-error>
      <figcaption>Farmsyde Villas: where urban aesthetics meet rural vibes.</figcaption>
    </figure>

    <h2 class="reveal">Food, slow evenings and a pace you choose</h2>
    <p class="reveal">Meals matter when a place is meant to feel like home. Every dish at Touchwood Bliss begins with ingredients grown on the farm or sourced from trusted local growers. The kitchen is pure vegetarian, with Jain food on request, and evenings often move to Roots Cafe, a nature-integrated cafe. It is food that is crafted to nourish your body, mind and soul, and it is easy to see why people want that routine within reach of their own front door.</p>
    <p class="reveal">And when you want to step outside, there is plenty close by: Bhavali Dam, Camel Valley, Vihigaon Waterfall and the trek to Kalsubai, the highest peak in Maharashtra. A guided nature trail also leads to Touchwood Valley, a quiet valley retreat near the property, ideal for couples, families and anyone who simply wants stillness.</p>

    <h2 class="reveal">The simple test for a second home</h2>
    <p class="reveal">In a world that keeps rushing forward, a second home reminds you to slow down. To reconnect. To laugh longer, stay present and enjoy silence. If a place helps you do that, close enough that you will really go, and welcoming enough that everyone from kids to grandparents feels cared for, it is doing its job. For those who want to be part of that kind of place, the time to start the conversation is now.</p>
  </div>
</section>

<!-- BAND + STATS -->
<section class="band">
  <div class="band-bg" data-parallax="0.18"><img src="<?= e($images['band']) ?>" alt="" data-hide-on-error></div>
  <div class="wrap">
    <h2 class="reveal">Far enough to switch off. Near enough to come back often.</h2>
    <div class="stats">
      <?php foreach ($stats as $i => [$to, $prefix, $suffix, $label]): ?>
        <div class="stat reveal d<?= $i % 3 ?>">
          <b data-count="<?= (int)$to ?>" data-prefix="<?= e($prefix) ?>" data-suffix="<?= e($suffix) ?>"><?= e($prefix) ?>0<?= e($suffix) ?></b>
          <span><?= e($label) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- VILLAS -->
<section class="villas" id="villas">
  <div class="wrap">
    <div class="head reveal">
      <p class="eyebrow">At Touchwood Bliss, Igatpuri</p>
      <h2 class="section-title">Three ways to make it <em>feel like home</em></h2>
    </div>
    <div class="tabs" role="tablist">
      <?php foreach ($villas as $i => $v): ?>
        <button class="tab<?= $i === 0 ? ' active' : '' ?>" role="tab" data-villa-tab="<?= e($v['id']) ?>"
                aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"><?= e($v['name']) ?></button>
      <?php endforeach; ?>
    </div>
    <?php foreach ($villas as $i => $v): ?>
      <div class="villa" data-villa="<?= e($v['id']) ?>" data-name="<?= e($v['name']) ?>" data-tagline="<?= e($v['tagline']) ?>"<?= $i === 0 ? '' : ' hidden' ?>>
        <div class="villa-photos">
          <img class="villa-main" src="<?= e($v['photos'][0]) ?>" alt="<?= e($v['name']) ?>" data-hide-on-error>
          <div class="thumbs">
            <?php foreach ($v['photos'] as $j => $p): ?>
              <button class="<?= $j === 0 ? 'active' : '' ?>" data-photo="<?= e($p) ?>" aria-label="Photo <?= $j + 1 ?>"><img src="<?= e($p) ?>" alt="" data-hide-on-error></button>
            <?php endforeach; ?>
          </div>
        </div>
        <div>
          <h3><?= e($v['name']) ?></h3>
          <p class="tag"><?= e($v['tagline']) ?></p>
          <p><?= e($v['blurb']) ?></p>
          <ul><?php foreach ($v['bullets'] as $b): ?><li><?= e($b) ?></li><?php endforeach; ?></ul>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- MATCHER -->
<section class="matcher">
  <div class="narrow">
    <h2 class="section-title reveal">What would your home away from home be for?</h2>
    <div class="choices">
      <?php foreach ($matcher as [$label, $villaId]): ?>
        <button class="choice" data-match="<?= e($villaId) ?>"><?= e($label) ?></button>
      <?php endforeach; ?>
    </div>
    <p class="match-result" id="matchResult">Pick what matters most to you and we’ll point you to the matching villa.</p>
  </div>
</section>

<!-- GALLERY -->
<section class="gallery">
  <div class="wrap">
    <div class="head reveal">
      <p class="eyebrow">Gallery</p>
      <h2 class="section-title">A look around <em>Touchwood Bliss</em></h2>
    </div>
    <div class="masonry" id="masonry">
      <?php foreach ($gallery as $i => [$src, $alt]): ?>
        <button class="reveal" data-index="<?= $i ?>" aria-label="Open: <?= e($alt) ?>">
          <img src="<?= e($src) ?>" alt="<?= e($alt) ?>" loading="lazy" data-hide-parent-on-error>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq">
  <div class="narrow">
    <div class="head reveal">
      <p class="eyebrow">Good to know</p>
      <h2 class="section-title">Questions about a <em>second home</em></h2>
    </div>
    <?php foreach ($faqs as $i => [$q, $a]): ?>
      <div class="qa reveal<?= $i === 0 ? ' open' : '' ?>">
        <button aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"><?= e($q) ?><span class="plus"></span></button>
        <div class="ans"><div><p><?= e($a) ?></p></div></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="cta" id="contact">
  <div class="wrap">
    <h2 class="reveal">Ready to find your home away from home?</h2>
    <p class="reveal d1">Talk to the Touchwood Lifespaces team about what is open right now.</p>
    <div class="row reveal d2">
      <a class="btn" href="<?= e(tel($contact['phones'][0])) ?>">Call <?= e($contact['phones'][0]) ?></a>
      <a class="btn ghost" href="mailto:<?= e($contact['email']) ?>">Write to us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
