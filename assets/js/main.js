/**
 * TourHyderabad.in — Production JavaScript
 * Implements interactive behaviors, trip builder, filter, accordions, and WhatsApp lead capture.
 */

(function () {
  "use strict";

  var WA = "919652972699";
  var reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* --------------------------------------------------------------------------
     1. Sticky Header Shadow
     -------------------------------------------------------------------------- */
  var head = document.querySelector(".site-head");
  if (head) {
    var onScroll = function () {
      head.classList.toggle("scrolled", window.scrollY > 8);
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  /* --------------------------------------------------------------------------
     1b. Mobile Navigation Drawer
     -------------------------------------------------------------------------- */
  var navToggle = document.getElementById("nav-toggle");
  var drawer = document.getElementById("mobile-drawer");
  var backdrop = document.getElementById("drawer-backdrop");
  var drawerClose = document.getElementById("drawer-close");

  function openDrawer() {
    if (!drawer) return;
    drawer.classList.add("open");
    drawer.setAttribute("aria-hidden", "false");
    if (backdrop) {
      backdrop.classList.add("open");
      backdrop.setAttribute("aria-hidden", "false");
    }
    if (navToggle) {
      navToggle.setAttribute("aria-expanded", "true");
      navToggle.setAttribute("aria-label", "Close navigation menu");
    }
    document.body.style.overflow = "hidden";
  }

  function closeDrawer() {
    if (!drawer) return;
    drawer.classList.remove("open");
    drawer.setAttribute("aria-hidden", "true");
    if (backdrop) {
      backdrop.classList.remove("open");
      backdrop.setAttribute("aria-hidden", "true");
    }
    if (navToggle) {
      navToggle.setAttribute("aria-expanded", "false");
      navToggle.setAttribute("aria-label", "Open navigation menu");
    }
    document.body.style.overflow = "";
  }

  if (navToggle) {
    navToggle.addEventListener("click", function () {
      var isOpen = drawer && drawer.classList.contains("open");
      if (isOpen) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }

  if (drawerClose) {
    drawerClose.addEventListener("click", closeDrawer);
  }

  if (backdrop) {
    backdrop.addEventListener("click", closeDrawer);
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && drawer && drawer.classList.contains("open")) {
      closeDrawer();
    }
  });

  if (drawer) {
    var drawerLinks = drawer.querySelectorAll("a");
    drawerLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        closeDrawer();
      });
    });
  }

  /* --------------------------------------------------------------------------
     2. Hero Entrance Animation
     -------------------------------------------------------------------------- */
  document.documentElement.classList.add("anim");

  /* --------------------------------------------------------------------------
     3. Scroll Reveal Animations
     -------------------------------------------------------------------------- */
  if (!reduced && "IntersectionObserver" in window) {
    var revealEls = document.querySelectorAll("[data-reveal]");
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("in");
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    revealEls.forEach(function (el) {
      if (el.getBoundingClientRect().top < window.innerHeight) {
        el.classList.add("in");
        return;
      }
      el.classList.add("rv");
      revealObserver.observe(el);
    });
  } else {
    document.querySelectorAll("[data-reveal]").forEach(function (el) {
      el.classList.add("in");
    });
  }

  /* --------------------------------------------------------------------------
     4. FAQ Accordion
     -------------------------------------------------------------------------- */
  document.querySelectorAll(".faq-item").forEach(function (item) {
    var q = item.querySelector(".faq-q");
    if (!q) return;
    q.addEventListener("click", function () {
      var isOpen = item.classList.contains("open");
      var parent = item.parentElement;
      if (parent) {
        parent.querySelectorAll(".faq-item.open").forEach(function (openItem) {
          openItem.classList.remove("open");
          var btn = openItem.querySelector(".faq-q");
          if (btn) btn.setAttribute("aria-expanded", "false");
        });
      }
      if (!isOpen) {
        item.classList.add("open");
        q.setAttribute("aria-expanded", "true");
      }
    });
  });

  /* --------------------------------------------------------------------------
     5. Package Filter (packages.php)
     -------------------------------------------------------------------------- */
  var pkgGrid = document.getElementById("pkg-grid");
  if (pkgGrid) {
    var filterBtns = document.querySelectorAll(".filters .seg");
    filterBtns.forEach(function (btn) {
      btn.addEventListener("click", function () {
        filterBtns.forEach(function (b) { b.setAttribute("aria-pressed", "false"); });
        btn.setAttribute("aria-pressed", "true");

        var filter = btn.dataset.filter || "All";
        var cards = pkgGrid.querySelectorAll(".ticket");

        cards.forEach(function (card) {
          var cats = (card.dataset.cat || "").split("|");
          var matches = filter === "All" || cats.indexOf(filter) !== -1;

          if (matches) {
            card.style.display = "";
            if (!reduced) {
              card.style.opacity = "0";
              requestAnimationFrame(function () {
                card.style.transition = "opacity 0.35s ease";
                card.style.opacity = "1";
              });
            }
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  }

  /* --------------------------------------------------------------------------
     6. Trip Builder (index.php)
     -------------------------------------------------------------------------- */
  var builder = document.getElementById("trip-builder");
  if (builder) {
    var PKGS = {
      darshan: {
        name: "Hyderabad City Darshan",
        dur: "1 Day",
        price: "₹2,999",
        img: "assets/images/charminar.jpg",
        line: "Charminar, Golconda and Salar Jung in one unhurried loop, with a local driver-guide."
      },
      pearl: {
        name: "Pearl City Express",
        dur: "2D · 1N",
        price: "₹8,999 per couple",
        img: "assets/images/hussain-sagar.jpg",
        line: "Old City heritage by day, Hussain Sagar and Tank Bund lights by night."
      },
      nizami: {
        name: "Nizami Heritage Trail",
        dur: "3D · 2N",
        price: "₹12,999 per couple",
        img: "assets/images/golconda-fort.jpg",
        line: "The full Nizami circuit — palaces, forts, tombs — with an Old City food walk."
      },
      royal: {
        name: "Royal Hyderabad",
        dur: "3D · 2N Premium",
        price: "₹16,499 per couple",
        img: "assets/images/chowmahalla-palace.jpg",
        line: "Palace circuit, private pearl guide and a candlelight Deccani dinner, 4-Star stay."
      },
      deccan: {
        name: "Grand Deccan Explorer",
        dur: "4D · 3N",
        price: "₹18,990 per couple",
        img: "assets/images/deccan-explorer.jpg",
        line: "Every icon plus a full Ramoji day, at a pace that leaves evenings free."
      },
      ramoji: {
        name: "Hyderabad + Ramoji Special",
        dur: "2 Days",
        price: "₹9,499 per couple",
        img: "assets/images/ramoji-film-city.jpg",
        line: "A full Ramoji Film City day with tickets handled, city highlights on day two."
      },
      food: {
        name: "Old City Food & Bazaar Walk",
        dur: "Half Day",
        price: "₹1,499 per person",
        img: "assets/images/hyderabadi-biryani.jpg",
        line: "Biryani, haleem and Irani chai at the places locals queue for."
      },
      weekend: {
        name: "Weekend Getaway Combo",
        dur: "3 Days",
        price: "₹14,999 per couple",
        img: "assets/images/ananthagiri-hills.jpg",
        line: "Two city days, then coffee-country air and a bonfire night in Ananthagiri."
      }
    };

    var sel = { days: "3", style: "Heritage", budget: "Comfort" };

    function recommend() {
      var d = sel.days, s = sel.style, isLong = d === "4" || d === "5+";
      if (s === "Film City") return isLong ? PKGS.deccan : PKGS.ramoji;
      if (s === "Food & Bazaars") return d === "1" ? PKGS.food : d === "2" ? PKGS.pearl : PKGS.nizami;
      if (s === "Family") return d === "1" ? PKGS.darshan : d === "2" ? PKGS.ramoji : isLong ? PKGS.deccan : PKGS.weekend;
      if (d === "1") return PKGS.darshan;
      if (d === "2") return PKGS.pearl;
      if (isLong) return PKGS.deccan;
      return sel.budget === "Premium" ? PKGS.royal : PKGS.nizami;
    }

    function renderBuilder() {
      var r = recommend();
      var nameEl = document.getElementById("rec-name");
      var metaEl = document.getElementById("rec-meta");
      var lineEl = document.getElementById("rec-line");
      var imgEl = document.getElementById("rec-img");
      var ctaEl = document.getElementById("rec-cta");

      if (nameEl) nameEl.textContent = r.name;
      if (metaEl) metaEl.textContent = r.dur + " · from " + r.price;
      if (lineEl) lineEl.textContent = r.line;
      if (imgEl) {
        imgEl.src = r.img.startsWith("assets/") ? r.img : ("https://images.unsplash.com/photo-" + r.img + "?auto=format&fit=crop&w=700&q=70");
        imgEl.alt = r.name;
      }
      if (ctaEl) {
        var msg = "Hi! I used the trip builder: " + sel.days + " day(s), " + sel.style + " style, " + sel.budget +
          " budget. You suggested the " + r.name + " (" + r.dur + "). Please share the plan and pricing.";
        ctaEl.href = "https://wa.me/" + WA + "?text=" + encodeURIComponent(msg);
      }
    }

    builder.querySelectorAll(".segs").forEach(function (group) {
      var key = group.dataset.key;
      group.querySelectorAll(".seg").forEach(function (btn) {
        btn.addEventListener("click", function () {
          group.querySelectorAll(".seg").forEach(function (b) { b.setAttribute("aria-pressed", "false"); });
          btn.setAttribute("aria-pressed", "true");
          sel[key] = btn.dataset.val;
          renderBuilder();
        });
      });
    });

    renderBuilder();
  }

  /* --------------------------------------------------------------------------
     7. Itinerary Road Path Animation (package-nizami-heritage.php)
     -------------------------------------------------------------------------- */
  var road = document.getElementById("roadpath");
  if (road) {
    var len = road.getTotalLength();
    road.style.strokeDasharray = len;
    if (reduced || !("IntersectionObserver" in window)) {
      road.style.strokeDashoffset = 0;
    } else {
      road.style.strokeDashoffset = len;
      road.style.transition = "stroke-dashoffset 1s ease";
      var days = document.querySelectorAll(".day");
      var maxSeen = 0;
      var roadObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var dayNum = parseInt(entry.target.dataset.day || "1", 10);
            maxSeen = Math.max(maxSeen, dayNum);
            road.style.strokeDashoffset = String(len * (1 - maxSeen / days.length));
            roadObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.25 });

      days.forEach(function (d) { roadObserver.observe(d); });
    }
  }

  /* --------------------------------------------------------------------------
     8. Lead Capture & WhatsApp Redirection Helpers
     -------------------------------------------------------------------------- */
  function val(id) {
    var el = document.getElementById(id);
    return el ? el.value.trim() : "";
  }

  function showErr(id, msg) {
    var e = document.getElementById(id);
    if (e) {
      e.textContent = msg || "";
      e.classList.toggle("show", !!msg);
    }
  }

  function postLead(data, callback) {
    try {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "api/enquiry.php", true);
      xhr.setRequestHeader("Content-Type", "application/json");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (callback) callback();
        }
      };
      xhr.send(JSON.stringify(data));
    } catch (err) {
      if (callback) callback();
    }
  }

  /* Package Sidebar Enquiry */
  var sideBtn = document.getElementById("enq-send");
  if (sideBtn) {
    sideBtn.addEventListener("click", function (e) {
      e.preventDefault();
      var name = val("enq-name");
      if (!name) {
        showErr("enq-err", "Please add your name so we know who's travelling.");
        return;
      }
      showErr("enq-err", "");

      var date = val("enq-date");
      var pax = val("enq-pax");
      var msg = "Hi! I'm " + name + ". I'm interested in the Nizami Heritage Trail (3D2N)." +
        (date ? " Travel date: " + date + "." : "") + " Travellers: " + pax + ". Please share details and pricing.";
      var waUrl = "https://wa.me/" + WA + "?text=" + encodeURIComponent(msg);

      postLead({
        name: name,
        travel_date: date,
        travellers: pax,
        package_name: "Nizami Heritage Trail (3D2N)",
        message: "Sent from package sidebar"
      }, function () {
        window.open(waUrl, "_blank");
      });
    });
  }

  /* Contact Page Enquiry Form */
  var cBtn = document.getElementById("c-send");
  if (cBtn) {
    cBtn.addEventListener("click", function (e) {
      e.preventDefault();
      var name = val("c-name");
      var phone = val("c-phone");

      if (!name) {
        showErr("c-err", "Please add your name.");
        return;
      }
      if (!/^[0-9+\s-]{10,14}$/.test(phone)) {
        showErr("c-err", "Please enter a valid 10-digit phone number.");
        return;
      }
      showErr("c-err", "");

      var date = val("c-date");
      var pkg = val("c-pkg");
      var pax = val("c-pax");
      var notes = val("c-msg");

      var text = "Hi! I'm " + name + " (" + phone + ").\nPackage: " + pkg + "\nTravellers: " + pax +
        (date ? "\nTravel date: " + date : "") + (notes ? "\nNotes: " + notes : "") +
        "\nPlease share details and pricing.";
      var waUrl = "https://wa.me/" + WA + "?text=" + encodeURIComponent(text);

      postLead({
        name: name,
        phone: phone,
        travel_date: date,
        package_name: pkg,
        travellers: pax,
        message: notes
      }, function () {
        window.open(waUrl, "_blank");
      });
    });
  }

})();
