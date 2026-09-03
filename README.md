# TourHyderabad.in

> Local Sightseeing, Custom Itineraries, and Heritage Tours in Hyderabad.

**TourHyderabad.in** is a dynamic, high-performance tourism website built for Hyderabad travel packages, heritage walks, family trips, and corporate outings.

---

## 🌟 Key Features

- **Modern Responsive Design**: Optimized for mobile and desktop devices.
- **Pre-curated Tour Packages**: Nizami Heritage Walk, Ramoji Film City, Day Tours, Family & Weekend Getaways.
- **Interactive Sightseeing Catalog**: Detailed destination guides covering Charminar, Golconda Fort, Hussain Sagar, Qutb Shahi Tombs, Salar Jung Museum, Chowmahalla Palace, and more.
- **Lead Capture & WhatsApp Integration**: Direct inquiry flow routing inquiries to WhatsApp and persisting leads (MySQL / JSON fallback).
- **Clean URLs & SEO Ready**: Configured `.htaccess` routing with XML sitemap and Open Graph metadata.

---

## 📁 Directory Structure

```text
tourhyderabad.in/
├── api/
│   └── enquiry.php                 # Lead capture and WhatsApp handler
├── assets/
│   ├── css/
│   │   └── styles.css              # Custom styling & typography
│   ├── images/                     # Optimized destination and package photos
│   └── js/
│       └── main.js                 # Client-side scripts & interactions
├── data/
│   ├── .htaccess                   # Deny direct access to data
│   └── leads.json                  # Local lead storage fallback
├── includes/
│   ├── config.php                  # Site settings, contact info, DB config
│   ├── db.php                      # Database helper with fallback storage
│   ├── footer.php                  # Global footer
│   ├── head.php                    # SEO, Open Graph, meta tags
│   └── header.php                  # Global navigation bar & contact bar
├── tour hyderabad design/          # Design files & HTML templates
├── .htaccess                       # Apache URL rewrite rules & caching headers
├── about.php                       # About Us page
├── contact.php                     # Contact & inquiry form page
├── index.php                       # Homepage & featured tours
├── package-nizami-heritage.php     # Nizami Heritage tour package page
├── packages.php                    # Tour packages listing
├── places.php                      # Hyderabad tourist destinations directory
├── router.php                      # Development router for PHP built-in server
└── sitemap.xml                     # Search engine sitemap
```

---

## 🚀 Running Locally

You can run this project locally using the PHP built-in web server:

```bash
php -S localhost:8000 router.php
```

Then open your browser and navigate to:
```text
http://localhost:8000
```

---

## 🌐 Deployment (Hostinger / Apache)

1. Upload all files to the `public_html` directory of your hosting server.
2. Configure database credentials in `includes/config.php` or via environment variables (`DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`).
3. Ensure Apache `mod_rewrite` is enabled.

---

## 📞 Contact & Inquiries

- **Website**: [https://tourhyderabad.in](https://tourhyderabad.in)
- **Phone**: +91 96529 72699
- **Email**: contact@tourhyderabad.in
