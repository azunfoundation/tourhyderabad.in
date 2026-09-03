<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'home';
$pageTitle = 'Hyderabad Tour Packages | TourHyderabad.in — Local Experts, Custom Itineraries';
$pageDesc = 'Charminar at first light, sunset from Golconda ramparts, Irani chai in a hundred-year-old café. Curated Hyderabad tour packages planned door-to-door by local experts.';
$canonicalUrl = get_base_url() . '/';
$footerScallopColor = 'var(--maroon)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>
  <!-- Hero Section -->
  <section class="hero" data-screen-label="Hero">
    <svg viewBox="0 0 200 170" aria-hidden="true" class="hero-th">
      <text x="0" y="150" style="font-family:var(--serif);font-size:170px;font-weight:600" fill="none" stroke="#B08A47" stroke-opacity=".09" stroke-width="1">TH</text>
    </svg>
    <div class="hero-grid">
      <div>
        <p class="eyebrow a1">CURATED HYDERABAD JOURNEYS</p>
        <h1>
          <span class="a1">Four minarets.</span>
          <span class="gold-i a2">Four hundred years.</span>
          <span class="a3">One unforgettable city.</span>
        </h1>
        <p class="hero-sub a4">Charminar at first light, sunset from Golconda's ramparts, Irani chai in a hundred-year-old café — planned door to door by people who grew up here.</p>
        <div class="hero-cta a5">
          <a href="packages.php" class="btn btn-maroon">EXPLORE PACKAGES</a>
          <a href="<?= get_whatsapp_url("Hi! I want to plan a Hyderabad trip. Please share package details.") ?>" class="btn btn-ghost" target="_blank" rel="noopener">PLAN ON WHATSAPP</a>
        </div>
      </div>
      <div class="hero-art">
        <div class="arch-frame">
          <div>
            <div class="arch">
              <img src="assets/images/hero-charminar.jpg" alt="Charminar rising over the Old City of Hyderabad at golden hour" class="imgwarm" width="459" height="612" loading="eager" fetchpriority="high">
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg viewBox="0 0 1200 200" preserveAspectRatio="none" aria-hidden="true" class="hero-road">
      <path d="M1180,150 C1060,165 960,185 820,185 C680,185 640,145 540,145 C420,205 240,140 40,185" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-opacity=".75" stroke-dasharray="1500"></path>
    </svg>
  </section>

  <!-- Ticker Marquee -->
  <section class="ticker" data-screen-label="Ticker" aria-hidden="true">
    <div class="ticker-track">
      <span>CHARMINAR · GOLCONDA AT SUNSET · IRANI CHAI · LAAD BAZAAR · RAMOJI FILM CITY · PEARLS OF HYDERABAD · QUTB SHAHI TOMBS · HALEEM IN SEASON ·&nbsp;</span>
      <span>CHARMINAR · GOLCONDA AT SUNSET · IRANI CHAI · LAAD BAZAAR · RAMOJI FILM CITY · PEARLS OF HYDERABAD · QUTB SHAHI TOMBS · HALEEM IN SEASON ·&nbsp;</span>
      <span>CHARMINAR · GOLCONDA AT SUNSET · IRANI CHAI · LAAD BAZAAR · RAMOJI FILM CITY · PEARLS OF HYDERABAD · QUTB SHAHI TOMBS · HALEEM IN SEASON ·&nbsp;</span>
      <span>CHARMINAR · GOLCONDA AT SUNSET · IRANI CHAI · LAAD BAZAAR · RAMOJI FILM CITY · PEARLS OF HYDERABAD · QUTB SHAHI TOMBS · HALEEM IN SEASON ·&nbsp;</span>
    </div>
  </section>

  <!-- Trust Band -->
  <section class="trust" data-screen-label="Trust band">
    <div class="wrap">
      <span>500+ Happy Travellers</span><span class="dia" aria-hidden="true"></span>
      <span>Local Hyderabadi Experts</span><span class="dia" aria-hidden="true"></span>
      <span>Custom Itineraries</span><span class="dia" aria-hidden="true"></span>
      <span>24×7 WhatsApp Support</span>
    </div>
  </section>

  <!-- 01 Curated Packages Section -->
  <section class="sec jaali tint-sec" data-screen-label="Curated packages" style="background:#F3EAD8">
    <div class="wrap">
      <div data-reveal="1" class="sec-head">
        <span class="ghost" aria-hidden="true">01</span>
        <p class="eyebrow">CURATED PACKAGES</p>
        <h2 class="t2">Six ways to see Hyderabad properly</h2>
        <div class="rule" aria-hidden="true"><span></span><span></span><span></span></div>
      </div>

      <div class="cards">
        <!-- Card 1 -->
        <article data-reveal="1" class="ticket">
          <div class="arch">
            <img src="assets/images/charminar.jpg" alt="Charminar and Old City streets on the Hyderabad City Darshan tour" loading="lazy" class="imgwarm" width="370" height="278">
          </div>
          <span class="stamp">1 DAY</span>
          <div class="perf" aria-hidden="true"><i></i><i></i></div>
          <div class="ticket-body">
            <h3>Hyderabad City Darshan</h3>
            <p class="price">Starting @ ₹2,999 <small>· UP TO 4 PAX, SEDAN</small></p>
            <ul class="incl">
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Charminar, Golconda, Salar Jung in one loop</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>AC sedan with local driver-guide</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Hotel or airport pickup included</li>
            </ul>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Hyderabad City Darshan (1 Day). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </article>

        <!-- Card 2 -->
        <article data-reveal="1" class="ticket">
          <div class="arch">
            <img src="assets/images/hussain-sagar.jpg" alt="Monolithic Buddha statue illuminated at Hussain Sagar" loading="lazy" class="imgwarm" width="370" height="278">
          </div>
          <span class="stamp">2D · 1N</span>
          <div class="perf" aria-hidden="true"><i></i><i></i></div>
          <div class="ticket-body">
            <h3>Pearl City Express</h3>
            <p class="price">Starting @ ₹8,999 <small>· PER COUPLE</small></p>
            <ul class="incl">
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Old City heritage + Hussain Sagar by night</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>1 night stay with breakfast</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>All transfers in private AC car</li>
            </ul>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Pearl City Express (2D1N). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </article>

        <!-- Card 3 (Most Loved) -->
        <article data-reveal="1" class="ticket" style="box-shadow:0 12px 32px -18px rgba(92,26,36,.35)">
          <div class="arch">
            <img src="assets/images/golconda-fort.jpg" alt="Stone ramparts of Golconda Fort on the Nizami Heritage Trail" loading="lazy" class="imgwarm" width="370" height="278">
          </div>
          <span class="stamp hot">3D · 2N — MOST LOVED</span>
          <div class="perf" aria-hidden="true"><i></i><i></i></div>
          <div class="ticket-body">
            <h3><a href="package-nizami-heritage.php" style="color:var(--maroon)">Nizami Heritage Trail</a></h3>
            <p class="price">Starting @ ₹12,999 <small>· PER COUPLE · 3-STAR HOTEL</small></p>
            <ul class="incl">
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Charminar, Chowmahalla, Golconda, Qutb Shahi Tombs</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Old City food walk with Irani chai</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>2 nights, breakfast, all entry transfers</li>
            </ul>
            <div class="stack">
              <a href="package-nizami-heritage.php" class="btn-fill">VIEW FULL ITINERARY</a>
              <a href="<?= get_whatsapp_url("Hi! I'm interested in the Nizami Heritage Trail (3D2N). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
            </div>
          </div>
        </article>

        <!-- Card 4 -->
        <article data-reveal="1" class="ticket">
          <div class="arch">
            <img src="assets/images/chowmahalla-palace.jpg" alt="Chowmahalla Palace on the Royal Hyderabad premium tour" loading="lazy" class="imgwarm" width="370" height="278">
          </div>
          <span class="stamp">3D · 2N PREMIUM</span>
          <div class="perf" aria-hidden="true"><i></i><i></i></div>
          <div class="ticket-body">
            <h3>Royal Hyderabad</h3>
            <p class="price">Starting @ ₹16,499 <small>· PER COUPLE · 4-STAR STAY</small></p>
            <ul class="incl">
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Palace circuit + private pearl shopping guide</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Candlelight Deccani dinner evening</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>SUV with chauffeur throughout</li>
            </ul>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Royal Hyderabad (3D2N Premium). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </article>

        <!-- Card 5 -->
        <article data-reveal="1" class="ticket">
          <div class="arch">
            <img src="assets/images/deccan-explorer.jpg" alt="Durgam Cheruvu Cable Bridge in Hyderabad on the Grand Deccan Explorer" loading="lazy" class="imgwarm" width="370" height="278">
          </div>
          <span class="stamp">4D · 3N</span>
          <div class="perf" aria-hidden="true"><i></i><i></i></div>
          <div class="ticket-body">
            <h3>Grand Deccan Explorer</h3>
            <p class="price">Starting @ ₹18,990 <small>· PER COUPLE</small></p>
            <ul class="incl">
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Every icon plus Ramoji Film City day</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>3 nights with daily breakfast</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Unhurried pace, evenings free</li>
            </ul>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Grand Deccan Explorer (4D3N). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </article>

        <!-- Card 6 -->
        <article data-reveal="1" class="ticket">
          <div class="arch">
            <img src="assets/images/ramoji-film-city.jpg" alt="Ramoji Film City grand entrance sign and tour grounds" loading="lazy" class="imgwarm" width="370" height="278">
          </div>
          <span class="stamp">2 DAYS</span>
          <div class="perf" aria-hidden="true"><i></i><i></i></div>
          <div class="ticket-body">
            <h3>Hyderabad + Ramoji Special</h3>
            <p class="price">Starting @ ₹9,499 <small>· PER COUPLE</small></p>
            <ul class="incl">
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Full Ramoji day with entry tickets</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>City highlights on day two</li>
              <li><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Great for families with kids</li>
            </ul>
            <a href="<?= get_whatsapp_url("Hi! I'm interested in the Hyderabad + Ramoji Special (2 Days). Please share details and pricing.") ?>" class="btn-line" target="_blank" rel="noopener">ENQUIRE ON WHATSAPP</a>
          </div>
        </article>
      </div>

      <p style="text-align:center;margin:44px 0 0">
        <a href="packages.php" style="font-weight:800;font-size:14px;letter-spacing:.1em;color:var(--maroon);border-bottom:1px solid var(--gold);padding-bottom:4px">VIEW ALL 8 PACKAGES →</a>
      </p>
    </div>
  </section>

  <!-- 02 Iconic Experiences Section -->
  <section class="sec" data-screen-label="Iconic experiences">
    <div class="wrap">
      <div data-reveal="1" style="position:relative;display:flex;align-items:flex-end;justify-content:space-between;gap:24px;flex-wrap:wrap;margin-bottom:48px">
        <span class="ghost" aria-hidden="true" style="top:-64px;left:-14px">02</span>
        <div style="position:relative">
          <p class="eyebrow">ICONIC EXPERIENCES</p>
          <h2 class="t2">What four centuries taste, sound and look like</h2>
        </div>
        <p style="margin:0;max-width:38ch;font-size:15px;line-height:1.7;color:var(--body);text-wrap:pretty">Every experience below appears in at least one package — and every package can be reshaped around the ones you care about.</p>
      </div>

      <div class="exp">
        <a data-reveal="1" href="places.php" class="arch" aria-label="Charminar and Old City">
          <img src="assets/images/charminar.jpg" alt="Charminar surrounded by Old City bazaars" loading="lazy" class="imgwarm" width="370" height="493">
          <span class="shade"></span>
          <span class="lbl">
            <b>Charminar &amp; Old City</b>
            <small>MINARETS · BAZAARS · CHAI</small>
          </span>
        </a>

        <a data-reveal="1" href="places.php" class="arch" aria-label="Golconda Fort">
          <img src="assets/images/golconda-fort.jpg" alt="Ruined granite bastions of Golconda Fort" loading="lazy" class="imgwarm" width="370" height="493">
          <span class="shade"></span>
          <span class="lbl">
            <b>Golconda Fort</b>
            <small>SUNSET FROM THE RAMPARTS</small>
          </span>
        </a>

        <a data-reveal="1" href="places.php" class="arch" aria-label="Ramoji Film City">
          <img src="assets/images/ramoji-cinema.jpg" alt="Red cinema seating evoking Ramoji Film City" loading="lazy" class="imgwarm" width="370" height="493">
          <span class="shade"></span>
          <span class="lbl">
            <b>Ramoji Film City</b>
            <small>THE WORLD'S LARGEST STUDIO</small>
          </span>
        </a>

        <a data-reveal="1" href="places.php" class="arch" aria-label="Chowmahalla Palace">
          <img src="assets/images/chowmahalla-palace.jpg" alt="Chowmahalla Palace courtyard and grounds" loading="lazy" class="imgwarm" width="370" height="493">
          <span class="shade"></span>
          <span class="lbl">
            <b>Chowmahalla Palace</b>
            <small>SEAT OF THE NIZAMS</small>
          </span>
        </a>

        <a data-reveal="1" href="places.php" class="arch" aria-label="Hussain Sagar">
          <img src="assets/images/hussain-sagar.jpg" alt="Monolithic Buddha statue illuminated at Hussain Sagar by night" loading="lazy" class="imgwarm" width="370" height="493">
          <span class="shade"></span>
          <span class="lbl">
            <b>Hussain Sagar</b>
            <small>BUDDHA ON THE LAKE · TANK BUND</small>
          </span>
        </a>

        <a data-reveal="1" href="places.php" class="arch" aria-label="Hyderabad food trail">
          <img src="assets/images/hyderabadi-biryani.jpg" alt="Fragrant Hyderabadi dum biryani served in a handi" loading="lazy" class="imgwarm" width="370" height="493">
          <span class="shade"></span>
          <span class="lbl">
            <b>The Food Trail</b>
            <small>BIRYANI · HALEEM · IRANI CHAI</small>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- 03 How It Works Section -->
  <section class="sec" data-screen-label="How it works" style="background:#5C1A24;color:#FAF7F2;position:relative;padding-top:0">
    <div class="scallop" aria-hidden="true" style="--sc:var(--ivory)"></div>
    <div class="wrap" style="padding-top:80px">
      <div data-reveal="1" class="sec-head">
        <span class="ghost ghost-light" aria-hidden="true">03</span>
        <p class="eyebrow" style="color:var(--goldlt)">HOW IT WORKS</p>
        <h2 class="t2" style="color:#FAF7F2">Three messages between you and Hyderabad</h2>
      </div>

      <div data-reveal="1" class="steps">
        <svg viewBox="0 0 1200 90" preserveAspectRatio="none" class="steps-road" aria-hidden="true">
          <path d="M40,70 C260,10 420,85 620,45 C820,5 980,75 1160,30" fill="none" stroke="#B08A47" stroke-width="2" stroke-dasharray="2 10" stroke-linecap="round"></path>
        </svg>

        <div class="step">
          <b>1</b>
          <h3>Tell us your dates</h3>
          <p>One WhatsApp message with your dates, group size and what you'd love to see.</p>
        </div>
        <div class="step">
          <b>2</b>
          <h3>Get a custom plan</h3>
          <p>A day-by-day itinerary with transparent pricing lands on your phone — tweak it as much as you like.</p>
        </div>
        <div class="step">
          <b>3</b>
          <h3>Travel worry-free</h3>
          <p>Your cab arrives on time, tickets are handled, and we're one message away all trip.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 04 Why TourHyderabad Section -->
  <section data-screen-label="Why TourHyderabad" class="why-grid">
    <div data-reveal="1" class="arch">
      <img src="assets/images/irani-chai.jpg" alt="A cup of Irani chai with Osmania biscuits" loading="lazy" class="imgwarm" width="560" height="490">
    </div>
    <div data-reveal="1" style="position:relative">
      <span class="ghost" aria-hidden="true" style="top:-30px;left:-14px">04</span>
      <p class="eyebrow">WHY TOURHYDERABAD</p>
      <h2 style="margin:0 0 24px;font-size:clamp(34px,4vw,50px);line-height:1.12">We plan your trip the way we'd host family</h2>
      <p style="margin:0 0 18px;font-size:17px;line-height:1.8;color:var(--body);text-wrap:pretty">We were born here. We know which Charminar-side café pours the best Irani chai, which Laad Bazaar lane the bangle-makers actually work in, and exactly when to climb Golconda so the sun sets while you're on the ramparts.</p>
      <p style="margin:0 0 28px;font-size:17px;line-height:1.8;color:var(--body);text-wrap:pretty">Every itinerary is built by hand — handpicked hotels, drivers we've worked with for years, and one transparent price with no counter surprises. You pay nothing online; confirm on WhatsApp, pay a small advance via UPI, settle the rest as you travel.</p>
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:28px" aria-hidden="true">
        <span style="width:64px;height:1px;background:var(--gold)"></span>
        <span style="width:8px;height:8px;border:1px solid var(--gold);transform:rotate(45deg)"></span>
        <span style="width:64px;height:1px;background:var(--gold)"></span>
      </div>
      <a href="about.php" style="font-weight:800;font-size:14px;letter-spacing:.1em;color:var(--maroon);border-bottom:1px solid var(--gold);padding-bottom:4px">OUR STORY →</a>
    </div>
  </section>

  <!-- 05 Trip Builder Section -->
  <section data-screen-label="Trip builder" id="trip-builder" style="max-width:1200px;margin:0 auto;padding:0 24px 96px">
    <div data-reveal="1" class="builder-card">
      <span class="ghost" aria-hidden="true" style="top:-40px;right:8px">05</span>
      <div style="max-width:640px;margin-bottom:40px">
        <p class="eyebrow">BUILD YOUR PERFECT TRIP</p>
        <h2 style="margin:0;font-size:clamp(32px,3.5vw,46px);line-height:1.1">Three choices, one recommendation</h2>
      </div>

      <div class="builder-grid">
        <div style="display:flex;flex-direction:column;gap:28px">
          <!-- Days Group -->
          <div class="segs" data-key="days">
            <p class="seg-label" style="width:100%">DAYS</p>
            <button type="button" class="seg" data-val="1" aria-pressed="false">1</button>
            <button type="button" class="seg" data-val="2" aria-pressed="false">2</button>
            <button type="button" class="seg" data-val="3" aria-pressed="true">3</button>
            <button type="button" class="seg" data-val="4" aria-pressed="false">4</button>
            <button type="button" class="seg" data-val="5+" aria-pressed="false">5+</button>
          </div>

          <!-- Style Group -->
          <div class="segs" data-key="style">
            <p class="seg-label" style="width:100%">TRAVEL STYLE</p>
            <button type="button" class="seg" data-val="Heritage" aria-pressed="true">Heritage</button>
            <button type="button" class="seg" data-val="Family" aria-pressed="false">Family</button>
            <button type="button" class="seg" data-val="Food & Bazaars" aria-pressed="false">Food &amp; Bazaars</button>
            <button type="button" class="seg" data-val="Film City" aria-pressed="false">Film City</button>
          </div>

          <!-- Budget Group -->
          <div class="segs" data-key="budget">
            <p class="seg-label" style="width:100%">BUDGET</p>
            <button type="button" class="seg" data-val="Smart" aria-pressed="false">Smart</button>
            <button type="button" class="seg" data-val="Comfort" aria-pressed="true">Comfort</button>
            <button type="button" class="seg" data-val="Premium" aria-pressed="false">Premium</button>
          </div>
        </div>

        <!-- Dynamic Recommendation Card -->
        <div class="rec">
          <p style="margin:0;font-size:11px;font-weight:800;letter-spacing:.26em;color:var(--gold)">OUR RECOMMENDATION</p>
          <div class="arch">
            <img id="rec-img" src="assets/images/golconda-fort.jpg" alt="Nizami Heritage Trail" loading="lazy" class="imgwarm" width="460" height="259">
          </div>
          <h3 id="rec-name">Nizami Heritage Trail</h3>
          <p id="rec-meta" class="price" style="font-size:20px">3D · 2N · from ₹12,999 per couple</p>
          <p id="rec-line" class="line">The full Nizami circuit — palaces, forts, tombs — with an Old City food walk.</p>
          <a id="rec-cta" href="<?= get_whatsapp_url("Hi! I used the trip builder: 3 day(s), Heritage style, Comfort budget. You suggested the Nizami Heritage Trail (3D · 2N). Please share the plan and pricing.") ?>" class="btn btn-gold" style="width:100%;margin-top:6px" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            GET THIS PLAN ON WHATSAPP
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 06 Postcards Section -->
  <section class="sec" data-screen-label="Testimonials" style="background:#F3EAD8;padding-top:0">
    <div class="scallop" aria-hidden="true" style="--sc:var(--ivory)"></div>
    <div class="wrap" style="padding-top:80px">
      <div data-reveal="1" class="sec-head">
        <span class="ghost" aria-hidden="true">06</span>
        <p class="eyebrow">TRAVELLER WORDS</p>
        <h2 class="t2">Postcards we didn't ask for</h2>
      </div>

      <div class="posts">
        <!-- Postcard 1 -->
        <figure data-reveal="1" class="postcard" style="transform:rotate(-2deg)">
          <span class="postmark" aria-hidden="true" style="transform:rotate(8deg)">HYD<br>·2026·</span>
          <div class="stars" aria-label="5 out of 5 stars">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
          </div>
          <blockquote>"The driver waited while we lingered an extra hour at Qutb Shahi Tombs, then still got us to Golconda before sunset. That flexibility is why I'd book again."</blockquote>
          <figcaption>RAVI &amp; DEEPIKA MENON <span>· KOCHI</span></figcaption>
        </figure>

        <!-- Postcard 2 -->
        <figure data-reveal="1" class="postcard" style="transform:rotate(1.5deg)">
          <span class="postmark" aria-hidden="true" style="transform:rotate(-6deg)">HYD<br>·2026·</span>
          <div class="stars" aria-label="5 out of 5 stars">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
          </div>
          <blockquote>"Booked the Nizami Heritage Trail for my parents. Everything on WhatsApp, hotel exactly as promised, and Ammi still talks about the haleem stop."</blockquote>
          <figcaption>AYESHA KHAN <span>· PUNE</span></figcaption>
        </figure>

        <!-- Postcard 3 -->
        <figure data-reveal="1" class="postcard" style="transform:rotate(2deg)">
          <span class="postmark" aria-hidden="true" style="transform:rotate(10deg)">HYD<br>·2026·</span>
          <div class="stars" aria-label="4 out of 5 stars">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#B08A47" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="1.5" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"></polygon></svg>
          </div>
          <blockquote>"Took the Ramoji Special with two kids. Tickets, lunch, timings — all sorted before we asked. Only wish we'd added a third day."</blockquote>
          <figcaption>SANDEEP REDDY <span>· VISAKHAPATNAM</span></figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- 07 FAQ Section -->
  <section class="sec" data-screen-label="FAQ" style="max-width:860px;margin:0 auto;padding:88px 24px">
    <div data-reveal="1" class="sec-head">
      <span class="ghost" aria-hidden="true">07</span>
      <p class="eyebrow">GOOD TO KNOW</p>
      <h2 class="t2">Questions travellers ask us</h2>
    </div>

    <div data-reveal="1" style="display:flex;flex-direction:column">
      <div class="faq-item">
        <button type="button" class="faq-q" aria-expanded="false">
          Can we customise any package?
          <span class="ic" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </button>
        <div class="faq-a">
          <p>Every package is a starting point. Add a day at Ramoji, swap the museum for a bazaar walk, upgrade the hotel — message us your changes and we re-quote the same day, no rebooking fees.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-q" aria-expanded="false">
          Where do you pick us up from?
          <span class="ic" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </button>
        <div class="faq-a">
          <p>Anywhere in Hyderabad — airport, railway station, or your hotel. Pickup is included in every package; for early-morning flights we track your arrival and adjust.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-q" aria-expanded="false">
          Which hotels do you use?
          <span class="ic" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </button>
        <div class="faq-a">
          <p>Handpicked 3-star and 4-star properties we inspect ourselves, all near the city core so you spend time at monuments, not in traffic. Hotel names are shared on WhatsApp before you confirm.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-q" aria-expanded="false">
          Do you offer group discounts?
          <span class="ic" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </button>
        <div class="faq-a">
          <p>Yes — groups of 6 or more travel at reduced per-head rates, and we can arrange a Tempo Traveller instead of sedans. Share your group size for an exact quote.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-q" aria-expanded="false">
          How does payment work?
          <span class="ic" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </button>
        <div class="faq-a">
          <p>No online payment on this site. Once you confirm your plan on WhatsApp, a small advance via UPI locks your dates; the balance is settled during the trip. You always know the full price first.</p>
        </div>
      </div>

      <div class="faq-item">
        <button type="button" class="faq-q" aria-expanded="false">
          What if we need to cancel?
          <span class="ic" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          </span>
        </button>
        <div class="faq-a">
          <p>Full advance refund up to 72 hours before the trip. Inside 72 hours we first offer free date changes; refunds after that depend on hotel policy, stated upfront.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Band -->
  <section class="band jaali-dark" data-screen-label="CTA band">
    <div class="scallop" aria-hidden="true" style="--sc:var(--ivory)"></div>
    <div class="wrap">
      <h2>Your dates. Our city. One message.</h2>
      <p>Replies within minutes, 9 AM – 9 PM, every day.</p>
      <a href="<?= get_whatsapp_url("Hi! I want to plan a Hyderabad trip. Please share package details.") ?>" class="btn btn-gold" target="_blank" rel="noopener">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        PLAN MY TRIP ON WHATSAPP
      </a>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
