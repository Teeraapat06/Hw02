<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>คำนวณดัชนีมวลกาย (BMI)</title>

<style>
    body {
        font-family: Tahoma;
        background-color: #f2f2f2;
    }
    .container {
        width: 360px;
        margin: 50px auto;
        background: #ffffff;
        padding: 25px;
        border-radius: 6px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input {
        width: 100%;
        padding: 6px;
        margin-top: 5px;
    }
    .btn {
        margin-top: 15px;
        text-align: center;
    }
    input[type=submit], input[type=reset] {
        width: 100px;
        padding: 6px;
        margin: 5px;
    }
</style>
</head>

<body>

<div class="container">
<h2>คำนวณ BMI</h2>

<form method="post" action="bmi_result.php">

    <label>ชื่อ - สกุล</label>
    <input type="text" name="fullname" required>

    <label>วันเกิด</label>
    <input type="date" name="birthdate" required>

    <label>น้ำหนัก (กิโลกรัม)</label>
    <input type="number" step="0.1" name="weight" required>

    <label>ส่วนสูง (เซนติเมตร)</label>
    <input type="number" step="0.1" name="height" required>

    <div class="btn">
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </div>

</form>
</div>

</body>
</html>
