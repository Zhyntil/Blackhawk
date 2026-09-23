<?php
/*
 * Shared page top: <head>, banner, and the opening of the page layout.
 * Set $pageTitle and $pageDescription BEFORE including this file.
 */
$pageTitle       = $pageTitle       ?? 'Blackhawk Trading Co.';
$pageDescription = $pageDescription ?? 'Blackhawk Trading Co. — American-made stamped metal and pewter buttons, conchos, bolos and more.';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <link rel="stylesheet" href="css/site.css">
</head>
<body>

<header class="site-header">
  <a href="/" class="banner-link">
    <img src="images/blackhawk-page-head.jpg" width="1279" height="357"
         alt="Blackhawk Trading Co.">
  </a>
</header>

<div class="layout">
<?php include __DIR__ . '/nav.php'; ?>
  <main class="content">
