<?php
require_once __DIR__ . '/includes/config.php';

$currentPage = 'contact';
$pageTitle = 'Contact Us — Plan Your Hyderabad Trip on WhatsApp | TourHyderabad.in';
$pageDesc = 'Get in touch with TourHyderabad local travel experts. Call or message on WhatsApp for custom itineraries, hotel upgrades, group tours, and instant pricing.';
$canonicalUrl = get_base_url() . '/contact.php';
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
  <!-- Page Header -->
  <section class="page-head jaali-dark" data-screen-label="Page header">
    <div class="wrap">
      <p class="eyebrow">CONTACT</p>
      <h1>Start the conversation</h1>
      <p class="lead">Fill the form and it opens WhatsApp with your details ready to send. Nothing is stored, nothing is paid — it's just a message.</p>
      <div class="rule" aria-hidden="true"><span></span><span></span><span></span></div>
    </div>
  </section>

  <!-- Contact Body -->
  <div data-screen-label="Contact body" class="contact-grid" style="max-width:1200px;margin:0 auto;padding:64px 24px 96px">
    
    <!-- Enquiry Form -->
    <section aria-label="Enquiry form" class="formbox">
      <h2 style="margin:0 0 8px;font-size:30px;color:var(--maroon)">Tell us about your trip</h2>
      <p style="margin:0 0 28px;font-size:14px;line-height:1.7;color:var(--body)">Two minutes here saves twenty messages later.</p>

      <form id="contact-form" onsubmit="return false;">
        <div class="fgrid">
          <label class="f">YOUR NAME *
            <input id="c-name" type="text" placeholder="e.g. Priya Sharma" required autocomplete="name">
          </label>

          <label class="f">PHONE *
            <input id="c-phone" type="tel" placeholder="10-digit mobile" required autocomplete="tel">
          </label>

          <label class="f">TRAVEL DATE
            <input id="c-date" type="date">
          </label>

          <label class="f">PACKAGE INTEREST
            <select id="c-pkg">
              <option>Not sure yet — advise me</option>
              <option>Kashmir Tour Package (5N/6D - ₹10,999)</option>
              <option>Hyderabad City Darshan (1 Day)</option>
              <option>Pearl City Express (2D1N)</option>
              <option>Nizami Heritage Trail (3D2N)</option>
              <option>Royal Hyderabad (3D2N Premium)</option>
              <option>Grand Deccan Explorer (4D3N)</option>
              <option>Hyderabad + Ramoji Special (2 Days)</option>
              <option>Old City Food &amp; Bazaar Walk (Half Day)</option>
              <option>Weekend Getaway Combo (3 Days)</option>
            </select>
          </label>

          <label class="f">TRAVELLERS
            <select id="c-pax">
              <option>2 (couple)</option>
              <option>1</option>
              <option>3–4</option>
              <option>5–6</option>
              <option>7+ (group)</option>
            </select>
          </label>
        </div>

        <label class="f" style="margin-top:18px">ANYTHING ELSE?
          <textarea id="c-msg" rows="4" placeholder="Vegetarian meals, wheelchair access, anniversary surprise — anything." style="resize:vertical"></textarea>
        </label>

        <div id="c-err" class="ferr">Please add your name.</div>

        <button type="button" id="c-send" class="btn btn-wa" style="margin-top:22px;width:100%;padding:17px">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          SEND VIA WHATSAPP
        </button>

        <p style="margin:14px 0 0;font-size:12.5px;color:#6b6156;text-align:center">Opens WhatsApp with your message pre-filled — you press send.</p>
      </form>
    </section>

    <!-- Contact Info Cards & Map -->
    <div style="display:flex;flex-direction:column;gap:24px">
      <a href="<?= get_whatsapp_url("Hi! I want to plan a Hyderabad trip.") ?>" class="contact-card" target="_blank" rel="noopener">
        <span class="ico" style="background:var(--gold)"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--maroon-d)" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></span>
        <span>
          <small>WHATSAPP</small>
          <b><?= SITE_PHONE ?></b>
        </span>
      </a>

      <a href="tel:<?= SITE_PHONE_RAW ?>" class="contact-card">
        <span class="ico" style="background:var(--maroon)"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--goldlt)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.34 1.78.66 2.62a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.46-1.23a2 2 0 0 1 2.11-.45c.84.32 1.72.54 2.62.66A2 2 0 0 1 22 16.92z"></path></svg></span>
        <span>
          <small>CALL US</small>
          <b><?= SITE_PHONE ?></b>
        </span>
      </a>

      <div class="contact-card">
        <span class="ico" style="border:1px solid var(--gold)"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#B08A47" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>
        <span>
          <small>WE REPLY</small>
          <b><?= SITE_HOURS ?></b>
        </span>
      </div>

      <div style="border:1px solid rgba(176,138,71,.5);overflow:hidden">
        <iframe src="https://www.google.com/maps?q=Hyderabad,Telangana&amp;output=embed" title="Map of Hyderabad, Telangana" width="100%" height="260" style="border:0;display:block" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <!-- Top FAQs Section -->
  <section data-screen-label="Top FAQs" style="background:#F3EAD8">
    <div style="max-width:860px;margin:0 auto;padding:72px 24px">
      <h2 style="margin:0 0 40px;font-size:clamp(30px,3.5vw,44px);color:var(--maroon);text-align:center">The three things everyone asks first</h2>
      
      <div style="display:flex;flex-direction:column;gap:28px">
        <div style="border-left:2px solid var(--gold);padding-left:20px">
          <h3 style="margin:0 0 8px;font-size:17px;font-weight:800;color:var(--ink);font-family:var(--sans)">How does payment work?</h3>
          <p style="margin:0;font-size:15px;line-height:1.8;color:var(--body)">No payment on this website. Confirm your plan on WhatsApp, pay a small advance via UPI to lock dates, settle the rest during the trip.</p>
        </div>

        <div style="border-left:2px solid var(--gold);padding-left:20px">
          <h3 style="margin:0 0 8px;font-size:17px;font-weight:800;color:var(--ink);font-family:var(--sans)">Can we customise a package?</h3>
          <p style="margin:0;font-size:15px;line-height:1.8;color:var(--body)">Always. Every itinerary is redrawn around your dates, pace and interests — at no extra planning cost.</p>
        </div>

        <div style="border-left:2px solid var(--gold);padding-left:20px">
          <h3 style="margin:0 0 8px;font-size:17px;font-weight:800;color:var(--ink);font-family:var(--sans)">Where do you pick us up?</h3>
          <p style="margin:0;font-size:15px;line-height:1.8;color:var(--body)">Airport, railway station or your hotel — included in every package, with arrival tracking for early flights.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
