<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .error{
        color:red;
    }
</style>
</head>

<body>

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            $nameErr="Name is required";
        }
        else{
            $name=$_POST['name'];
        }
        if(empty($_POST['email'])){
            $emailErr="Email is required";
        }
        else{
            $email=$_POST['email'];
        }
        if(empty($_POST['website'])){
            $websiteErr="website is required";
        }
        else{
            $website=$_POST['website'];
        }
        if(empty($_POST['comment'])){
            $commentErr="";
        }
        else{
            $comment=$_POST['comment'];
        }
        if(empty($_POST['gender'])){
            $genderErr="Gender is required";
        }
        else{
            $gender=$_POST['gender'];
        }
        
    }
    ?>

    <form action="" method="POST"><?php $_SERVER["PHP_SELF"];?>
    Name: <input type="text" name="name"><span class="error"><?php echo $nameErr; ?></span>
    <br>

    E-mail : <input type="email" name="email" id=""><span class="error"><?php echo $emailErr; ?></span>
    <br>

    website : <input type="text" name="website" id=""><span class="error"><?php echo $websiteErr; ?></span>
    <br>

    comment: <textarea name="comment" id="" cols="30" rows="5"></textarea>
    <br>

    Gender: <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="other">other <span class="error"><?php echo $genderErr; ?></span>
    <br>
    <input type="submit" value="submit" name="submit">
    </form>

    

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>
</html>