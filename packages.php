<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'packages';
$pageTitle = 'All Tour Packages — Hyderabad & Kashmir 5N/6D | TourHyderabad.in';
$pageDesc = 'Curated tour packages: Kashmir 5N/6D Special, Nizami Heritage Trail, City Darshan, Ramoji Film City, Old City food walks. Honest pricing, customized for you.';
$canonicalUrl = get_base_url() . '/packages.php';
$footerScallopColor = 'var(--ivory)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>
  <!-- Page Header -->
  <section class="page-head jaali-dark" data-screen-label="Page header">
    <div class="wrap">
      <p class="eyebrow">TOUR PACKAGES</p>
      <h1>Handcrafted journeys, honestly priced</h1>
      <p class="lead">From a half-day Old City food walk to six unforgettable days across Kashmir — every package below is a starting point we'll reshape around your dates.</p>
      <div class="rule" aria-hidden="true"><span></span><span></span><span></span></div>
    </div>
  </section>

  <!-- Packages Catalog Section -->
  <section data-screen-label="Package grid" style="max-width:1200px;margin:0 auto;padding:56px 24px 96px">
    <!-- Filter Toolbar -->
    <div class="filters" role="toolbar" aria-label="Filter packages by duration">
      <button type="button" class="seg" data-filter="All" aria-pressed="true">All</button>
      <button type="button" class="seg" data-filter="5N6D" aria-pressed="false">5N/6D Kashmir</button>
      <button type="button" class="seg" data-filter="Half Day" aria-pressed="false">Half Day</button>
      <button type="button" class="seg" data-filter="1 Day" aria-pressed="false">1 Day</button>
      <button type="button" class="seg" data-filter="2 Days" aria-pressed="false">2 Days</button>
      <button type="button" class="seg" data-filter="3D2N" aria-pressed="false">3D2N</button>
      <button type="button" class="seg" data-filter="4D3N" aria-pressed="false">4D3N</button>
      <button type="button" class="seg" data-filter="City Tours" aria-pressed="false">City Tours</button>
    </div>

    <!-- Package Cards Grid -->
    <div class="cards" id="pkg-grid">
      <!-- Package: Kashmir 5N/6D Special (Ad Featured) -->
      <article class="ticket" data-cat="5N6D" style="box-shadow:0 12px 32px -18px rgba(92,26,36,.35)">
        <div class="arch">
          <img src="assets/images/kashmir-card.jpg" alt="Snow clad mountains and green valleys of Kashmir" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp hot">5N · 6D — SPECIAL AD OFFER</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Kashmir 5N / 6D Tour Package</h2>
          <p class="price">Starting @ ₹10,999 <small>· JAMMU TO JAMMU · PRIVATE CAR</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Jammu pickup &amp; drop, 4N Srinagar + 1N Pahalgam</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Dal Lake, Sonamarg, Gulmarg, Doodhpathri &amp; Pahalgam</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Dedicated private vehicle with driver, fuel &amp; tolls included</span></li>
          </ul>
          <div class="stack">
            <a href="package-kashmir-5n-6d.php" class="btn-fill">VIEW FULL ITINERARY</a>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Kashmir 5 Nights / 6 Days Tour Package (Jammu to Jammu @ ₹10,999). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </div>
      </article>
      <!-- Package 1 -->
      <article class="ticket" data-cat="1 Day|City Tours">
        <div class="arch">
          <img src="assets/images/charminar.jpg" alt="Charminar and the Old City on the Hyderabad City Darshan day tour" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">1 DAY</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Hyderabad City Darshan</h2>
          <p class="price">Starting @ ₹2,999 <small>· UP TO 4 PAX, SEDAN</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Charminar, Golconda, Salar Jung, Birla Mandir in one loop</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>AC sedan with a local driver-guide, 8 hours</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Hotel, airport or station pickup included</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Hyderabad City Darshan (1 Day Car Tour). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>

      <!-- Package 2 -->
      <article class="ticket" data-cat="2 Days">
        <div class="arch">
          <img src="assets/images/hussain-sagar.jpg" alt="Monolithic Buddha statue illuminated at Hussain Sagar" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">2D · 1N</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Pearl City Express</h2>
          <p class="price">Starting @ ₹8,999 <small>· PER COUPLE</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Old City heritage circuit plus Hussain Sagar by night</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>1 night in a handpicked 3-Star hotel with breakfast</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>All transfers in a private AC car</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Pearl City Express (2 Days 1 Night). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>

      <!-- Package 3 (Most Loved) -->
      <article class="ticket" data-cat="3D2N" style="box-shadow:0 12px 32px -18px rgba(92,26,36,.35)">
        <div class="arch">
          <img src="assets/images/golconda-fort.jpg" alt="Granite ramparts of Golconda Fort on the Nizami Heritage Trail" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp hot">3D · 2N — MOST LOVED</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Nizami Heritage Trail</h2>
          <p class="price">Starting @ ₹12,999 <small>· PER COUPLE · 3-STAR HOTEL</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Charminar, Chowmahalla, Golconda and Qutb Shahi Tombs</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Old City food walk with Irani chai and haleem stops</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>2 nights, daily breakfast, entries and transfers</span></li>
          </ul>
          <div class="stack">
            <a href="package-nizami-heritage.php" class="btn-fill">VIEW FULL ITINERARY</a>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Nizami Heritage Trail (3 Days 2 Nights). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </div>
      </article>

      <!-- Package 4 -->
      <article class="ticket" data-cat="3D2N">
        <div class="arch">
          <img src="assets/images/chowmahalla-palace.jpg" alt="Chowmahalla Palace on the Royal Hyderabad premium package" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">3D · 2N PREMIUM</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Royal Hyderabad</h2>
          <p class="price">Starting @ ₹16,499 <small>· PER COUPLE · 4-STAR STAY</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Palace circuit with a private pearl-shopping guide</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Candlelight Deccani dinner on your second evening</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Chauffeured SUV throughout the trip</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Royal Hyderabad (3 Days 2 Nights Premium). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>

      <!-- Package 5 -->
      <article class="ticket" data-cat="4D3N">
        <div class="arch">
          <img src="assets/images/deccan-explorer.jpg" alt="Durgam Cheruvu Cable Bridge in Hyderabad on the Grand Deccan Explorer package" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">4D · 3N</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Grand Deccan Explorer</h2>
          <p class="price">Starting @ ₹18,990 <small>· PER COUPLE</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Every city icon plus a full Ramoji Film City day</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>3 nights with daily breakfast, unhurried pacing</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Evenings free for bazaars and food streets</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Grand Deccan Explorer (4 Days 3 Nights). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>

      <!-- Package 6 -->
      <article class="ticket" data-cat="2 Days">
        <div class="arch">
          <img src="assets/images/ramoji-film-city.jpg" alt="Ramoji Film City grand entrance sign and tour grounds" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">2 DAYS</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Hyderabad + Ramoji Special</h2>
          <p class="price">Starting @ ₹9,499 <small>· PER COUPLE</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Full Ramoji day with entry tickets arranged</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>City highlights loop on day two</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>A family favourite — great with kids</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Hyderabad + Ramoji Special (2 Days). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>

      <!-- Package 7 -->
      <article class="ticket" data-cat="Half Day|City Tours">
        <div class="arch">
          <img src="assets/images/hyderabadi-biryani.jpg" alt="Hyderabadi dum biryani served on the Old City food walk" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">HALF DAY</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Old City Food &amp; Bazaar Walk</h2>
          <p class="price">Starting @ ₹1,499 <small>· PER PERSON</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Biryani, haleem and Irani chai at places locals queue for</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Laad Bazaar bangle lanes with a storyteller guide</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Evening walk timed for the Charminar lights</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Old City Food & Bazaar Walk (Half Day). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>

      <!-- Package 8 -->
      <article class="ticket" data-cat="3D2N">
        <div class="arch">
          <img src="assets/images/ananthagiri-hills.jpg" alt="Green Ananthagiri Hills on the Weekend Getaway Combo" loading="lazy" class="imgwarm" width="370" height="278">
        </div>
        <span class="stamp">3 DAYS</span>
        <div class="perf" aria-hidden="true"><i></i><i></i></div>
        <div class="ticket-body">
          <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:25px;color:var(--maroon);line-height:1.15">Weekend Getaway Combo</h2>
          <p class="price">Starting @ ₹14,999 <small>· PER COUPLE</small></p>
          <ul class="incl">
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Two city days, then coffee-country air in Ananthagiri</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Hillside stay with bonfire evening</span></li>
            <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg><span>All drives in a private AC car</span></li>
          </ul>
          <a href="<?= get_whatsapp_url("Hi! I'm interested in the Weekend Getaway Combo (3 Days, City + Ananthagiri Hills). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
        </div>
      </article>
    </div>

    <!-- Custom Plan CTA Box -->
    <div style="margin-top:64px;text-align:center;border:1px solid rgba(176,138,71,.4);background:#F3EAD8;padding:40px 24px">
      <h2 style="margin:0 0 10px;font-family:var(--serif);font-weight:600;font-size:30px;color:var(--maroon)">Don't see your kind of trip?</h2>
      <p style="margin:0 0 24px;font-size:15px;color:var(--body)">Corporate offsites, school groups, ladies-only tours, photography walks — we build those too.</p>
      <a href="<?= get_whatsapp_url("Hi! I need a custom Hyderabad itinerary. Can you help?") ?>" class="btn btn-wa" target="_blank" rel="noopener">GET A CUSTOM PLAN ON WHATSAPP</a>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
