<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array in php</title>
</head>
<body>
    <?php
        $cars=array("volvo","bmw","toyota");
        for($i=0; $i<count($cars); $i++){
            echo "<br>".$cars[$i];
        }



        $age=array("peter"=>"35", "ben"=>"37","joe"=>"79");
        foreach ($age as $key => $value) {
            echo "<br> $key is $value years old";
        }
    ?>
</body>
</html>