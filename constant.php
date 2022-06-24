<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <?php
        define("GREETIN","welcome to w3schools.com!");
        echo GREETIN;

        
        
        define("cars",[
            "alfa Romeo",
            "BMW",
            "TOYOTA"
        ]);
        echo "<br>";
        echo cars[1];



        define("GREAT","welcome to w3schools.com!");

        function myTest(){
            echo "<br>".GREAT;
        }
        myTest();
    ?>
</body>
</html>