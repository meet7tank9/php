<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php
        function writeMsg(){
            echo "hello world<br>";
        }
        writeMsg();



        function sum($a, $b){
            echo $a+$b;
        }
        sum(30,20);



        function family($fname,$lname){
            return $fname." " .$lname;
        }
        echo family("Meet","Tank");


        function family($fname,$lname){
            echo $fname." " .$lname;
        }
        family("Meet","Tank");

    ?>

</body>
</html>