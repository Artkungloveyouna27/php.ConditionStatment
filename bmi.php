<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณค่า BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .result {
            font-size: 22px;
            font-weight: bold;
            margin: 15px 0;
            color: #2980b9;
        }

        .category {
            font-size: 18px;
            font-weight: normal;
            color: #27ae60;
        }

        .error {
            font-size: 18px;
            font-weight: normal;
            color: #e74c3c;
        }

        .back-link {
            margin-top: 20px;
            font-size: 16px;
            text-decoration: none;
            color: #2980b9;
            border: 1px solid #2980b9;
            padding: 8px 16px;
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #2980b9;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ผลลัพธ์การคำนวณค่า BMI</h1>

    <?php
    // รับค่าจากฟอร์ม
    $weight = isset($_POST['weight']) ? $_POST['weight'] : null;
    $height = isset($_POST['height']) ? $_POST['height'] : null;

    // ตรวจสอบว่ามีข้อมูลครบถ้วนหรือไม่
    if ($weight && $height) {
        // คำนวณ BMI
        $bmi = $weight / ($height * $height);

        echo "<p>น้ำหนัก: $weight kg</p>";
        echo "<p>ส่วนสูง: $height m</p>";
        echo "<p class='result'>BMI: " . number_format($bmi, 2) . "</p>";

        // การแปลผล BMI
        if ($bmi < 18.5) {
            echo "<p class='category'>ผลลัพธ์: น้ำหนักต่ำกว่าเกณฑ์</p>";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "<p class='category'>ผลลัพธ์: น้ำหนักปกติ</p>";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            echo "<p class='category'>ผลลัพธ์: น้ำหนักเกิน</p>";
        } else {
            echo "<p class='category'>ผลลัพธ์: อ้วน</p>";
        }
    } else {
        echo "<p class='error'>กรุณากรอกข้อมูลให้ครบถ้วน</p>";
    }
    ?>

    <a href="bmi_form.php" class="back-link">กลับไปหน้าคำนวณ BMI</a>
</div>

</body>
</html>
