<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr=array("red","green", "blue","yellow");
        foreach($arr as $value)
        {
            echo $value."<br>";
        }
        foreach ($arr as $key => $value) {
            echo $key ." : ".$value."<br>";
        }
    ?>
</body>
</html>