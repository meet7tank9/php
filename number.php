<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number in php</title>
</head>
<body>
    <?php
        $x=10;
        echo (var_dump(is_int($x)))."<br>";//check int or not
        $x=10.22;
        echo (var_dump(is_int($x)))."<br>";//check int or not
        $x=10.22;
        echo (var_dump(is_float($x)))."<br>";//check float or not
        $x=10; 
        echo (var_dump(is_float($x)))."<br>";//check float or not
        $y=10215;
        echo (var_dump(is_numeric($y)))."<br>";//check numeric or not
        $z="32354599";
        echo (var_dump(is_numeric($z)))."<br>";//check numeric or not
        $z="hello";
        echo (var_dump(is_numeric($z)))."<br>";//check numeric or not
    ?>
</body>
</html>