<?php
if (!defined('TOURHYDERABAD_APP')) {
    require_once __DIR__ . '/config.php';
}
$scallopColor = $footerScallopColor ?? 'var(--ivory)';
?>
<!-- Footer -->
<footer class="site" data-screen-label="Footer" style="--sc: <?= $scallopColor ?>;">
  <div class="scallop" aria-hidden="true"></div>
  <div class="foot-grid">
    <div class="foot-col">
      <div class="logo">
        <span class="foot-logo">
          <img src="assets/images/logo-mark.jpg" alt="TourHyderabad Charminar mark" width="46" height="46" loading="lazy">
        </span>
        <span style="display:flex;flex-direction:column;line-height:1">
          <b style="color:var(--ivory)">TOUR</b>
          <i>HYDERABAD</i>
        </span>
      </div>
      <p style="margin:0;font-size:14px;line-height:1.8;max-width:32ch">Handcrafted Hyderabad tour packages by a local team — heritage, food and film city, planned over WhatsApp.</p>
    </div>

    <nav aria-label="Footer quick links" class="foot-col">
      <span class="foot-h">EXPLORE</span>
      <a href="index.php">Home</a>
      <a href="packages.php">Tour Packages</a>
      <a href="places.php">Places to Visit</a>
      <a href="about.php">About Us</a>
      <a href="contact.php">Contact</a>
    </nav>

    <nav aria-label="Packages by duration" class="foot-col">
      <span class="foot-h">BY DURATION</span>
      <a href="packages.php">1 Day City Tours</a>
      <a href="packages.php">2 Days 1 Night</a>
      <a href="package-nizami-heritage.php">3 Days 2 Nights</a>
      <a href="packages.php">4 Days 3 Nights</a>
      <a href="package-kashmir-5n-6d.php">5N / 6D Kashmir Special</a>
      <a href="packages.php">Half-Day Walks</a>
    </nav>

    <div class="foot-col">
      <span class="foot-h">TALK TO US</span>
      <a href="tel:<?= SITE_PHONE_RAW ?>"><?= SITE_PHONE ?></a>
      <a href="<?= get_whatsapp_url() ?>" class="wa-link" target="_blank" rel="noopener">WhatsApp: 96529 72699</a>
      <span><?= SITE_HOURS ?></span>
      <span><?= SITE_LOCATION ?></span>
    </div>
  </div>

  <div class="foot-rule" aria-hidden="true">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <p class="copyright">© 2026 <?= SITE_NAME ?> · All journeys, honestly priced.</p>
  <p class="foot-credit">Design and developed by <a href="https://creativals.com" target="_blank" rel="noopener">creativals.com</a></p>
</footer>

<!-- Desktop Floating WhatsApp CTA -->
<a href="<?= get_whatsapp_url() ?>" class="float-wa" aria-label="Chat with TourHyderabad on WhatsApp" target="_blank" rel="noopener">
  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
</a>

<!-- Mobile Sticky Bottom Action Bar -->
<div class="mobilebar" role="navigation" aria-label="Mobile quick actions">
  <a href="tel:<?= SITE_PHONE_RAW ?>" class="mb-call" aria-label="Call <?= SITE_PHONE ?>">
    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.34 1.78.66 2.62a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.46-1.23a2 2 0 0 1 2.11-.45c.84.32 1.72.54 2.62.66A2 2 0 0 1 22 16.92z"></path></svg>
    Call Us
  </a>
  <a href="<?= get_whatsapp_url() ?>" class="mb-wa" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
    WhatsApp Us
  </a>
</div>

<!-- Core Scripts -->
<script src="assets/js/main.js" defer></script>
