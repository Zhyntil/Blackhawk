<?php
/*
 * Shared sidebar navigation.
 * To add, remove, or reorder a menu item, edit this list only —
 * every page that includes this file picks up the change.
 *
 * Format: 'file-name.html' => 'Label shown in the menu'
 * (File names are unchanged from the old site so existing links and
 *  bookmarks keep working; only the labels were cleaned up.)
 */
$navItems = [
    '/'                        => 'Home',
    'contact-us.html'          => 'Contact Us',
    'half-inch.html'           => '1/2" Buttons',
    'five-eigths.html'         => '5/8" Buttons',
    'three-quarter.html'       => '3/4" Buttons',
    'thirteen-sixteenths.html' => '13/16" Buttons',
    'seven-eigths.html'        => '7/8" Buttons',
    'one-inch.html'            => '1" Buttons',
    'one-one-quarter.html'     => '1 1/4" Buttons',
    'one-one-half.html'        => '1 1/2" Buttons',
    'specialty-backings.html'  => 'Specialty Backings',
    'antlers.html'             => 'Antlers',
    'coins.html'               => 'Coins',
    'pewter.html'              => 'Pewter',
    'hat-bands.html'           => 'Hat Bands',
    'gifts.html'               => 'Gifts',
    'concho-belts.html'        => 'Concho Belts',
    'fancy-buckles.html'       => 'Fancy Buckles',
    'bolos.html'               => 'Bolos',
    'options.html'             => 'Options',
    'plain-buttons.html'       => 'Plain Buttons',
    'custom-designs.html'      => 'Custom Designs',
    'returns.html'             => 'Returns',
    'specialssale.html'        => 'Specials / Sale',
    'rarecollectible.html'     => 'Rare / Collectible',
    'overstock-sale.html'      => 'Overstock Sale',
    'the-vault.html'           => 'The Vault',
    'new-designs.html'         => 'New Designs',
    'orders-pricing.html'      => 'Orders & Pricing',
    'about-us.html'            => 'About Us',   // moved to the bottom per Scott
];

// Figure out which page we're on so its menu item can be highlighted.
$current = basename($_SERVER['SCRIPT_NAME']);
if ($current === 'index.php') {
    $current = '/';
}
?>
<nav class="sidenav" id="sidenav" aria-label="Site menu">
  <button class="sidenav-toggle" type="button" aria-expanded="false" aria-controls="sidenav-list">
    Menu
  </button>
  <ul id="sidenav-list">
<?php foreach ($navItems as $href => $label): ?>
    <li><a href="<?= htmlspecialchars($href) ?>"<?= $href === $current ? ' aria-current="page"' : '' ?>><?= htmlspecialchars($label) ?></a></li>
<?php endforeach; ?>
  </ul>
</nav>
