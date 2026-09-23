<?php
$pageTitle       = 'Blackhawk Trading Co. | American-Made Metal Buttons, Conchos & Bolos';
$pageDescription = 'Blackhawk Trading Co., American makers of fine stamped metal and pewter buttons, conchos, bolos and more since 1984. Western, Celtic, contemporary and custom designs.';
include __DIR__ . '/includes/header.php';

// Category cards on the landing page. Edit this list to change the grid.
$categories = [
    ['href' => 'one-inch.html',       'img' => 'images/ib-1.gif',             'title' => 'Buttons & Conchos', 'text' => 'Original stamped designs from 1/2" to 1 1/2".'],
    ['href' => 'bolos.html',          'img' => 'images/bb13-2.gif',           'title' => 'Bolos',             'text' => 'Classic western bolo ties.'],
    ['href' => 'concho-belts.html',   'img' => 'images/dc101.gif',            'title' => 'Concho Belts',      'text' => 'Handsome concho belts in several styles.'],
    ['href' => 'fancy-buckles.html',  'img' => 'images/rb1-u90097.png',       'title' => 'Fancy Buckles',     'text' => 'Ranger sets and decorative buckles.'],
    ['href' => 'coins.html',          'img' => 'images/mb-1.png',             'title' => 'Coins',             'text' => 'Buttons made from genuine U.S. and world coins.'],
    ['href' => 'antlers.html',        'img' => 'images/ant_bard1.jpg',        'title' => 'Antlers',           'text' => 'Natural antler buttons.'],
    ['href' => 'new-designs.html',    'img' => 'images/celtic%20design%201.png','title' => 'New Designs',     'text' => 'The latest additions to our line.'],
    ['href' => 'gifts.html',          'img' => 'images/keychains.jpg',        'title' => 'Gifts',             'text' => 'Key chains, money clips and more.'],
];

// Button sizes for the quick-jump strip.
$sizes = [
    'half-inch.html'           => '1/2"',
    'five-eigths.html'         => '5/8"',
    'three-quarter.html'       => '3/4"',
    'thirteen-sixteenths.html' => '13/16"',
    'seven-eigths.html'        => '7/8"',
    'one-inch.html'            => '1"',
    'one-one-quarter.html'     => '1 1/4"',
    'one-one-half.html'        => '1 1/2"',
];
?>

    <section class="hero">
      <p class="eyebrow">Made in the USA &middot; Since 1984</p>
      <h1>Fine stamped metal buttons, conchos &amp; bolos</h1>
      <p class="lede">
        Crafted in sterling silver, nickel silver, brass, copper and pewter, using
        USA-sourced metals that meet safety standards for the apparel industry.
        Choose from our original designs, or create a custom signature piece to brand your product.
      </p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="orders-pricing.html">Orders &amp; Pricing</a>
        <a class="btn btn-secondary" href="custom-designs.html">Custom Designs</a>
      </div>
    </section>

    <section class="sizes" aria-labelledby="sizes-heading">
      <h2 id="sizes-heading">Shop buttons by size</h2>
      <ul class="size-list">
<?php foreach ($sizes as $href => $label): ?>
        <li><a href="<?= $href ?>"><?= htmlspecialchars($label) ?></a></li>
<?php endforeach; ?>
      </ul>
    </section>

    <section aria-labelledby="cat-heading">
      <h2 id="cat-heading">Browse our products</h2>
      <ul class="card-grid">
<?php foreach ($categories as $c): ?>
        <li>
          <a class="card" href="<?= $c['href'] ?>">
            <span class="card-img"><img src="<?= $c['img'] ?>" alt="" loading="lazy"></span>
            <span class="card-title"><?= htmlspecialchars($c['title']) ?></span>
            <span class="card-text"><?= htmlspecialchars($c['text']) ?></span>
          </a>
        </li>
<?php endforeach; ?>
      </ul>
    </section>

    <section class="promise">
      <div>
        <h2>Minority owned, made in America</h2>
        <p>
          Blackhawk Trading Co. has been mastering the art of fine stamped metal since 1984.
          No order is too small or too large, and we ship all over the world.
        </p>
        <p><a href="about-us.html">Read our story &rarr;</a></p>
      </div>
      <div class="promise-contact">
        <h2>Questions or a quote?</h2>
        <p>Call <a href="tel:+15058716120">1-505-871-6120</a><br>
           or email <a href="mailto:info@blackhawktradingco.com">info@blackhawktradingco.com</a></p>
        <p><a href="contact-us.html">Contact us &rarr;</a></p>
      </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
