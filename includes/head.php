<?php
if (!defined('TOURHYDERABAD_APP')) {
    require_once __DIR__ . '/config.php';
}

$title = $pageTitle ?? (SITE_NAME . ' — Local Experts, Custom Itineraries');
$desc = $pageDesc ?? 'Explore curated Hyderabad tour packages planned door-to-door by local experts. Charminar, Golconda Fort, Ramoji Film City, and Old City food walks with transparent pricing.';
$canonical = $canonicalUrl ?? (get_base_url() . '/' . ($current_page ?? ''));
$ogImage = $pageImage ?? (get_base_url() . '/assets/images/logo-full.png');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($desc) ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<base href="<?= get_base_url() ?>/">

<!-- Open Graph / Social Sharing -->
<meta property="og:site_name" content="<?= SITE_NAME ?>">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($title) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($desc) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

<!-- Favicon -->
<link rel="icon" type="image/jpeg" href="assets/images/logo-mark.jpg">
<link rel="apple-touch-icon" href="assets/images/logo-mark.jpg">

<!-- Google Fonts Preconnect & Stylesheet -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Core Stylesheet -->
<link rel="stylesheet" href="assets/css/styles.css">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "<?= SITE_NAME ?>",
  "description": "<?= addslashes($desc) ?>",
  "url": "<?= get_base_url() ?>",
  "logo": "<?= get_base_url() ?>/assets/images/logo-mark.jpg",
  "telephone": "<?= SITE_PHONE ?>",
  "priceRange": "₹1,499 - ₹18,990",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Hyderabad",
    "addressRegion": "Telangana",
    "addressCountry": "IN"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
    ],
    "opens": "09:00",
    "closes": "21:00"
  }
}
</script>
