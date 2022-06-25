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
        include "create_db.php";
        $sql="DELETE FROM my_guest where id='7'";
        $run=mysqli_query($con,$sql);
        if($run){
            echo "data deleted";
        }
        else{
            echo "data not deleted";
        } 
    ?>
     
</body>
</html>