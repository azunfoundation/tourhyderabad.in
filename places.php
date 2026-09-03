<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'places';
$pageTitle = 'Places to Visit in Hyderabad — 10 Icons Worth Your Time | TourHyderabad.in';
$pageDesc = 'Ten places that explain Hyderabad: Charminar, Golconda Fort, Chowmahalla Palace, Qutb Shahi Tombs, Salar Jung Museum, Ramoji Film City, and Laad Bazaar with honest best timings.';
$canonicalUrl = get_base_url() . '/places.php';
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
  <!-- Page Header -->
  <section class="page-head jaali-dark" data-screen-label="Page header">
    <div class="wrap">
      <p class="eyebrow">PLACES TO VISIT</p>
      <h1>Ten places that explain Hyderabad</h1>
      <p class="lead">Written by people who take visitors to these places every week — with the honest best time to go, and which of our packages already include them.</p>
      <div class="rule" aria-hidden="true"><span></span><span></span><span></span></div>
    </div>
  </section>

  <!-- Places List -->
  <section data-screen-label="Places list" style="max-width:1080px;margin:0 auto;padding:72px 24px 96px;display:flex;flex-direction:column;gap:80px">

    <!-- 01 Charminar -->
    <article class="place">
      <div class="arch">
        <img src="assets/images/charminar.jpg" alt="Charminar's four minarets above the Old City crowds" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">01</p>
        <h2>Charminar</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">Built in 1591 to mark the founding of the city, the Charminar is less a monument than the beating centre of a living bazaar. Climb the narrow stair for a minaret-framed view of Mecca Masjid, then let the Old City pull you in — attar sellers, kite shops, and chai served in chipped porcelain since your grandfather's time.</p>
        <p class="best">BEST TIME · EARLY MORNING, OR AFTER DARK FOR THE LIGHTS</p>
        <p class="in">Included in: <a href="package-nizami-heritage.php">Nizami Heritage Trail</a> · <a href="packages.php">City Darshan</a> · <a href="packages.php">Food &amp; Bazaar Walk</a></p>
      </div>
    </article>

    <!-- 02 Golconda Fort -->
    <article class="place flip">
      <div class="arch">
        <img src="assets/images/golconda-fort.jpg" alt="Weathered granite gateways of Golconda Fort" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">02</p>
        <h2>Golconda Fort</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">The fortress that guarded the Koh-i-Noor. Clap at the Fateh Darwaza and a guard a hilltop away hears you — 16th-century acoustics that still work. The climb to the Baradari pavilion takes about forty minutes; time it for late afternoon and the whole Deccan turns gold beneath you at sunset.</p>
        <p class="best">BEST TIME · 4 PM CLIMB, SUNSET ON TOP, LIGHT SHOW AFTER</p>
        <p class="in">Included in: <a href="package-nizami-heritage.php">Nizami Heritage Trail</a> · <a href="packages.php">City Darshan</a> · <a href="packages.php">Grand Deccan Explorer</a></p>
      </div>
    </article>

    <!-- 03 Chowmahalla Palace -->
    <article class="place">
      <div class="arch">
        <img src="assets/images/chowmahalla-palace.jpg" alt="Chowmahalla Palace grand facade and illuminated durbar hall with historic cannon" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">03</p>
        <h2>Chowmahalla Palace</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">Four palaces around a fountain courtyard, where the Nizams held court for two centuries. The Khilwat Mubarak's durbar hall still carries nineteen Belgian crystal chandeliers, and the vintage garage holds a 1912 Rolls-Royce. Quieter than Charminar, five minutes away, and most travellers' surprise favourite.</p>
        <p class="best">BEST TIME · WEEKDAY MORNINGS · CLOSED FRIDAYS</p>
        <p class="in">Included in: <a href="package-nizami-heritage.php">Nizami Heritage Trail</a> · <a href="packages.php">Royal Hyderabad</a></p>
      </div>
    </article>

    <!-- 04 Qutb Shahi Tombs -->
    <article class="place flip">
      <div class="arch">
        <img src="assets/images/qutb-shahi-tombs.jpg" alt="Intricate dome and minaret of the Qutb Shahi Tombs in Hyderabad" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">04</p>
        <h2>Qutb Shahi Tombs</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">Seven generations of Golconda's kings rest here under grey granite domes, in gardens that stay strangely calm even on weekends. Recent restoration has brought back the glazed turquoise tilework on some tombs. Combine it with Golconda next door — the kings did, after all.</p>
        <p class="best">BEST TIME · GOLDEN HOUR, WITH GOLCONDA THE SAME DAY</p>
        <p class="in">Included in: <a href="package-nizami-heritage.php">Nizami Heritage Trail</a> · <a href="packages.php">Grand Deccan Explorer</a></p>
      </div>
    </article>

    <!-- 05 Salar Jung Museum -->
    <article class="place">
      <div class="arch">
        <img src="assets/images/salar-jung-museum.jpg" alt="The white facade and grand dome of Salar Jung Museum in Hyderabad" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">05</p>
        <h2>Salar Jung Museum</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">One man's collection — 43,000 objects gathered by Salar Jung III, prime minister to the Nizam. The Veiled Rebecca draws the crowds; the 19th-century British musical clock strikes a small theatre performance at every hour. Give it two unhurried hours, more if manuscripts are your thing.</p>
        <p class="best">BEST TIME · AFTERNOONS · CATCH THE CLOCK ON THE HOUR</p>
        <p class="in">Included in: <a href="package-nizami-heritage.php">Nizami Heritage Trail</a> · <a href="packages.php">City Darshan</a></p>
      </div>
    </article>

    <!-- 06 Hussain Sagar & Lumbini Park -->
    <article class="place flip">
      <div class="arch">
        <img src="assets/images/hussain-sagar.jpg" alt="Monolithic Buddha statue illuminated at Hussain Sagar lake" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">06</p>
        <h2>Hussain Sagar &amp; Lumbini Park</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">A 16th-century lake with an 18-metre monolithic Buddha standing mid-water. Take the ferry from Lumbini Park at dusk, when Tank Bund's lights come on and the city cools down. The lakeside promenade is where Hyderabad comes to walk, snack and be seen in the evenings.</p>
        <p class="best">BEST TIME · SUNSET FERRY, THEN THE PROMENADE</p>
        <p class="in">Included in: <a href="packages.php">Pearl City Express</a> · <a href="packages.php">City Darshan</a></p>
      </div>
    </article>

    <!-- 07 Birla Mandir -->
    <article class="place">
      <div class="arch">
        <img src="assets/images/birla-mandir.jpg" alt="Birla Mandir white marble temple on Naubat Pahad overlooking Hyderabad" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">07</p>
        <h2>Birla Mandir</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">Two thousand tonnes of white Rajasthani marble on a hill above Hussain Sagar. Come for the evening aarti, stay for the view — the temple looks over the whole lake as the city lights switch on. Phones stay in lockers, which is half the peace of the place.</p>
        <p class="best">BEST TIME · EVENING AARTI, VIEW AFTER DARK</p>
        <p class="in">Included in: <a href="packages.php">City Darshan</a> · <a href="packages.php">Pearl City Express</a></p>
      </div>
    </article>

    <!-- 08 Ramoji Film City -->
    <article class="place flip">
      <div class="arch">
        <img src="assets/images/ramoji-film-city.jpg" alt="Ramoji Film City grand entrance sign and studio grounds" loading="lazy" class="imgwarm" width="490" height="613" style="object-position:28% center">
      </div>
      <div>
        <p class="num">08</p>
        <h2>Ramoji Film City</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">The world's largest film studio complex — 1,666 acres where Baahubali's kingdoms were built. Guided bus tours run through film sets, gardens and stunt shows; it's a full day, and children never want to leave. It sits 40 minutes outside the city, so we plan it as its own day.</p>
        <p class="best">BEST TIME · WEEKDAYS, ARRIVE AT OPENING (9 AM)</p>
        <p class="in">Included in: <a href="packages.php">Hyderabad + Ramoji Special</a> · <a href="packages.php">Grand Deccan Explorer</a></p>
      </div>
    </article>

    <!-- 09 Nehru Zoological Park -->
    <article class="place">
      <div class="arch">
        <img src="assets/images/nehru-zoo.jpg" alt="Iconic entrance sculpture at Nehru Zoological Park depicting wildlife and nature" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">09</p>
        <h2>Nehru Zoological Park</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">One of India's largest zoos — 380 acres with drive-through lion and tiger safaris, a nocturnal house and a toy train that saves small legs. It's the easiest half-day in the city with children, ten minutes from the Old City, so it pairs well with a relaxed Charminar morning.</p>
        <p class="best">BEST TIME · MORNINGS BEFORE THE HEAT · CLOSED MONDAYS</p>
        <p class="in">Included in: <a href="contact.php">Custom family itineraries</a> — ask us on WhatsApp</p>
      </div>
    </article>

    <!-- 10 Laad Bazaar & Old City Shopping -->
    <article class="place flip">
      <div class="arch">
        <img src="assets/images/laad-bazaar.jpg" alt="Bustling evening in Laad Bazaar with illuminated bangle shops and Charminar in the background" loading="lazy" class="imgwarm" width="490" height="613">
      </div>
      <div>
        <p class="num">10</p>
        <h2>Laad Bazaar &amp; Old City Shopping</h2>
        <p style="margin:0 0 18px;font-size:15px;line-height:1.85;color:var(--body);text-wrap:pretty">One lane, four hundred years of lacquer bangles — laad means lacquer, and artisans still press glass stones into it by hand a few doors behind the shops. Beyond it: pearls at Pathergatti, ittar bottles, and wedding brocade. Bargain gently, buy chai for the shopkeeper, hear better stories.</p>
        <p class="best">BEST TIME · LATE AFTERNOON INTO THE EVENING LIGHTS</p>
        <p class="in">Included in: <a href="packages.php">Food &amp; Bazaar Walk</a> · <a href="package-nizami-heritage.php">Nizami Heritage Trail</a></p>
      </div>
    </article>
  </section>

  <!-- CTA Band -->
  <section class="band jaali-dark" data-screen-label="CTA band">
    <div class="scallop" aria-hidden="true" style="--sc:var(--ivory)"></div>
    <div class="wrap">
      <h2>Pick your five, we'll plan the rest</h2>
      <p>Tell us which of these you can't miss — the itinerary builds itself around them.</p>
      <a href="<?= get_whatsapp_url("Hi! These are the places I want to see in Hyderabad: ") ?>" class="btn btn-gold" target="_blank" rel="noopener">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        SEND MY LIST ON WHATSAPP
      </a>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
