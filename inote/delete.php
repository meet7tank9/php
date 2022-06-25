<?php
    $id=$_GET['id'];
    include "db_con.php";

    $sql="delete from notes where id=$id";
    $del=mysqli_query($con,$sql);

    if($del){
        echo "<script>alert('data deleted')
        window.location.href='notes.php';
        </script>";
    }
    else{
        echo "<script>alert('data not deleted');
        </script>";
    }
?>