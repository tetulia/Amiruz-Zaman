$(document).ready(function () {
    // Toggle button functionality
    $("#toggleButton").click(function () {
        $(".long-description").slideToggle(); // টেক্সট দেখাবে/লুকাবে
        if ($(this).text().trim() === "বিস্তারিত") {
            $(this).text("সংক্ষিপ্ত");
        } else {
            $(this).text("বিস্তারিত");
        }
    });
});

// ============ ডেটা কাউন্ট এর জন্য ============
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".fact-number");

    const options = {
        threshold: 0.5 // অন্তত ৫০% এলিমেন্ট ভিউপোর্টে আসলে শুরু হবে
    };

    const startCounting = (counter) => {
        const target = +counter.getAttribute("data-count");
        let count = 0;
        const speed = target / 100; // ধীরে ধীরে বাড়ানোর গতি

        const updateCount = () => {
            count += speed;
            if (count < target) {
                counter.innerText = Math.floor(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                startCounting(counter);
                observer.unobserve(counter); // একবার হওয়ার পর বন্ধ করবে
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });
});




// ============ Preloader ============
window.addEventListener("load", function () {
    setTimeout(function () {
        const preloader = document.querySelector(".preloader");
        if (preloader) preloader.style.display = "none";
    }, 1000);
});
