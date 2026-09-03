/* TourHyderabad.in — main.js */
(function(){
"use strict";
var WA = "919652972699";
var reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

/* sticky header shadow */
var head = document.querySelector(".site-head");
if (head) {
  var onScroll = function(){ head.classList.toggle("scrolled", window.scrollY > 8); };
  window.addEventListener("scroll", onScroll, {passive:true}); onScroll();
}

/* hero entrance */
document.documentElement.classList.add("anim");

/* scroll reveal */
if (!reduced && "IntersectionObserver" in window) {
  var els = document.querySelectorAll("[data-reveal]");
  var io = new IntersectionObserver(function(es){
    es.forEach(function(e){ if (e.isIntersecting){ e.target.classList.add("in"); io.unobserve(e.target); } });
  }, {threshold:.12});
  els.forEach(function(el){
    if (el.getBoundingClientRect().top < window.innerHeight) return;
    el.classList.add("rv");
    io.observe(el);
  });
}

/* FAQ accordion */
document.querySelectorAll(".faq-item").forEach(function(item){
  var q = item.querySelector(".faq-q");
  q.addEventListener("click", function(){
    var open = item.classList.contains("open");
    item.parentElement.querySelectorAll(".faq-item.open").forEach(function(o){
      o.classList.remove("open"); o.querySelector(".faq-q").setAttribute("aria-expanded","false");
    });
    if (!open){ item.classList.add("open"); q.setAttribute("aria-expanded","true"); }
  });
});

/* package filter */
var grid = document.getElementById("pkg-grid");
if (grid) {
  document.querySelectorAll(".filters .seg").forEach(function(btn){
    btn.addEventListener("click", function(){
      document.querySelectorAll(".filters .seg").forEach(function(b){ b.setAttribute("aria-pressed","false"); });
      btn.setAttribute("aria-pressed","true");
      var f = btn.dataset.filter;
      grid.querySelectorAll(".ticket").forEach(function(card){
        var cats = (card.dataset.cat || "").split("|");
        var show = f === "All" || cats.indexOf(f) !== -1;
        card.style.display = show ? "" : "none";
        if (show && !reduced){ card.style.opacity = "0"; requestAnimationFrame(function(){ card.style.transition = "opacity .35s"; card.style.opacity = "1"; }); }
      });
    });
  });
}

/* trip builder */
var builder = document.getElementById("trip-builder");
if (builder) {
  var PKGS = {
    darshan:{name:"Hyderabad City Darshan",dur:"1 Day",price:"\u20B92,999",img:"1551161242-b5af797b7233",line:"Charminar, Golconda and Salar Jung in one unhurried loop, with a local driver-guide."},
    pearl:{name:"Pearl City Express",dur:"2D \u00B7 1N",price:"\u20B98,999 per couple",img:"1596176530529-78163a4f7af2",line:"Old City heritage by day, Hussain Sagar and Tank Bund lights by night."},
    nizami:{name:"Nizami Heritage Trail",dur:"3D \u00B7 2N",price:"\u20B912,999 per couple",img:"1621909321963-2276c9660298",line:"The full Nizami circuit \u2014 palaces, forts, tombs \u2014 with an Old City food walk."},
    royal:{name:"Royal Hyderabad",dur:"3D \u00B7 2N Premium",price:"\u20B916,499 per couple",img:"1590766940554-634a7ed41450",line:"Palace circuit, private pearl guide and a candlelight Deccani dinner, 4\u2605 stay."},
    deccan:{name:"Grand Deccan Explorer",dur:"4D \u00B7 3N",price:"\u20B918,990 per couple",img:"1599661046289-e31897846e41",line:"Every icon plus a full Ramoji day, at a pace that leaves evenings free."},
    ramoji:{name:"Hyderabad + Ramoji Special",dur:"2 Days",price:"\u20B99,499 per couple",img:"1518676590629-3dcbd9c5a5c9",line:"A full Ramoji Film City day with tickets handled, city highlights on day two."},
    food:{name:"Old City Food & Bazaar Walk",dur:"Half Day",price:"\u20B91,499 per person",img:"1642821373181-696a54913e93",line:"Biryani, haleem and Irani chai at the places locals queue for."},
    weekend:{name:"Weekend Getaway Combo",dur:"3 Days",price:"\u20B914,999 per couple",img:"1610555356070-d0efb6505f81",line:"Two city days, then coffee-country air and a bonfire night in Ananthagiri."}
  };
  var sel = {days:"3", style:"Heritage", budget:"Comfort"};
  function recommend(){
    var d = sel.days, s = sel.style, long = d === "4" || d === "5+";
    if (s === "Film City") return long ? PKGS.deccan : PKGS.ramoji;
    if (s === "Food & Bazaars") return d === "1" ? PKGS.food : d === "2" ? PKGS.pearl : PKGS.nizami;
    if (s === "Family") return d === "1" ? PKGS.darshan : d === "2" ? PKGS.ramoji : long ? PKGS.deccan : PKGS.weekend;
    if (d === "1") return PKGS.darshan;
    if (d === "2") return PKGS.pearl;
    if (long) return PKGS.deccan;
    return sel.budget === "Premium" ? PKGS.royal : PKGS.nizami;
  }
  function render(){
    var r = recommend();
    document.getElementById("rec-name").textContent = r.name;
    document.getElementById("rec-meta").textContent = r.dur + " \u00B7 from " + r.price;
    document.getElementById("rec-line").textContent = r.line;
    var img = document.getElementById("rec-img");
    img.src = "https://images.unsplash.com/photo-" + r.img + "?auto=format&fit=crop&w=700&q=70";
    img.alt = r.name;
    var msg = "Hi! I used the trip builder: " + sel.days + " day(s), " + sel.style + " style, " + sel.budget +
      " budget. You suggested the " + r.name + " (" + r.dur + "). Please share the plan and pricing.";
    document.getElementById("rec-cta").href = "https://wa.me/" + WA + "?text=" + encodeURIComponent(msg);
  }
  builder.querySelectorAll(".segs").forEach(function(group){
    group.querySelectorAll(".seg").forEach(function(btn){
      btn.addEventListener("click", function(){
        group.querySelectorAll(".seg").forEach(function(b){ b.setAttribute("aria-pressed","false"); });
        btn.setAttribute("aria-pressed","true");
        sel[group.dataset.key] = btn.dataset.val;
        render();
      });
    });
  });
  render();
}

/* WhatsApp enquiry forms */
function val(id){ var el = document.getElementById(id); return el ? el.value.trim() : ""; }
function showErr(id, msg){ var e = document.getElementById(id); if (e){ e.textContent = msg || ""; e.classList.toggle("show", !!msg); } }

var sideBtn = document.getElementById("enq-send");
if (sideBtn) sideBtn.addEventListener("click", function(){
  var name = val("enq-name");
  if (!name){ showErr("enq-err", "Please add your name so we know who's travelling."); return; }
  showErr("enq-err");
  var date = val("enq-date"), pax = val("enq-pax");
  var msg = "Hi! I'm " + name + ". I'm interested in the Nizami Heritage Trail (3D2N)." +
    (date ? " Travel date: " + date + "." : "") + " Travellers: " + pax + ". Please share details and pricing.";
  window.open("https://wa.me/" + WA + "?text=" + encodeURIComponent(msg), "_blank");
});

var cBtn = document.getElementById("c-send");
if (cBtn) cBtn.addEventListener("click", function(){
  var name = val("c-name"), phone = val("c-phone");
  if (!name){ showErr("c-err", "Please add your name."); return; }
  if (!/^[0-9+\s-]{10,14}$/.test(phone)){ showErr("c-err", "Please enter a valid 10-digit phone number."); return; }
  showErr("c-err");
  var text = "Hi! I'm " + name + " (" + phone + ").\nPackage: " + val("c-pkg") + "\nTravellers: " + val("c-pax") +
    (val("c-date") ? "\nTravel date: " + val("c-date") : "") + (val("c-msg") ? "\nNotes: " + val("c-msg") : "") +
    "\nPlease share details and pricing.";
  window.open("https://wa.me/" + WA + "?text=" + encodeURIComponent(text), "_blank");
});

/* itinerary road draw */
var road = document.getElementById("roadpath");
if (road) {
  var len = road.getTotalLength();
  road.style.strokeDasharray = len;
  if (reduced || !("IntersectionObserver" in window)) { road.style.strokeDashoffset = 0; }
  else {
    road.style.strokeDashoffset = len;
    road.style.transition = "stroke-dashoffset 1s ease";
    var days = document.querySelectorAll(".day");
    var seen = 0;
    var dio = new IntersectionObserver(function(es){
      es.forEach(function(e){
        if (e.isIntersecting){
          seen = Math.max(seen, +e.target.dataset.day);
          road.style.strokeDashoffset = String(len * (1 - seen / days.length));
          dio.unobserve(e.target);
        }
      });
    }, {threshold:.25});
    days.forEach(function(d){ dio.observe(d); });
  }
}
})();