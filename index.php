<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้าคำสั่งแบบ Condition (กลุ่มคำสั่ง if)</h1>
    <?php
        echo "<h2>คำสั่ง if </h2>";
        $x = 5;
        $y = 8;
        echo "\$x = $x", "<br>";
        echo "\$y = $y";
        if($x<$y) {
            echo "<br><br>ค่าในตัวแปร ป น้อยกว่าค่าในตัวแปร y <br>";

        }
        else{
            echo "<br><br>ค่าในตัวแปร y น้อยกว่าค่าในตัวแปร x <br>";
        }
        echo "----------------------------------------------------------";

        echo "<h2>Short Hand if</h2>";
        $score = 55; 
        if ($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน";
        echo "<br>";
        $result = $score >=50 ? "ได้เกรด P" : "ได้เกรด F";
        echo "<br>";
        echo "ผลการเรียนของคุณ". $result;
        echo "<br>";
        echo "--------------------------------------------------------------";

        echo "<h2>Switch Case</h2>";
        echo "<br>";
        $pet = 'Cat';
        switch ($pet) {
            case 'Cat':
                echo "คุณชอบนอนเหมือนแมว";
                break;
            case 'Dog':
                echo "คูรชอบทำเหมือนสุนัข";
                break;
            case 'Bird':
                echo "คุณพูดมากเหมือนนก";
                break;    
            default;
                echo "คุณเป็นมนุษย์ Introvert<br>";
                break;
        
        }
        echo "<br>";
        echo "-------------------------------------------------";
    ?>                

</body>
</html>