<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable</title>
</head>
<body>
    <?php
        $x=75;
        echo "ค่าของ x ==>".$x;
        echo "<br>";
        function myfunction(){
            //echo "อ่านจาก function ค่าของ x ==>".$GLOBALS['x']; 
            global $x; 
            $x = 35;
            echo "อ่านจาก finction ค่าของ ==>".$x;
        }
        myfunction();
        echo "<br>";
        echo "ค่าของ x ==>".$x;

        echo "<hr>";

        echo "<h2>การใช้ข้อมูลจาก Serverr ด้วย \$_SERVER</h2>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        //echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";

        echo "<hr>";
    ?>
    
</body>
</html>