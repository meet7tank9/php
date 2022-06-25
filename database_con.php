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
        $con=new mysqli_connect($servername,$username,$password);

        if($con->connect_error){
            echo ("Connection failed : ".$con->connect_error);
        }
        else{
            echo "connection success";
        }
    ?>
</body>
</html>