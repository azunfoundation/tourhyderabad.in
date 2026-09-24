<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'packages';
$pageTitle = 'Kashmir 5 Nights / 6 Days Tour Package — Jammu to Jammu from ₹10,999 | TourHyderabad.in';
$pageDesc = 'Kashmir 5 Nights / 6 Days Tour Package: Jammu – Srinagar – Sonamarg – Gulmarg – Doodhpathri – Pahalgam. 4N Srinagar + 1N Pahalgam with private vehicle from ₹10,999.';
$canonicalUrl = get_base_url() . '/package-kashmir-5n-6d.php';
$footerScallopColor = 'var(--tint)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
  <style>
    .ad-trust-strip {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px;
      margin-bottom: 40px;
    }
    .trust-pill {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 14px 18px;
      background: var(--card);
      border: 1px solid var(--goldsoft);
      border-radius: 4px;
      font-size: 13.5px;
      font-weight: 700;
      color: var(--ink);
    }
    .trust-pill svg {
      flex: none;
      color: var(--gold);
    }
    .callout-box {
      background: #FFFDF9;
      border-left: 4px solid var(--gold);
      border-top: 1px solid var(--goldsoft);
      border-right: 1px solid var(--goldsoft);
      border-bottom: 1px solid var(--goldsoft);
      padding: 24px;
      margin-top: 24px;
      border-radius: 2px;
    }
    .callout-box h4 {
      margin: 0 0 8px;
      font-family: var(--serif);
      font-size: 20px;
      color: var(--maroon);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .hero-btn-group {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      margin-top: 28px;
    }
    .badge-ad {
      display: inline-block;
      padding: 6px 14px;
      background: #E85D04;
      color: #FFF;
      font-size: 11px;
      font-weight: 800;
      letter-spacing: .15em;
      text-transform: uppercase;
      border-radius: 2px;
      margin-bottom: 14px;
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>
  <!-- Package Hero Banner -->
  <section data-screen-label="Package hero" style="position:relative;min-height:60vh;display:flex;align-items:flex-end;overflow:hidden">
    <img src="assets/images/kashmir-hero.jpg" alt="Snow clad Himalayan peaks and lush green meadows of Kashmir" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;filter:saturate(1.08)" loading="eager" fetchpriority="high">
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(35,12,16,.94) 0%,rgba(35,12,16,.5) 55%,rgba(35,12,16,.2) 100%)"></div>
    <div class="wrap" style="position:relative;padding-top:120px;padding-bottom:48px;box-sizing:border-box">
      <span class="badge-ad">HOT DEAL · LIMITED SEATS</span>
      <p style="margin:0 0 10px;font-size:12px;font-weight:800;letter-spacing:.3em;color:var(--goldlt)">
        <a href="packages.php" style="color:var(--goldlt)">PACKAGES</a> / 5 NIGHTS 6 DAYS
      </p>
      <h1 style="margin:0;font-size:clamp(36px,4.8vw,64px);line-height:1.08;color:var(--ivory)">Kashmir 5 Nights / 6 Days Tour Package</h1>
      <p style="margin:10px 0 0;font-size:clamp(16px,2vw,20px);color:var(--cream);font-family:var(--serif);font-style:italic">
        Jammu – Srinagar – Sonamarg – Gulmarg – Doodhpathri – Pahalgam
      </p>

      <div style="display:flex;gap:20px 28px;flex-wrap:wrap;margin-top:22px;font-size:13.5px;font-weight:700;letter-spacing:.08em;color:var(--cream)">
        <span style="background:rgba(216,183,124,.18);padding:4px 10px;border:1px solid var(--gold);color:var(--goldlt)">STARTING @ ₹10,999</span>
        <span style="color:var(--gold)" aria-hidden="true">◆</span>
        <span>5 NIGHTS · 6 DAYS</span>
        <span style="color:var(--gold)" aria-hidden="true">◆</span>
        <span>4N SRINAGAR + 1N PAHALGAM</span>
        <span style="color:var(--gold)" aria-hidden="true">◆</span>
        <span>PRIVATE VEHICLE INCLUDED</span>
      </div>

      <div class="hero-btn-group">
        <a href="#quote-form" class="btn btn-wa" style="padding:15px 28px;font-size:14px">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          BOOK ON WHATSAPP @ ₹10,999
        </a>
        <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn" style="background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.5);color:#fff;padding:15px 24px;font-weight:700">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.34 1.78.66 2.62a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.46-1.23a2 2 0 0 1 2.11-.45c.84.32 1.72.54 2.62.66A2 2 0 0 1 22 16.92z"></path></svg>
          CALL <?= SITE_PHONE ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Package Detail Body -->
  <div data-screen-label="Detail body" class="detail-grid" style="max-width:1200px;margin:0 auto;padding:56px 24px 96px">
    <div style="display:flex;flex-direction:column;gap:64px;min-width:0">

      <!-- Trust Badges Strip -->
      <section aria-label="Package highlights" class="ad-trust-strip">
        <div class="trust-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <span>Pickup &amp; Drop Jammu (Station/Airport)</span>
        </div>
        <div class="trust-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
          <span>Dedicated Private Vehicle with Fuel &amp; Tolls</span>
        </div>
        <div class="trust-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          <span>4N Srinagar Stay + 1N Pahalgam Stay</span>
        </div>
        <div class="trust-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          <span>Transparent Pricing — No Hidden Vehicle Fees</span>
        </div>
      </section>

      <!-- Itinerary Timeline -->
      <section aria-label="Day-wise itinerary">
        <p class="eyebrow">DETAILED DAY-WISE ITINERARY</p>
        <h2 style="margin:0 0 12px;font-size:clamp(28px,3vw,40px);color:var(--maroon);line-height:1.15">Six unforgettable days across the crown of India</h2>
        <p style="margin:0 0 40px;font-size:15px;color:var(--body);line-height:1.7">From the serene reflections of Dal Lake to the snow meadows of Gulmarg, the golden glaciers of Sonamarg, and the pine-scented valleys of Pahalgam.</p>
        
        <div class="roadwrap">
          <svg viewBox="0 0 72 1800" preserveAspectRatio="none" aria-hidden="true" class="roadsvg">
            <path id="roadpath" d="M36,4 C64,150 8,300 36,450 C64,600 8,750 36,900 C64,1050 8,1200 36,1350 C64,1500 8,1650 36,1796" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round" stroke-opacity=".8"></path>
          </svg>
          <div class="days">
            <!-- Day 1 -->
            <div data-day="1" class="day">
              <span class="mark" aria-hidden="true">1</span>
              <h3>Day 1: Jammu – Srinagar Arrival &amp; Dal Lake</h3>
              <p class="meals">ROUTE: JAMMU ➔ SRINAGAR · OVERNIGHT: SRINAGAR</p>
              <p class="body">
                • Warm welcome and pick up from Jammu Railway Station or Jammu Airport.<br>
                • Embark on a breathtaking mountain highway drive to Srinagar across scenic tunnels and Pir Panjal valley views.<br>
                • Check in to your hotel in Srinagar and enjoy some well-deserved relaxation.<br>
                • In the late afternoon, visit the legendary <strong>Dal Lake</strong> for peaceful views and explore the terraced cascades and manicured flower beds of <strong>Nishat Bagh</strong>, the Garden of Bliss on the lake's eastern shore.<br>
                • Dinner and comfortable overnight stay in Srinagar.
              </p>
            </div>

            <!-- Day 2 -->
            <div data-day="2" class="day alt">
              <span class="mark" aria-hidden="true">2</span>
              <h3>Day 2: Sonamarg Excursion ("Meadow of Gold")</h3>
              <p class="meals">EXCURSION: FULL DAY SONAMARG · OVERNIGHT: SRINAGAR</p>
              <p class="body">
                • After a hearty breakfast, proceed for a full-day excursion to Sonamarg (approx. 85 km / 2.5 hours).<br>
                • Drive along the roaring Sindh River, passing walnut orchards, alpine meadows, and sheer snow-crested mountain walls.<br>
                • Enjoy the pristine valley, local sightseeing, and view the famous Thajiwas Glacier where snow remains year-round (optional pony ride or local union taxi at glacier point).<br>
                • Evening return drive to Srinagar.<br>
                • Dinner and overnight stay in Srinagar.
              </p>
            </div>

            <!-- Day 3 -->
            <div data-day="3" class="day">
              <span class="mark" aria-hidden="true">3</span>
              <h3>Day 3: Gulmarg Excursion ("Meadow of Flowers")</h3>
              <p class="meals">EXCURSION: FULL DAY GULMARG · OVERNIGHT: SRINAGAR</p>
              <p class="body">
                • After breakfast, drive through weeping willow country to the world-famous hill resort of Gulmarg (approx. 50 km).<br>
                • Explore the expansive meadow, historic St. Mary’s Church, and panoramic vistas of Mt. Nanga Parbat and Mt. Apharwat.<br>
                • Opportunity to experience the famous <strong>Gulmarg Gondola</strong> (Asia’s highest cable car ride to Kongdoori Phase 1 and Apharwat Peak Phase 2, advance online ticket booking recommended).<br>
                • Enjoy optional snow activities, photography, or relaxing meadow walks.<br>
                • Return to Srinagar by evening. Dinner and overnight stay in Srinagar.
              </p>
            </div>

            <!-- Day 4 -->
            <div data-day="4" class="day alt">
              <span class="mark" aria-hidden="true">4</span>
              <h3>Day 4: Doodhpathri / Srinagar Local Sightseeing</h3>
              <p class="meals">FLEXIBLE DAY: DOODHPATHRI OR SRINAGAR CITY · OVERNIGHT: SRINAGAR</p>
              <p class="body">
                • After breakfast, customize your day by choosing one of two wonderful experiences:<br>
                &nbsp;&nbsp;<strong>Option A: Visit Doodhpathri ("Valley of Milk")</strong> — A tranquil alpine meadow surrounded by dense pine forests and the babbling Shaliganga River, known for its untouched natural serenity.<br>
                &nbsp;&nbsp;<strong>Option B: Srinagar Local Sightseeing</strong> — Explore Shalimar Bagh, Chashme Shahi, Shankaracharya Hill Temple, and the vibrant Old City craft bazaars.<br>
                • Evening return to the hotel.<br>
                • Dinner and overnight stay in Srinagar.
              </p>
            </div>

            <!-- Day 5 -->
            <div data-day="5" class="day">
              <span class="mark" aria-hidden="true">5</span>
              <h3>Day 5: Srinagar – Pahalgam ("Valley of Shepherds")</h3>
              <p class="meals">ROUTE: SRINAGAR ➔ PAHALGAM · OVERNIGHT: PAHALGAM</p>
              <p class="body">
                • After breakfast, check out and drive towards the idyllic valley of Pahalgam (approx. 95 km).<br>
                • En route, view the famous purple saffron fields of Pampore and historic Awantipora ruins.<br>
                • Arrive in Pahalgam and check in to your hotel.<br>
                • Enjoy local sightseeing and explore the scenic splendour of the Lidder River, pine valleys, and iconic valleys like Betaab Valley or Aru Valley (via local union transport).<br>
                • Dinner and overnight stay at your hotel in Pahalgam.
              </p>
            </div>

            <!-- Day 6 -->
            <div data-day="6" class="day alt">
              <span class="mark" aria-hidden="true">6</span>
              <h3>Day 6: Pahalgam – Jammu Drop</h3>
              <p class="meals">ROUTE: PAHALGAM ➔ JAMMU · DROP OFF</p>
              <p class="body">
                • After breakfast, visit local Ziyarats (shrines) and enjoy some souvenir shopping for pure Kashmiri saffron, walnuts, almonds, and handloom pashmina shawls.<br>
                • After 1:00 PM, depart from Pahalgam and embark on the return highway journey to Jammu.<br>
                • Drop at Jammu Railway Station or Jammu Airport with unforgettable Himalayan memories.<br>
                • Trip concludes with pleasant memories.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Inclusions & Exclusions -->
      <section aria-label="Inclusions and exclusions">
        <p class="eyebrow">WHAT'S COVERED</p>
        <h2 style="margin:0 0 32px;font-size:clamp(28px,3vw,40px);color:var(--maroon);line-height:1.15">Complete pricing clarity upfront</h2>
        <div class="twocol">
          <div class="panel">
            <h3>PACKAGE INCLUSIONS</h3>
            <ul>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Pickup from Jammu (Railway Station / Airport) and drop at Jammu</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Comfortable private vehicle for the entire 6 days tour</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>4 nights accommodation in comfortable Srinagar hotel</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>1 night accommodation at hotel in scenic Pahalgam</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Daily sightseeing as per the detailed itinerary</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Driver allowance, vehicle fuel, parking, and toll taxes</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>24×7 on-trip phone &amp; WhatsApp support</li>
            </ul>
          </div>
          <div class="panel muted">
            <h3>EXCLUSIONS</h3>
            <ul>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Train or flight tickets to/from Jammu</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Gulmarg Gondola cable car ride tickets</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Internal local union vehicles/ponies at restricted points</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Lunches, optional Shikara ride &amp; personal shopping</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Monument / Mughal garden entry tickets</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Anything not explicitly mentioned in inclusions</li>
            </ul>
          </div>
        </div>

        <!-- Note on Union Rules Callout -->
        <div class="callout-box">
          <h4>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            Important Advisory on Local Union Rules
          </h4>
          <p style="margin:0;font-size:14.5px;line-height:1.75;color:var(--body)">
            <strong>Please Note:</strong> Due to local taxi union regulations in Jammu &amp; Kashmir, our private vehicle is licensed to transfer you across all inter-city highways and drop you at the main hotel or central transport hub in destinations such as Sonamarg and Pahalgam. Internal sightseeing within certain localized areas (such as Betaab Valley, Aru Valley, and Chandanwari in Pahalgam, or Zero Point / Thajiwas Glacier in Sonamarg) requires registered local union vehicles or licensed ponies at an additional cost payable directly to the local operators. We provide full honest assistance and clear rates so you avoid any confusion.
          </p>
        </div>
      </section>

      <!-- Photo Gallery -->
      <section aria-label="Photo gallery">
        <p class="eyebrow" style="margin-bottom:12px">SCENIC HIGHLIGHTS</p>
        <h2 style="margin:0 0 28px;font-size:clamp(26px,2.5vw,36px);color:var(--maroon);line-height:1.15">What you will witness on this journey</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:18px">
          <div style="display:flex;flex-direction:column;gap:8px">
            <div class="arch" style="aspect-ratio:4/3;overflow:hidden">
              <img src="assets/images/kashmir-dal-lake.jpg" alt="Shikaras on Dal Lake with snowy mountains in Srinagar" loading="lazy" class="imgwarm" width="360" height="270" style="object-fit:cover;width:100%;height:100%">
            </div>
            <strong style="font-size:14px;color:var(--maroon)">Dal Lake &amp; Houseboats, Srinagar</strong>
          </div>

          <div style="display:flex;flex-direction:column;gap:8px">
            <div class="arch" style="aspect-ratio:4/3;overflow:hidden">
              <img src="assets/images/kashmir-gulmarg.jpg" alt="Gulmarg Gondola cable car over snowy slopes" loading="lazy" class="imgwarm" width="360" height="270" style="object-fit:cover;width:100%;height:100%">
            </div>
            <strong style="font-size:14px;color:var(--maroon)">Gulmarg Gondola &amp; Apharwat Peak</strong>
          </div>

          <div style="display:flex;flex-direction:column;gap:8px">
            <div class="arch" style="aspect-ratio:4/3;overflow:hidden">
              <img src="assets/images/kashmir-sonamarg-valley.jpg" alt="Thajiwas Glacier and Sindh Valley in Sonamarg" loading="lazy" class="imgwarm" width="360" height="270" style="object-fit:cover;width:100%;height:100%">
            </div>
            <strong style="font-size:14px;color:var(--maroon)">Sonamarg Valley &amp; Glacier</strong>
          </div>

          <div style="display:flex;flex-direction:column;gap:8px">
            <div class="arch" style="aspect-ratio:4/3;overflow:hidden">
              <img src="assets/images/kashmir-pahalgam.jpg" alt="Green pine meadow of Betaab Valley in Pahalgam" loading="lazy" class="imgwarm" width="360" height="270" style="object-fit:cover;width:100%;height:100%">
            </div>
            <strong style="font-size:14px;color:var(--maroon)">Betaab Valley, Pahalgam</strong>
          </div>

          <div style="display:flex;flex-direction:column;gap:8px">
            <div class="arch" style="aspect-ratio:4/3;overflow:hidden">
              <img src="assets/images/kashmir-doodhpathri.jpg" alt="Lush rolling green meadows of Doodhpathri Kashmir" loading="lazy" class="imgwarm" width="360" height="270" style="object-fit:cover;width:100%;height:100%">
            </div>
            <strong style="font-size:14px;color:var(--maroon)">Doodhpathri — The Valley of Milk</strong>
          </div>

          <div style="display:flex;flex-direction:column;gap:8px">
            <div class="arch" style="aspect-ratio:4/3;overflow:hidden">
              <img src="assets/images/kashmir-nishat-bagh.jpg" alt="Terraces and fountains of Nishat Bagh Mughal Garden" loading="lazy" class="imgwarm" width="360" height="270" style="object-fit:cover;width:100%;height:100%">
            </div>
            <strong style="font-size:14px;color:var(--maroon)">Nishat Bagh Mughal Garden</strong>
          </div>
        </div>
      </section>

      <!-- Frequently Asked Questions -->
      <section aria-label="Frequently asked questions">
        <p class="eyebrow" style="margin-bottom:12px">HAVE QUESTIONS?</p>
        <h2 style="margin:0 0 28px;font-size:clamp(26px,2.5vw,36px);color:var(--maroon);line-height:1.15">Frequently Asked Questions</h2>
        
        <div class="faq-list">
          <div class="faq-item">
            <button type="button" class="faq-q" aria-expanded="false">
              <span>Where will the driver pick us up in Jammu on Day 1?</span>
              <span class="ic" aria-hidden="true">+</span>
            </button>
            <div class="faq-a">
              <p>Our professional driver will meet you directly outside Jammu Tawi Railway Station or Jammu Airport at your scheduled arrival time with a name placard. We recommend arriving in Jammu by morning so you can comfortably reach Srinagar by late afternoon.</p>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-q" aria-expanded="false">
              <span>Is this vehicle dedicated just for our family/group?</span>
              <span class="ic" aria-hidden="true">+</span>
            </button>
            <div class="faq-a">
              <p>Yes, 100%! This is a private tour. You will have a dedicated private vehicle (sedan or SUV depending on your group size) exclusively for you throughout all 6 days with driver allowance, fuel, parking, and toll taxes included.</p>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-q" aria-expanded="false">
              <span>Can we add a Houseboat stay on Dal Lake?</span>
              <span class="ic" aria-hidden="true">+</span>
            </button>
            <div class="faq-a">
              <p>Absolutely! We can easily upgrade one of your 4 nights in Srinagar to a traditional luxury wooden houseboat on Dal Lake or Nigeen Lake, complete with a Shikara crossing. Just let us know when chatting on WhatsApp.</p>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-q" aria-expanded="false">
              <span>How do we book Gulmarg Gondola tickets?</span>
              <span class="ic" aria-hidden="true">+</span>
            </button>
            <div class="faq-a">
              <p>Gulmarg Gondola tickets are issued exclusively through the J&amp;K Cable Car Corporation official portal. Due to heavy tourist demand, we strongly advise booking your Gondola slots at least 2–3 weeks in advance. Our team will guide you step-by-step through the booking link.</p>
            </div>
          </div>

          <div class="faq-item">
            <button type="button" class="faq-q" aria-expanded="false">
              <span>How do I confirm the booking and lock in the ₹10,999 rate?</span>
              <span class="ic" aria-hidden="true">+</span>
            </button>
            <div class="faq-a">
              <p>Simply click the "Get Quote on WhatsApp" button or call us. We will instantly share your confirmed customized quotation, hotel options, and booking voucher. You can secure your reservation with a nominal advance payment, and pay the balance upon arrival.</p>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Sticky Sidebar Enquiry Card (Optimized for Ads) -->
    <aside data-screen-label="Enquiry sidebar" id="quote-form" style="position:sticky;top:96px;border:1px solid rgba(176,138,71,.5);background:#F3EAD8;padding:32px;display:flex;flex-direction:column;gap:16px" aria-label="Enquire about this package">
      <div style="background:var(--maroon);color:var(--goldlt);padding:6px 12px;font-size:12px;font-weight:800;letter-spacing:.12em;text-align:center">
        PROMO RATE: ₹10,999
      </div>
      <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:26px;color:var(--maroon)">Get Instant Quote</h2>
      <p style="margin:0;font-size:13.5px;line-height:1.6;color:var(--body)">Fast response on WhatsApp within minutes. Fill your details below to receive the complete PDF itinerary and custom quote.</p>
      
      <div style="display:flex;align-items:center;gap:10px" aria-hidden="true">
        <span style="flex:1;height:1px;background:var(--gold)"></span>
        <span style="width:6px;height:6px;border:1px solid var(--gold);transform:rotate(45deg);flex:none"></span>
        <span style="flex:1;height:1px;background:var(--gold)"></span>
      </div>

      <label class="f">YOUR NAME *
        <input id="enq-name" type="text" placeholder="e.g. Rahul Sharma" required autocomplete="name">
      </label>

      <label class="f">PHONE NUMBER *
        <input id="enq-phone" type="tel" placeholder="10-digit mobile" required autocomplete="tel">
      </label>

      <label class="f">TRAVEL DATE
        <input id="enq-date" type="date">
      </label>

      <label class="f">TRAVELLERS
        <select id="enq-pax">
          <option>2 (couple)</option>
          <option>1 (solo)</option>
          <option>3–4 (family / friends)</option>
          <option>5–6 (group)</option>
          <option>7+ (large group)</option>
        </select>
      </label>

      <div id="enq-err" class="ferr">Please add your name and phone number.</div>

      <button type="button" id="enq-send" class="btn btn-wa" style="width:100%;padding:16px;font-weight:800" data-package="Kashmir 5N/6D Tour Package (Jammu to Jammu @ ₹10,999)">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        CLAIM OFFER ON WHATSAPP
      </button>

      <a href="tel:<?= SITE_PHONE_RAW ?>" style="text-align:center;font-size:13.5px;font-weight:700;color:var(--maroon)">or call us: <?= SITE_PHONE ?></a>
      
      <p style="margin:4px 0 0;font-size:11.5px;color:#7a6d5c;text-align:center;line-height:1.4">
        🔒 No payment now. We will verify availability and send your customized plan instantly.
      </p>
    </aside>
  </div>

  <!-- Related / Travellers Also Explored -->
  <section data-screen-label="Related packages" class="jaali" style="background:#F3EAD8">
    <div style="max-width:1200px;margin:0 auto;padding:72px 24px">
      <h2 style="margin:0 0 36px;font-family:var(--serif);font-weight:600;font-size:clamp(28px,3vw,40px);color:var(--maroon);text-align:center">More popular tour packages</h2>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px">
        <a href="package-nizami-heritage.php" style="background:#FFFCF7;border:1px solid rgba(176,138,71,.4);display:flex;flex-direction:column">
          <span class="arch" style="aspect-ratio:16/9;display:block;margin:12px 12px 0">
            <img src="assets/images/golconda-fort.jpg" alt="Golconda Fort — Nizami Heritage Trail" loading="lazy" class="imgwarm" width="360" height="202">
          </span>
          <span style="padding:18px 22px 22px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--serif);font-size:23px;font-weight:700;color:var(--maroon)">Nizami Heritage Trail</span>
            <span style="font-size:12.5px;font-weight:700;letter-spacing:.08em;color:var(--gold)">3D · 2N MOST LOVED — FROM ₹12,999</span>
          </span>
        </a>

        <a href="packages.php" style="background:#FFFCF7;border:1px solid rgba(176,138,71,.4);display:flex;flex-direction:column">
          <span class="arch" style="aspect-ratio:16/9;display:block;margin:12px 12px 0">
            <img src="assets/images/chowmahalla-palace.jpg" alt="Chowmahalla Palace — Royal Hyderabad" loading="lazy" class="imgwarm" width="360" height="202">
          </span>
          <span style="padding:18px 22px 22px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--serif);font-size:23px;font-weight:700;color:var(--maroon)">Royal Hyderabad</span>
            <span style="font-size:12.5px;font-weight:700;letter-spacing:.08em;color:var(--gold)">3D · 2N PREMIUM — FROM ₹16,499</span>
          </span>
        </a>

        <a href="packages.php" style="background:#FFFCF7;border:1px solid rgba(176,138,71,.4);display:flex;flex-direction:column">
          <span class="arch" style="aspect-ratio:16/9;display:block;margin:12px 12px 0">
            <img src="assets/images/deccan-explorer.jpg" alt="Durgam Cheruvu Cable Bridge — Grand Deccan Explorer" loading="lazy" class="imgwarm" width="360" height="202">
          </span>
          <span style="padding:18px 22px 22px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--serif);font-size:23px;font-weight:700;color:var(--maroon)">Grand Deccan Explorer</span>
            <span style="font-size:12.5px;font-weight:700;letter-spacing:.08em;color:var(--gold)">4D · 3N — FROM ₹18,990</span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
