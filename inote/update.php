

    <?php
    include "header.php";
    include "db_con.php";
    $id=$_GET['id'];
    $sql="select * from notes where id=$id";
    $run=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($run);
    ?>
    <div class="conrainer">
        <h2 class="text-primary text-center">update Note</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">note title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="title" value="<?php echo $row['title'] ?>" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">note discription</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"  ><?php echo $row['descr'] ?></textarea>

            
        </div>
        <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary"  value="submit" name="submit">
        </div>
    </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $description=$_POST['description'];

        $sql="update notes set title= '$title', descr='$description' where id=$id  ";
        $run=mysqli_query($con,$sql);

        if($run){
            header("location:notes.php");
        }
    }
    include "footer.php";
    ?>
