
    <?php
        include "header.php";
        include "db_con.php";
    ?>

    <div class="container">
        <h2 class="text-primary text-center">View Note</h2>
    </div>
    <table class="table table-striped mt-3">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>note</th>
            <th>time</th>
            <th colspan='2'>action</th>
        </tr>
    
<?php
    $sql="select * from notes";
    $run=mysqli_query($con,$sql);
   

    while($row=mysqli_fetch_assoc($run)){?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['descr']?></td>
            <td><?php echo $row['time']?></td>
            <td><a href="update.php?id=  <?php echo $row['id'] ?>">edit</a></td>
            <td><a href="delete.php?id=  <?php echo $row['id'] ?>">delete</a></td>
        </tr>

    <?php    
    }
?>
    </table>
<?php
include "footer.php";
?>
