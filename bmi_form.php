<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่า BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #FF5733, #FFBD33, #75FF33, #33FF57, #33B5FF, #5733FF, #FF33A6);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 30px;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            background: linear-gradient(to left, #FF5733, #FFBD33, #75FF33, #33FF57, #33B5FF, #5733FF, #FF33A6);
            -webkit-background-clip: text;
            color: transparent;
        }

        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
            display: block;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #FF5733;
        }

        input[type="submit"], input[type="reset"] {
            background: linear-gradient(45deg, #FF5733, #33FF57);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 48%;
            margin: 10px 1%;
            transition: background 0.3s ease-in-out;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background: linear-gradient(45deg, #33B5FF, #FF33A6);
        }

        .reset-btn {
            background: linear-gradient(45deg, #FFBD33, #75FF33);
        }

        .reset-btn:hover {
            background: linear-gradient(45deg, #FF5733, #33FF57);
        }

        .form-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>คำนวณค่า BMI</h1>

    <form action="bmi.php" method="POST">
        <label for="weight">น้ำหนัก (kg)</label>
        <input type="text" name="weight" id="weight" required> 

        <label for="height">ส่วนสูง (m)</label>
        <input type="text" name="height" id="height" required> 

        <input type="submit" value="คำนวณ BMI">
        <input type="reset" value="รีเซ็ต" class="reset-btn">
    </form>
    
    <div class="form-footer">
        <p>กรุณากรอกข้อมูลที่ถูกต้องสำหรับการคำนวณค่า BMI</p>
    </div>
</div>

</body>
</html>
