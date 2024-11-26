<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ให้กรอกข้อมูลลงไปในฟอร๋อม</title>
</head>
<body>
    <h2>โปรดกรอกข้อมูลลงไปในฟอร์ม</h2>
    <form action="test_get.php" method = "get"> <br>
        ชื่อวิชา : <input type="text" name="subject"> <br>
        เว็บไซต์ที่แนะนำ : <input type="text" name="web"> <br>
        <input type="summit">
    </form>
    <br>
    <a href="test_get.php?subject=PHP&web=www.google.com">Click ที่นี่</a>
</body>
</html>