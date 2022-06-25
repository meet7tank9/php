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
        include "./create_db.php";

        $sql= "INSERT INTO my_guest(fname,lname,email)  VALUES('meet','tank','meet7tank@gmail.com')";

        $run=mysqli_query($con,$sql);
        if($run){
            echo "data inserted succesfully";
        }
        else{
            echo "Something went wrong";
        }
    ?>
</body>
</html>