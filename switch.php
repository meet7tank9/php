<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statement</title>
</head>
<body>
    <form action="" method="post">
        <select name="color" id="">
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="yellow">yellow</option>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
       if(isset($_POST['submit']))
       {
            $color=$_POST['color'];

            switch($color){
                case "red":
                    echo "<body bgcolor='red'></body>";
                    break;
                case "blue":
                    echo "<body bgcolor='blue'></body>";
                    break;
                case "green":
                    echo "<body bgcolor='green'></body>";
                    break;
                case "yellow":
                    echo "<body bgcolor='yellow'></body>";
                    break;
                default:
                    echo "<body bgcolor='white></body>";
            }
       }
    ?>
</body>
</html>