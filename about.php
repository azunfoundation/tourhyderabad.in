<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'about';
$pageTitle = 'About Us — A Hyderabadi Team, Honest Pricing | TourHyderabad.in';
$pageDesc = 'TourHyderabad is a born-and-raised local Hyderabadi team. No call centers, no hidden fees, just honest itineraries and local drivers who love this city.';
$canonicalUrl = get_base_url() . '/about.php';
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
  <!-- Story Section -->
  <section data-screen-label="Story" class="story-grid" style="max-width:1200px;margin:0 auto">
    <div>
      <p class="eyebrow">ABOUT TOURHYDERABAD</p>
      <h1 style="margin:0 0 24px;font-size:clamp(38px,5vw,60px);color:var(--maroon);line-height:1.08">We show people the city we never left</h1>
      <p style="margin:0 0 18px;font-size:16px;line-height:1.85;color:var(--body);text-wrap:pretty">TourHyderabad started in 2026 with a simple irritation: friends visiting the city kept overpaying for rushed, checklist tours run from call centres in other states. We'd take over their plans, and they'd leave saying it was the best trip of the year.</p>
      <p style="margin:0 0 18px;font-size:16px;line-height:1.85;color:var(--body);text-wrap:pretty">So we made it a business. A born-and-raised Hyderabadi team, drivers we've known for years, hotels we've slept in ourselves, and one rule that never bends: the price we quote on WhatsApp is the price you pay.</p>
      <p style="margin:0;font-size:16px;line-height:1.85;color:var(--body);text-wrap:pretty">No booking portals, no payment gateways, no fine print. Just a conversation, a plan, and a city we're genuinely proud to hand you.</p>
    </div>
    <div class="arch" style="aspect-ratio:4/5">
      <img src="assets/images/hero-charminar.jpg" alt="Charminar above the streets our team grew up in" class="imgwarm" width="459" height="612" loading="eager">
    </div>
  </section>

  <!-- Values Section -->
  <section class="jaali" data-screen-label="Values" style="background:#F3EAD8">
    <div style="max-width:1200px;margin:0 auto;padding:80px 24px">
      <div style="text-align:center;margin-bottom:52px">
        <p class="eyebrow">WHAT WE STAND ON</p>
        <h2 style="margin:0;font-size:clamp(32px,4vw,48px);color:var(--maroon);line-height:1.1">Four promises, kept on every trip</h2>
      </div>
      
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:24px">
        <div class="value-card">
          <span style="width:10px;height:10px;border:1px solid var(--gold);transform:rotate(45deg)" aria-hidden="true"></span>
          <h3>Transparent pricing</h3>
          <p>Every quote itemises the car, hotel, entries and meals. If a monument fee changes, we absorb it — not you.</p>
        </div>
        <div class="value-card">
          <span style="width:10px;height:10px;border:1px solid var(--gold);transform:rotate(45deg)" aria-hidden="true"></span>
          <h3>Local, always</h3>
          <p>Your plan is made by someone who can argue about the best haleem in the city — and drive you to the winner.</p>
        </div>
        <div class="value-card">
          <span style="width:10px;height:10px;border:1px solid var(--gold);transform:rotate(45deg)" aria-hidden="true"></span>
          <h3>Handpicked partners</h3>
          <p>Hotels we've inspected room by room, and drivers who've worked with us since before we had a name.</p>
        </div>
        <div class="value-card">
          <span style="width:10px;height:10px;border:1px solid var(--gold);transform:rotate(45deg)" aria-hidden="true"></span>
          <h3>One message away</h3>
          <p>From first enquiry to airport drop, the same WhatsApp thread answers within minutes, 9 AM to 9 PM.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Meet the Planner Section -->
  <section data-screen-label="Meet the planner" class="team-grid" style="max-width:1200px;margin:0 auto">
    <div class="arch" style="aspect-ratio:4/3.5;max-width:440px;margin:0 auto">
      <img src="assets/images/irani-chai.jpg" alt="Irani chai on a café table — where most of our itineraries get drafted" loading="lazy" class="imgwarm" width="560" height="490">
    </div>
    <div>
      <p class="eyebrow">MEET YOUR PLANNER</p>
      <h2 style="margin:0 0 24px;font-size:clamp(32px,4vw,48px);color:var(--maroon);line-height:1.12">The person on the other end of the chat</h2>
      <p style="margin:0 0 18px;font-size:16px;line-height:1.85;color:var(--body);text-wrap:pretty">When you message us, you're not routed through a ticketing system. You talk to the planner who will actually book your hotel, brief your driver, and check in on your second evening to ask how the biryani was.</p>
      <p style="margin:0 0 28px;font-size:16px;line-height:1.85;color:var(--body);text-wrap:pretty">Most itineraries here get drafted over Irani chai near Charminar — it keeps us honest about what a day in the Old City really feels like, hour by hour, in traffic and in queues.</p>
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:28px" aria-hidden="true">
        <span style="width:64px;height:1px;background:var(--gold)"></span>
        <span style="width:8px;height:8px;border:1px solid var(--gold);transform:rotate(45deg)"></span>
        <span style="width:64px;height:1px;background:var(--gold)"></span>
      </div>
      <a href="<?= get_whatsapp_url("Hi! I'd like to talk to a planner about a Hyderabad trip.") ?>" class="btn btn-wa" target="_blank" rel="noopener">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        SAY HELLO ON WHATSAPP
      </a>
    </div>
  </section>

  <!-- CTA Band -->
  <section class="band jaali-dark" data-screen-label="CTA band">
    <div class="scallop" aria-hidden="true" style="--sc:var(--ivory)"></div>
    <div class="wrap">
      <h2>Come see our city properly</h2>
      <p>Dates, group size, and what you'd love to see — that's all we need to start.</p>
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
