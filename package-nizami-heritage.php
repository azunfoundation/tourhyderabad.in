<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'packages';
$pageTitle = 'Nizami Heritage Trail — 3 Days 2 Nights from ₹12,999 | TourHyderabad.in';
$pageDesc = 'The complete 3-day Nizami circuit: Charminar, Golconda Fort at sunset, Qutb Shahi Tombs, Chowmahalla Palace, and an Old City food walk with handpicked 3-Star stay.';
$canonicalUrl = get_base_url() . '/package-nizami-heritage.php';
$footerScallopColor = 'var(--tint)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>
  <!-- Package Hero Banner -->
  <section data-screen-label="Package hero" style="position:relative;min-height:56vh;display:flex;align-items:flex-end;overflow:hidden">
    <img src="assets/images/nizami-hero.jpg" alt="Granite bastions of Golconda Fort under a warm evening sky" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;filter:sepia(.12) saturate(1.05)" loading="eager" fetchpriority="high">
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(58,12,20,.92) 0%,rgba(58,12,20,.45) 55%,rgba(58,12,20,.2) 100%)"></div>
    <div class="wrap" style="position:relative;padding-top:120px;padding-bottom:48px;box-sizing:border-box">
      <p style="margin:0 0 12px;font-size:12px;font-weight:800;letter-spacing:.3em;color:var(--goldlt)">
        <a href="packages.php" style="color:var(--goldlt)">PACKAGES</a> / 3 DAYS 2 NIGHTS
      </p>
      <h1 style="margin:0;font-size:clamp(40px,5vw,68px);line-height:1.05;color:var(--ivory)">Nizami Heritage Trail</h1>
      <div style="display:flex;gap:28px;flex-wrap:wrap;margin-top:22px;font-size:14px;font-weight:700;letter-spacing:.08em;color:var(--cream)">
        <span>STARTING @ ₹12,999 PER COUPLE</span>
        <span style="color:var(--gold)" aria-hidden="true">◆</span>
        <span>3 DAYS · 2 NIGHTS</span>
        <span style="color:var(--gold)" aria-hidden="true">◆</span>
        <span>3-STAR HERITAGE-SIDE HOTEL</span>
      </div>
    </div>
  </section>

  <!-- Package Detail Body -->
  <div data-screen-label="Detail body" class="detail-grid" style="max-width:1200px;margin:0 auto;padding:64px 24px 96px">
    <div style="display:flex;flex-direction:column;gap:72px;min-width:0">
      <!-- Itinerary Timeline -->
      <section aria-label="Day-wise itinerary">
        <p class="eyebrow">DAY-WISE ITINERARY</p>
        <h2 style="margin:0 0 40px;font-size:clamp(30px,3vw,42px);color:var(--maroon);line-height:1.12">Three days along the road the Nizams took</h2>
        
        <div class="roadwrap">
          <svg viewBox="0 0 72 900" preserveAspectRatio="none" aria-hidden="true" class="roadsvg">
            <path id="roadpath" d="M36,4 C64,150 8,300 36,450 C64,600 10,750 36,896" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round" stroke-opacity=".8"></path>
          </svg>
          <div class="days">
            <!-- Day 1 -->
            <div data-day="1" class="day">
              <span class="mark" aria-hidden="true">1</span>
              <h3>The Old City</h3>
              <p class="meals">MEALS: LUNCH · EVENING CHAI</p>
              <p class="body">Pickup from the airport, station or your hotel by 9 AM. Start beneath the Charminar before the crowds, step into the bangle glitter of Laad Bazaar, then cross to Chowmahalla Palace — the Nizams' durbar hall still hung with Belgian chandeliers. A slow Deccani lunch, an afternoon at Salar Jung Museum, and evening chai with Osmania biscuits at a century-old Irani café. Overnight in Hyderabad.</p>
            </div>

            <!-- Day 2 -->
            <div data-day="2" class="day alt">
              <span class="mark" aria-hidden="true">2</span>
              <h3>Forts &amp; Tombs</h3>
              <p class="meals">MEALS: BREAKFAST · FOOD-WALK DINNER</p>
              <p class="body">After breakfast, the Qutb Shahi Tombs — seven kings resting in a garden of domes. Then Golconda Fort: the clap that echoes from gate to citadel, the diamond vaults that once held the Koh-i-Noor, and sunset from the ramparts timed to the minute. The evening is our Old City food walk — biryani, haleem in season, and a stop the guides argue about.</p>
            </div>

            <!-- Day 3 -->
            <div data-day="3" class="day">
              <span class="mark" aria-hidden="true">3</span>
              <h3>Lake, Temple &amp; Pearls</h3>
              <p class="meals">MEALS: BREAKFAST</p>
              <p class="body">A gentle last morning: Birla Mandir's white marble above the lake, a drive along Tank Bund past the Buddha of Hussain Sagar, and honest pearl shopping with someone who knows a real Hyderabadi strand from a dyed one. Drop at the airport or station by early evening, or extend the day — just say so on WhatsApp.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Inclusions & Exclusions -->
      <section aria-label="Inclusions and exclusions">
        <p class="eyebrow">WHAT'S COVERED</p>
        <h2 style="margin:0 0 32px;font-size:clamp(30px,3vw,42px);color:var(--maroon);line-height:1.12">One price, stated upfront</h2>
        <div class="twocol">
          <div class="panel">
            <h3>INCLUSIONS</h3>
            <ul>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>2 nights in a handpicked 3-Star hotel, city core</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Daily breakfast + Day 1 Deccani lunch</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Private AC car, all transfers and sightseeing drives</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Monument entry tickets for the full itinerary</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>Old City food walk with a local guide</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>24×7 WhatsApp support during the trip</li>
            </ul>
          </div>
          <div class="panel muted">
            <h3>EXCLUSIONS</h3>
            <ul>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Flights or trains to and from Hyderabad</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Dinners on Day 1 and Day 3</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Camera fees at monuments (₹25–₹130)</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Personal shopping and tips</li>
              <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#b3a894" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>Anything not listed under inclusions</li>
            </ul>
          </div>
        </div>
        <p class="note">Hotel category note: 3-Star properties like Hotel Deccan Serai or similar, inspected by us. Upgrade to 4-Star (Royal Hyderabad tier) for ₹3,500 extra per couple — ask on WhatsApp.</p>
      </section>

      <!-- Photo Gallery -->
      <section aria-label="Photo gallery">
        <p class="eyebrow" style="margin-bottom:24px">FROM THE TRAIL</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px">
          <div class="arch" style="aspect-ratio:3/4"><img src="assets/images/charminar.jpg" alt="Charminar at golden hour" loading="lazy" class="imgwarm" width="260" height="347"></div>
          <div class="arch" style="aspect-ratio:3/4"><img src="assets/images/qutb-shahi-tombs.jpg" alt="Intricate dome and minaret of the Qutb Shahi Tombs" loading="lazy" class="imgwarm" width="260" height="347"></div>
          <div class="arch" style="aspect-ratio:3/4"><img src="assets/images/hyderabadi-biryani.jpg" alt="Hyderabadi dum biryani on the food walk" loading="lazy" class="imgwarm" width="260" height="347"></div>
          <div class="arch" style="aspect-ratio:3/4"><img src="assets/images/pearl-jewellery.jpg" alt="Pearl jewellery of the kind sold in Hyderabad's pearl houses" loading="lazy" class="imgwarm" width="260" height="347"></div>
        </div>
      </section>
    </div>

    <!-- Sticky Sidebar Enquiry Card -->
    <aside data-screen-label="Enquiry sidebar" style="position:sticky;top:96px;border:1px solid rgba(176,138,71,.5);background:#F3EAD8;padding:32px;display:flex;flex-direction:column;gap:16px" aria-label="Enquire about this package">
      <h2 style="margin:0;font-family:var(--serif);font-weight:700;font-size:26px;color:var(--maroon)">Check dates &amp; price</h2>
      <p style="margin:0;font-size:13.5px;line-height:1.6;color:var(--body)">No payment here — this opens WhatsApp with your details filled in. We reply within minutes, 9 AM–9 PM.</p>
      
      <div style="display:flex;align-items:center;gap:10px" aria-hidden="true">
        <span style="flex:1;height:1px;background:var(--gold)"></span>
        <span style="width:6px;height:6px;border:1px solid var(--gold);transform:rotate(45deg);flex:none"></span>
        <span style="flex:1;height:1px;background:var(--gold)"></span>
      </div>

      <label class="f">YOUR NAME *
        <input id="enq-name" type="text" placeholder="e.g. Priya Sharma" required>
      </label>

      <label class="f">TRAVEL DATE
        <input id="enq-date" type="date">
      </label>

      <label class="f">TRAVELLERS
        <select id="enq-pax">
          <option>2 (couple)</option>
          <option>1</option>
          <option>3–4</option>
          <option>5–6</option>
          <option>7+ (group)</option>
        </select>
      </label>

      <div id="enq-err" class="ferr">Please add your name so we know who's travelling.</div>

      <button type="button" id="enq-send" class="btn btn-wa" style="width:100%;padding:16px">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        GET QUOTE ON WHATSAPP
      </button>

      <a href="tel:<?= SITE_PHONE_RAW ?>" style="text-align:center;font-size:13.5px;font-weight:700;color:var(--maroon)">or call <?= SITE_PHONE ?></a>
    </aside>
  </div>

  <!-- Related Packages -->
  <section data-screen-label="Related packages" class="jaali" style="background:#F3EAD8">
    <div style="max-width:1200px;margin:0 auto;padding:72px 24px">
      <h2 style="margin:0 0 36px;font-family:var(--serif);font-weight:600;font-size:clamp(28px,3vw,40px);color:var(--maroon);text-align:center">Travellers also asked about</h2>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px">
        <a href="packages.php" style="background:#FFFCF7;border:1px solid rgba(176,138,71,.4);display:flex;flex-direction:column">
          <span class="arch" style="aspect-ratio:16/9;display:block;margin:12px 12px 0">
            <img src="assets/images/chowmahalla-palace.jpg" alt="Chowmahalla Palace courtyard — Royal Hyderabad package" loading="lazy" class="imgwarm" width="360" height="202">
          </span>
          <span style="padding:18px 22px 22px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--serif);font-size:23px;font-weight:700;color:var(--maroon)">Royal Hyderabad</span>
            <span style="font-size:12.5px;font-weight:700;letter-spacing:.08em;color:var(--gold)">3D · 2N PREMIUM — FROM ₹16,499</span>
          </span>
        </a>

        <a href="packages.php" style="background:#FFFCF7;border:1px solid rgba(176,138,71,.4);display:flex;flex-direction:column">
          <span class="arch" style="aspect-ratio:16/9;display:block;margin:12px 12px 0">
            <img src="assets/images/deccan-explorer.jpg" alt="Durgam Cheruvu Cable Bridge — Grand Deccan Explorer package" loading="lazy" class="imgwarm" width="360" height="202">
          </span>
          <span style="padding:18px 22px 22px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--serif);font-size:23px;font-weight:700;color:var(--maroon)">Grand Deccan Explorer</span>
            <span style="font-size:12.5px;font-weight:700;letter-spacing:.08em;color:var(--gold)">4D · 3N — FROM ₹18,990</span>
          </span>
        </a>

        <a href="packages.php" style="background:#FFFCF7;border:1px solid rgba(176,138,71,.4);display:flex;flex-direction:column">
          <span class="arch" style="aspect-ratio:16/9;display:block;margin:12px 12px 0">
            <img src="assets/images/hyderabadi-biryani.jpg" alt="Dum biryani — Old City Food and Bazaar Walk" loading="lazy" class="imgwarm" width="360" height="202">
          </span>
          <span style="padding:18px 22px 22px;display:flex;flex-direction:column;gap:6px">
            <span style="font-family:var(--serif);font-size:23px;font-weight:700;color:var(--maroon)">Old City Food &amp; Bazaar Walk</span>
            <span style="font-size:12.5px;font-weight:700;letter-spacing:.08em;color:var(--gold)">HALF DAY — FROM ₹1,499 PP</span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
