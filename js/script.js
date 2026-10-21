// Preloader Handler (নিরাপদ চেকসহ, যাতে প্রিলোডার না থাকলে কোনো কনসোল এরর না আসে)
window.addEventListener("load", function () {
  setTimeout(function () {
    const preloader = document.querySelector(".preloader");
    if (preloader) {
      preloader.style.display = "none";
    }
  }, 1000);
});

// Smart Fixed Header Implementation
function initSmartHeader() {
  const header = document.querySelector(".header");
  const topHeader = document.querySelector(".top-header");

  if (!header) return;

  // বডির প্যাডিং ঠিক করা যাতে কনটেন্ট হেডারের নিচে নিখুঁতভাবে শুরু হয় (কোনো বাড়তি গ্যাপ ছাড়া)
  function updateBodySpacing() {
    const headerHeight = header.offsetHeight;
    document.body.style.paddingTop = headerHeight + "px";
  }

  // পেজ লোড ও উইন্ডো রিসাইজ হলে স্পেসিং আপডেট করা
  updateBodySpacing();
  window.addEventListener("resize", updateBodySpacing);

  let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
  let ticking = false;

  window.addEventListener("scroll", function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        const currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
        const topHeaderHeight = topHeader ? topHeader.offsetHeight : 0;
        const navbarCollapse = document.querySelector(".navbar-collapse");
        const isMenuOpen = navbarCollapse && navbarCollapse.classList.contains("show");

        // স্ক্রল একেবারে উপরে থাকলে সবসময় পুরো হেডার দেখাও
        if (currentScrollY <= 10) {
          header.style.transform = "translateY(0)";
        }
        // মোবাইল মেনু খোলা থাকলে হেডার লুকিয়ে যাবে না
        else if (isMenuOpen) {
          header.style.transform = "translateY(0)";
        }
        // নিচের দিকে স্ক্রল করলে টপ-হেডার লুকিয়ে যাবে এবং ন্যাভবার উপরে আটকে থাকবে
        else if (currentScrollY > topHeaderHeight && currentScrollY > lastScrollY) {
          header.style.transform = `translateY(-${topHeaderHeight}px)`;
        }
        // উপরের দিকে স্ক্রল করলে পুরো হেডার আবার ভেসে উঠবে
        else if (currentScrollY < lastScrollY) {
          header.style.transform = "translateY(0)";
        }

        lastScrollY = Math.max(0, currentScrollY);
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
}

// DOM প্রস্তুত হওয়া মাত্র এবং সমস্ত রিসোর্স লোড হওয়ার পর স্পেসিং ও হেডার সচল করা
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initSmartHeader);
} else {
  initSmartHeader();
}

window.addEventListener("load", function () {
  const header = document.querySelector(".header");
  if (header) {
    document.body.style.paddingTop = header.offsetHeight + "px";
  }
});



