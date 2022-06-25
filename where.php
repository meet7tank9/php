<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>email</th>
        </tr>
    <?php
        include "create_db.php";
        $sql="SELECT * FROM my_guest where id='7' ";
        $run=mysqli_query($con,$sql);
?>
<?php
        while($row=mysqli_fetch_assoc($run)){
    ?>
    
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
   
    <?php
        }
    ?>
     </table>
</body>
</html>