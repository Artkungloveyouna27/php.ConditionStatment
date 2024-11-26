<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณพื้นที่สามเหลี่ยม</title>
</head>
<body>
<h1>ผลลัพธ์การคำนวณพื้นที่สามเหลี่ยม</h1>

<?php
    $height = $_POST['height'];
    $width = $_POST['width'];
    $area = 0.5*$height*$width;
    echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height และมีความยาว $width</h3>";
    echo "<br><br>";
    echo "<h3>คำนวนพื้นที่ได้ $area ตารางหน่วย</h3>";
?>
</body>
</html>