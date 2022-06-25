<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <?php
    include "header.php";
    include "db_con.php";
    ?>
    <div class="conrainer">
        <h2 class="text-primary text-center">Add Note</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">note title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="title">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">note discription</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>

            
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

        $sql="INSERT INTO notes(title,descr) values('$title','$description')";
        $run=mysqli_query($con,$sql);

        if($run){

        }
    }
    include "footer.php";
    ?>
  </body>
</html>