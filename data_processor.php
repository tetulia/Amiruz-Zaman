<?php
// require_once ব্যবহার করা ভালো, কারণ ডেটা ছাড়া স্ক্রিপ্ট চলবে না
include 'data_students.php'; 

// ডেটা প্রসেসিং লজিককে একটি ফাংশনের মধ্যে রাখা হয়েছে
function process_data($all_students_data, $months, $target_month_index = null) {
    $performance_keys = ['খারাপ', 'মধ্যম', 'ভালো'];

    // যদি target_month_index নির্দিষ্ট না থাকে (অর্থাৎ ডিফল্ট কল)
    if ($target_month_index === null) {
        $target_month_index = 0;
        if (!empty($all_students_data)) {
            $first_student_history = explode(',', $all_students_data[0]['performance_history']);
            // পেছন দিক থেকে চেক করে সর্বশেষ আপডেট হওয়া মাস খুঁজে বের করা
            for ($i = count($first_student_history) - 1; $i >= 0; $i--) {
                if (trim($first_student_history[$i]) !== '-') {
                    $target_month_index = $i;
                    break;
                }
            }
        }
    }
    
    $target_month_name = $months[$target_month_index];

    // ১. বার চার্টের জন্য ডেটা প্রসেস করা (ক্লাস অনুযায়ী পারফরম্যান্স)
    $bar_chart_data = [];
    foreach ($all_students_data as $student) {
        // 'অন্যত্র গমন' শিক্ষার্থীদের বাদ দেওয়া 
        if (isset($student['attendance']) && $student['attendance'] === 'অন্যত্র গমন') {
            continue;
        }

        $class = $student['class'];
        $history_array = array_map('trim', explode(',', $student['performance_history'])); // ট্রিম যোগ করা হয়েছে
        
        if (!isset($bar_chart_data[$class])) {
            $bar_chart_data[$class] = ['ভালো' => 0, 'মধ্যম' => 0, 'খারাপ' => 0];
        }

        // টার্গেট মাসের পারফরম্যান্স বের করা
        if (isset($history_array[$target_month_index])) {
            $performance = $history_array[$target_month_index];

            if (in_array($performance, $performance_keys)) {
                $bar_chart_data[$class][$performance]++;
            }
        }
    }

    // ২. বার চার্ট ফরম্যাট
    $final_bar_data = [
        'labels' => array_keys($bar_chart_data),
        'datasets' => [
            [
                'label' => 'ভালো',
                'data' => array_map(function($class_data) { return $class_data['ভালো']; }, $bar_chart_data),
            ],
            [
                'label' => 'মধ্যম',
                'data' => array_map(function($class_data) { return $class_data['মধ্যম']; }, $bar_chart_data),
            ],
            [
                'label' => 'খারাপ',
                'data' => array_map(function($class_data) { return $class_data['খারাপ']; }, $bar_chart_data),
            ]
        ],
        'target_month' => $target_month_name
    ];


    // ৩. লাইন চার্ট ডেটা (শুধু একবার তৈরি হবে, কারণ এটি সামগ্রিক অগ্রগতি)
    $line_chart_data = [];
    foreach ($months as $month_name) {
        $line_chart_data[$month_name] = ['ভালো' => 0, 'মধ্যম' => 0, 'খারাপ' => 0];
    }

    foreach ($all_students_data as $student) {
        if (isset($student['attendance']) && $student['attendance'] === 'অন্যত্র গমন') {
            continue;
        }
        $history_array = array_map('trim', explode(',', $student['performance_history']));

        foreach ($history_array as $month_idx => $performance) {
            if ($performance === '-') continue; 
            
            if (isset($months[$month_idx]) && in_array($performance, $performance_keys)) {
                $month_name = $months[$month_idx];
                $line_chart_data[$month_name][$performance]++;
            }
        }
    }
    
    // লাইন চার্ট ফরম্যাট
    $line_chart_labels = [];
    $good_data = [];
    $medium_data = [];
    $bad_data = [];

    // শুধুমাত্র আপডেট হওয়া মাসগুলো চার্টে দেখানো
    foreach ($line_chart_data as $month => $data) {
        if ($data['ভালো'] > 0 || $data['মধ্যম'] > 0 || $data['খারাপ'] > 0) {
            $line_chart_labels[] = $month;
            $good_data[] = $data['ভালো'];
            $medium_data[] = $data['মধ্যম'];
            $bad_data[] = $data['খারাপ'];
        }
    }

    $final_line_data = [
        'labels' => $line_chart_labels,
        'datasets' => [
            ['label' => 'ভালো', 'data' => $good_data, 'borderColor' => 'rgba(59, 197, 70, 1)'],
            ['label' => 'মধ্যম', 'data' => $medium_data, 'borderColor' => 'rgba(247, 194, 62, 1)'],
            ['label' => 'খারাপ', 'data' => $bad_data, 'borderColor' => 'rgba(252, 70, 85, 1)']
        ]
    ];

    return [
        'bar_data' => $final_bar_data,
        'line_data' => $final_line_data,
        'latest_month' => $months[$target_month_index],
        'available_months' => $months
    ];
}

// চেক করা হচ্ছে যে GET রিকোয়েস্ট এসেছে কিনা
if (isset($_GET['month_index']) && is_numeric($_GET['month_index'])) {
    $month_index = (int)$_GET['month_index'];
    $data = process_data($all_students_data, $months, $month_index);
    
    // যখন শুধু মাস পরিবর্তন হবে, তখন শুধু বার ডেটা পাঠানো হবে
    header('Content-Type: application/json');
    echo json_encode(['bar_data' => $data['bar_data'], 'latest_month' => $data['latest_month']]);
    exit;

} else {
    // ডিফল্ট ডেটা লোড করা (সর্বশেষ আপডেট হওয়া মাসের জন্য)
    $data = process_data($all_students_data, $months);

    // প্রথমবার পেজ লোড করার জন্য সমস্ত ডেটা পাঠানো
    header('Content-Type: application/json');
    echo json_encode($data);
}
?>