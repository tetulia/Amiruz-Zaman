<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>বিদ্যালয় অগ্রগতি ড্যাশবোর্ড</title>
    <!-- Mobile Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- Venobox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.6/venobox.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css">



    <!-- Chart.js লাইব্রেরি লোড করা -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <!-- Chart.js Data Label প্লাগইন -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <style>
        
        .chart-container { 
            width: 90%; 
            margin: 20px auto; 
            background: white;
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }

        h1, h2 { text-align: center; color: #333; }
        #month-buttons {
            text-align: center;
            margin-bottom: 20px;
        }
        #month-buttons button {
            padding: 8px 15px;
            margin: 2px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: #eee;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        #month-buttons button.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <h1>বিদ্যালয় পারফরম্যান্স ড্যাশবোর্ড</h1>

    <!-- মাস বাটন কনটেইনার -->
    <div id="month-buttons">
        <!-- বাটনগুলো JavaScript দ্বারা তৈরি হবে -->
    </div>

    <!-- ১. বার চার্ট কনটেইনার -->
    <div class="chart-container">
        <h2 id="bar-chart-title">শ্রেণিভিত্তিক মাসিক অগ্রগতি</h2>
        <canvas id="performanceBarChart"></canvas>
    </div>

    <!-- ২. লাইন চার্ট কনটেইনার -->
    <div class="chart-container">
        <h2>বিদ্যালয়ের মাসিক সামগ্রিক অগ্রগতি</h2>
        <canvas id="progressLineChart"></canvas>
    </div>

    <script>
        // গ্লোবাল ভেরিয়েবল
        let barChart;
        const MONTHS = ['জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];
        const colors = {
            'ভালো': 'rgba(75, 192, 192, 0.8)', // সবুজ
            'মধ্যম': 'rgba(255, 206, 86, 0.8)', // হলুদ
            'খারাপ': 'rgba(255, 99, 132, 0.8)'  // লাল
        };

        Chart.register(ChartDataLabels);

        // ফিক্স ১: বার চার্ট তৈরি এবং আপডেট করার জন্য ফাংশন
        function createOrUpdateBarChart(data) {
            const ctx = document.getElementById('performanceBarChart').getContext('2d');
            
            // datasets-এ রং যুক্ত করা
            const datasets = data.datasets.map(dataset => ({
                ...dataset,
                backgroundColor: colors[dataset.label],
                stack: 'Stack 0' // স্ট্যাকড বার চার্টের জন্য
            }));

            // যদি চার্ট ইতিমধ্যে বিদ্যমান থাকে, শুধু ডেটা আপডেট করুন
            if (barChart) {
                barChart.data.labels = data.labels;
                barChart.data.datasets = datasets;
                barChart.update();
            } else {
                // নতুন চার্ট তৈরি করুন
                barChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.labels,
                        datasets: datasets
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: { stacked: true },
                            y: {
                                stacked: true,
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'শিক্ষার্থীর শ্রেণি ওয়ারি সংখ্যা' // বাম পাশের Y এক্সিস
                                }
                            }
                        },
                        plugins: {
                            title: { display: false },
                            datalabels: {
                                color: '#000',
                                formatter: (value, context) => {
                                    return value > 0 ? value : ''; 
                                }
                            },
                            tooltip: { mode: 'index', intersect: false }
                        }
                    }
                });
            }
        }

        // ফিক্স ২: মাস বাটন তৈরি এবং ইভেন্ট হ্যান্ডলার
        function createMonthButtons(latestMonthName) {
            const container = document.getElementById('month-buttons');
            container.innerHTML = '';
            
            // সর্বশেষ আপডেট হওয়া মাস খুঁজে বের করা
            const latestIndex = MONTHS.indexOf(latestMonthName);

            MONTHS.forEach((month, index) => {
                const button = document.createElement('button');
                button.innerText = month;
                button.setAttribute('data-month-index', index);
                
                // শুধুমাত্র আপডেট হওয়া মাসগুলো ক্লিকযোগ্য হবে
                if (index <= latestIndex) {
                    button.onclick = () => switchBarChartData(index);
                    if (month === latestMonthName) {
                        button.classList.add('active');
                    }
                } else {
                    // এখনো ডেটা আপডেট হয়নি এমন মাসের জন্য বাটন নিষ্ক্রিয় রাখা
                    button.disabled = true;
                    button.title = "এই মাসের তথ্য এখনো আপডেট হয়নি";
                }
                
                container.appendChild(button);
            });
        }
        
        // বাটন ক্লিক হলে ডেটা লোড করার ফাংশন
        async function switchBarChartData(monthIndex) {
            try {
                // বাটন অ্যাকটিভ ক্লাস আপডেট করা
                document.querySelectorAll('#month-buttons button').forEach(btn => {
                    btn.classList.remove('active');
                    if (parseInt(btn.getAttribute('data-month-index')) === monthIndex) {
                        btn.classList.add('active');
                    }
                });
                
                // শুধুমাত্র বার চার্ট ডেটার জন্য রিকোয়েস্ট করা
                const response = await fetch(`data_processor.php?month_index=${monthIndex}`);
                const data = await response.json();
                
                // টাইটেল আপডেট করা
                document.getElementById('bar-chart-title').innerText = 
                    `শ্রেণিভিত্তিক পারফরম্যান্স (${data.latest_month} মাসের)`; 
                
                createOrUpdateBarChart(data.bar_data);

            } catch (error) {
                console.error("Error switching month data:", error);
            }
        }


        // লাইন চার্ট তৈরির ফাংশন (কোনো পরিবর্তন নেই, শুধুমাত্র ডেটা সেট কালার ফিক্সড)
        function createLineChart(data) {
            const ctx = document.getElementById('progressLineChart').getContext('2d');
            
            const datasets = data.datasets.map(dataset => ({
                ...dataset,
                borderColor: colors[dataset.label].replace(', 0.8', ''), // Line color
                backgroundColor: colors[dataset.label].replace(', 0.8', '') + '33', // Lighter fill color
                fill: false,
                tension: 0.4,
                pointRadius: 5
            }));

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.labels,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    interaction: { mode: 'index', intersect: false },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: { display: true, text: 'মোট শিক্ষার্থীর সংখ্যা' }
                        }
                    },
                    plugins: {
                        title: { display: true, text: 'স্কুল-ব্যাপী মাসিক পারফরম্যান্স প্রবণতা' },
                        datalabels: { display: false }
                    }
                }
            });
        }

        // পেজ লোড হওয়ার পর ডেটা লোড করা
        async function loadChartData() {
            try {
                // প্রথমবার লোড করার সময়, ডিফল্ট (সর্বশেষ মাস) ডেটা লোড করা হবে
                const response = await fetch('data_processor.php');
                const data = await response.json();

                const barData = data.bar_data;
                const lineData = data.line_data;
                const latestMonth = data.latest_month;

                // মাস বাটন তৈরি করা (যা ডিফল্ট মাস হাইলাইট করবে)
                createMonthButtons(latestMonth);

                // টাইটেল সেট করা
                document.getElementById('bar-chart-title').innerText = 
                    `শ্রেণিভিত্তিক পারফরম্যান্স (${latestMonth} মাসের)`; // latestMonth ভেরিয়েবলটি যুক্ত করা হয়েছে।

                // বার চার্ট তৈরি
                createOrUpdateBarChart(barData);

                // লাইন চার্ট তৈরি
                createLineChart(lineData);

            } catch (error) {
                console.error("Error loading initial data:", error);
                document.body.innerHTML = "<h1>ডেটা লোড করতে সমস্যা হয়েছে। অনুগ্রহ করে PHP ফাইল সিনট্যাক্স এবং সার্ভার কনফিগারেশন চেক করুন।</h1>";
            }
        }

        loadChartData();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>