<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else in php</title>
</head>
<body>
    <?php
        $t=date("H");
        if($t < "10")
        {
            echo "Have a good morning!";
        }
        elseif($t < "20"){
            echo "Have a good day";
        }else{
            echo "have a good night";
        }
    ?>
</body>
</html>