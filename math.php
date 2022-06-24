<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
</head>
<body>
    <?php
        echo ("pi : ".pi());
        echo ("<br>min : ".min(10,50,30,20,80,90));
        echo ("<br>max: ".max(10,20,50,90,70,60,30,50));
        echo ("<br>abs : ".abs(-6.27));

        echo ("<br>square root : ".sqrt(64));

        echo ("<br>power : ");
        echo ("<br>round : ".round(0.77));
        echo ("<br>round : ".round(0.49));

        echo ("<br>random : ".rand());
    ?>
</body>
</html>