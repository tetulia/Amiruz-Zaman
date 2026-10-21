<?php
$pageTitle = "অগ্রগতি ও ফলাফল";
include 'includes/header.php';
?>

<!-- Banner -->
<div class="py-5" style="background: var(--primary-gradient); color: #fff; text-align: center;">
  <div class="container">
    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">একাডেমিক পারফরম্যান্স</span>
    <h1 class="display-5 fw-bold mb-2">বিদ্যালয়ের শিক্ষাগত অগ্রগতি ও ফলাফল</h1>
    <p class="lead opacity-90 mb-0">শিক্ষার্থীদের মেধা বিকাশ, ধারাবাহিক মূল্যায়ন ও বার্ষিক পরীক্ষার সাফল্য চিত্র</p>
  </div>
</div>

<section class="section-padding">
  <div class="container">
    <!-- Key Metric Badges -->
    <div class="row g-4 mb-5">
      <div class="col-lg-3 col-6">
        <div class="p-4 rounded-4 shadow-sm border text-center" style="background: var(--bg-surface);">
          <span class="text-success fs-1 d-block mb-2"><i class="ti-cup"></i></span>
          <h3 class="fw-bold mb-1 num">১০০%</h3>
          <p class="text-muted small mb-0">বার্ষিক সমাপনী পাসের হার</p>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="p-4 rounded-4 shadow-sm border text-center" style="background: var(--bg-surface);">
          <span class="text-warning fs-1 d-block mb-2"><i class="ti-medall-alt"></i></span>
          <h3 class="fw-bold mb-1 num">২৮ জন</h3>
          <p class="text-muted small mb-0">জিপিএ ৫.০০ / এ+ প্রাপ্তি</p>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="p-4 rounded-4 shadow-sm border text-center" style="background: var(--bg-surface);">
          <span class="text-primary fs-1 d-block mb-2"><i class="ti-star"></i></span>
          <h3 class="fw-bold mb-1 num">০৪ জন</h3>
          <p class="text-muted small mb-0">উপজেলা পর্যায়ে মেধা বৃত্তি</p>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="p-4 rounded-4 shadow-sm border text-center" style="background: var(--bg-surface);">
          <span class="text-info fs-1 d-block mb-2"><i class="ti-check-box"></i></span>
          <h3 class="fw-bold mb-1 num">৯৪.৮%</h3>
          <p class="text-muted small mb-0">গড় ছাত্র-ছাত্রী উপস্থিতি</p>
        </div>
      </div>
    </div>

    <!-- Chart.js Section -->
    <div class="row g-4">
      <div class="col-lg-7">
        <div class="p-4 rounded-4 shadow-sm border h-100" style="background: var(--bg-surface);">
          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
              <h4 class="fw-bold mb-1">শ্রেণিভিত্তিক মাসিক অগ্রগতি মূল্যায়ন</h4>
              <p class="text-muted small mb-0">ধারাবাহিক মূল্যায়নে শিক্ষার্থীদের পারফরম্যান্স সূচক</p>
            </div>
            <div>
              <select id="monthSelect" class="form-select form-select-sm rounded-pill px-3">
                <option value="0">জানুয়ারি</option>
                <option value="1">ফেব্রুয়ারি</option>
                <option value="2">মার্চ</option>
                <option value="3">এপ্রিল</option>
                <option value="4">মে</option>
                <option value="5">জুন</option>
                <option value="6" selected>জুলাই</option>
                <option value="7">আগস্ট</option>
                <option value="8">সেপ্টেম্বর</option>
              </select>
            </div>
          </div>
          <div style="height: 320px;">
            <canvas id="performanceChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="p-4 rounded-4 shadow-sm border h-100" style="background: var(--bg-surface);">
          <h4 class="fw-bold mb-1">মাসিক সামগ্রিক অগ্রগতির ধারা</h4>
          <p class="text-muted small mb-4">বিদ্যালয়ের সার্বিক অর্জনের গড় রেখাচিত্র</p>
          <div style="height: 320px;">
            <canvas id="overallLineChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Chart.js Script CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const ctxBar = document.getElementById('performanceChart')?.getContext('2d');
  const ctxLine = document.getElementById('overallLineChart')?.getContext('2d');

  if (ctxBar) {
    const barChart = new Chart(ctxBar, {
      type: 'bar',
      data: {
        labels: ['প্রাক-প্রাথমিক', '১ম শ্রেণি', '২য় শ্রেণি', '৩য় শ্রেণি', '৪র্থ শ্রেণি', '৫ম শ্রেণি'],
        datasets: [
          {
            label: 'সন্তোষজনক (ভালো)',
            data: [22, 26, 24, 30, 28, 35],
            backgroundColor: '#10b981',
            borderRadius: 6
          },
          {
            label: 'মধ্যম মানের',
            data: [8, 7, 6, 8, 5, 8],
            backgroundColor: '#f59e0b',
            borderRadius: 6
          },
          {
            label: 'বিশেষ যত্ন প্রয়োজন',
            data: [2, 2, 3, 4, 3, 2],
            backgroundColor: '#ef4444',
            borderRadius: 6
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'bottom' }
        },
        scales: {
          x: { stacked: true },
          y: { stacked: true, beginAtZero: true }
        }
      }
    });

    document.getElementById('monthSelect')?.addEventListener('change', function(e) {
      // Simulate dynamic change on select
      const factor = (parseInt(e.target.value) % 3) + 1;
      barChart.data.datasets[0].data = [20 + factor, 25 + factor, 22 + factor, 28 + factor, 26 + factor, 32 + factor];
      barChart.update();
    });
  }

  if (ctxLine) {
    new Chart(ctxLine, {
      type: 'line',
      data: {
        labels: ['জানু', 'ফেব্রু', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই'],
        datasets: [{
          label: 'সামগ্রিক অগ্রগতি সূচক (%)',
          data: [82, 85, 87, 88, 91, 93, 95],
          borderColor: '#0a5236',
          backgroundColor: 'rgba(10, 82, 54, 0.1)',
          fill: true,
          tension: 0.35,
          pointRadius: 5,
          pointBackgroundColor: '#d97706'
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'bottom' }
        },
        scales: {
          y: { min: 70, max: 100 }
        }
      }
    });
  }
});
</script>

<?php include 'includes/footer.php'; ?>
