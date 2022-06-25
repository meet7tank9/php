<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php_practice";
        $con= mysqli_connect($servername,$username,$password,$dbname);

        if($con->connect_error){
            echo ("Connection failed : ".$con->connect_error);
        }
        else{
            echo "connection success";
        }
?>