<?php
// ===== Function คำนวณ BMI =====
function calculateBMI($weight, $heightMeter) {
    return $weight / ($heightMeter * $heightMeter);
}

// ===== รับค่าจากฟอร์ม =====
$fullname   = $_POST['fullname'];
$birthdate  = $_POST['birthdate'];
$weight     = $_POST['weight'];
$height_cm  = $_POST['height'];

// ===== แปลงส่วนสูง cm → m =====
$height_m = $height_cm / 100;

// ===== คำนวณอายุ ปี / เดือน / วัน =====
$birth = new DateTime($birthdate);
$today = new DateTime();
$diff = $today->diff($birth);

$year  = $diff->y;
$month = $diff->m;
$day   = $diff->d;

// ===== คำนวณ BMI =====
$bmi = round(calculateBMI($weight, $height_m), 2);

// ===== แปลผล BMI =====
if ($bmi < 18.5) {
    $result = "น้ำหนักน้อย / ผอม";
    $advice = "ควรรับประทานอาหารให้ครบ 5 หมู่ และเพิ่มพลังงาน";
} elseif ($bmi < 23) {
    $result = "น้ำหนักปกติ";
    $advice = "สุขภาพดี ควรรักษาพฤติกรรมนี้ต่อไป";
} elseif ($bmi < 25) {
    $result = "น้ำหนักเกิน";
    $advice = "ควรควบคุมอาหารและออกกำลังกาย";
} elseif ($bmi < 30) {
    $result = "อ้วนระดับ 1";
    $advice = "มีความเสี่ยง ควรปรับพฤติกรรมการใช้ชีวิต";
} else {
    $result = "อ้วนระดับ 2";
    $advice = "ความเสี่ยงสูง ควรปรึกษาแพทย์";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ผลการคำนวณ BMI</title>

<style>
    body {
        font-family: Tahoma;
        background-color: #f2f2f2;
    }
    .container {
        width: 420px;
        margin: 40px auto;
        background: #ffffff;
        padding: 25px;
        border-radius: 6px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .row {
        margin-bottom: 8px;
    }
    .label {
        font-weight: bold;
    }
    .back {
        text-align: center;
        margin-top: 15px;
    }
</style>
</head>

<body>

<div class="container">
<h2>ผลการคำนวณ BMI</h2>

<div class="row"><span class="label">ชื่อ - สกุล :</span> <?= $fullname ?></div>
<div class="row"><span class="label">วันเกิด :</span> <?= $birthdate ?></div>
<div class="row"><span class="label">อายุ :</span> <?= $year ?> ปี <?= $month ?> เดือน <?= $day ?> วัน</div>
<div class="row"><span class="label">น้ำหนัก :</span> <?= $weight ?> กก.</div>
<div class="row"><span class="label">ส่วนสูง :</span> <?= $height_cm ?> ซม.</div>
<div class="row"><span class="label">ค่า BMI :</span> <?= $bmi ?></div>
<div class="row"><span class="label">แปลผล :</span> <?= $result ?></div>
<div class="row"><span class="label">คำแนะนำ :</span> <?= $advice ?></div>

<div class="back">
    <a href="bmi_form.php">← ย้อนกลับ</a>
</div>
</div>

</body>
</html>
