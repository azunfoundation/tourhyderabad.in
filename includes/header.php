<?php
if (!defined('TOURHYDERABAD_APP')) {
    require_once __DIR__ . '/config.php';
}
$current = $currentPage ?? 'home';
?>
<!-- Architectural Arch Definition -->
<svg width="0" height="0" style="position:absolute;pointer-events:none" aria-hidden="true">
  <defs>
    <clipPath id="arch" clipPathUnits="objectBoundingBox">
      <path d="M0,1 L0,0.30 C0,0.13 0.13,0.055 0.33,0.028 C0.43,0.014 0.49,0.005 0.5,0 C0.51,0.005 0.57,0.014 0.67,0.028 C0.87,0.055 1,0.13 1,0.30 L1,1 Z"></path>
    </clipPath>
  </defs>
</svg>

<!-- Header Navigation -->
<header class="site-head" data-screen-label="Header">
  <div class="head-in">
    <a href="index.php" class="logo" aria-label="TourHyderabad home">
      <img src="assets/images/logo-mark.jpg" alt="TourHyderabad gold Charminar mark" width="44" height="44" style="border-radius:50%;mix-blend-mode:multiply" loading="eager">
      <span>
        <b>TOUR</b>
        <i>HYDERABAD</i>
      </span>
    </a>
    <nav class="main" aria-label="Main">
      <a href="index.php" class="<?= ($current === 'home') ? 'active' : '' ?>" <?= ($current === 'home') ? 'aria-current="page"' : '' ?>>Home</a>
      <a href="packages.php" class="<?= ($current === 'packages') ? 'active' : '' ?>" <?= ($current === 'packages') ? 'aria-current="page"' : '' ?>>Packages</a>
      <a href="places.php" class="<?= ($current === 'places') ? 'active' : '' ?>" <?= ($current === 'places') ? 'aria-current="page"' : '' ?>>Places</a>
      <a href="about.php" class="<?= ($current === 'about') ? 'active' : '' ?>" <?= ($current === 'about') ? 'aria-current="page"' : '' ?>>About</a>
      <a href="contact.php" class="<?= ($current === 'contact') ? 'active' : '' ?>" <?= ($current === 'contact') ? 'aria-current="page"' : '' ?>>Contact</a>
    </nav>
    <a href="tel:<?= SITE_PHONE_RAW ?>" class="tel" aria-label="Call <?= SITE_PHONE ?>">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.34 1.78.66 2.62a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.46-1.23a2 2 0 0 1 2.11-.45c.84.32 1.72.54 2.62.66A2 2 0 0 1 22 16.92z"></path></svg>
      <?= SITE_PHONE ?>
    </a>
    <div class="head-actions">
      <a href="<?= get_whatsapp_url() ?>" class="pill-wa" aria-label="Chat with TourHyderabad on WhatsApp" target="_blank" rel="noopener">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        <span>WhatsApp Us</span>
      </a>
      <button type="button" class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-drawer">
        <span class="nav-toggle-bar"></span>
        <span class="nav-toggle-bar"></span>
        <span class="nav-toggle-bar"></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-drawer-backdrop" id="drawer-backdrop" aria-hidden="true"></div>
<aside class="mobile-drawer" id="mobile-drawer" aria-label="Mobile navigation" aria-hidden="true">
  <div class="drawer-head">
    <a href="index.php" class="logo" aria-label="TourHyderabad home">
      <img src="assets/images/logo-mark.jpg" alt="TourHyderabad gold Charminar mark" width="38" height="38" style="width:38px;height:38px;border-radius:50%;mix-blend-mode:multiply" loading="eager">
      <span>
        <b>TOUR</b>
        <i>HYDERABAD</i>
      </span>
    </a>
    <button type="button" class="drawer-close" id="drawer-close" aria-label="Close navigation menu">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
  </div>
  <nav class="drawer-nav">
    <a href="index.php" class="<?= ($current === 'home') ? 'active' : '' ?>"><span>Home</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
    <a href="packages.php" class="<?= ($current === 'packages') ? 'active' : '' ?>"><span>Tour Packages</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
    <a href="places.php" class="<?= ($current === 'places') ? 'active' : '' ?>"><span>Places to Visit</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
    <a href="about.php" class="<?= ($current === 'about') ? 'active' : '' ?>"><span>About Us</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
    <a href="contact.php" class="<?= ($current === 'contact') ? 'active' : '' ?>"><span>Contact</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
  </nav>
  <div class="drawer-foot">
    <a href="tel:<?= SITE_PHONE_RAW ?>" class="drawer-tel">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.34 1.78.66 2.62a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.46-1.23a2 2 0 0 1 2.11-.45c.84.32 1.72.54 2.62.66A2 2 0 0 1 22 16.92z"></path></svg>
      <span><?= SITE_PHONE ?></span>
    </a>
    <a href="<?= get_whatsapp_url() ?>" class="btn btn-wa drawer-wa" target="_blank" rel="noopener">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
      <span>Plan on WhatsApp</span>
    </a>
    <p class="drawer-note"><?= SITE_HOURS ?> · <?= SITE_LOCATION ?></p>
  </div>
</aside>

