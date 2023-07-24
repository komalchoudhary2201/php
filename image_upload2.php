<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image upload</title>
</head>
<body>      
    <form method="post" enctype="multipart/form-data">
        name : <input type="text" name="name" required><br><br>
        city : <input type="text" name="city" required><br><br>
        numb : <input type="text" name="number" required><br><br>
        imag : <input type="file" name="pic"><br><br>
               <input type="submit" name="upload" value="submit">
    </form>
    <?php
        if(isset($_POST["upload"])){
            $name = $_POST["name"];
            $city = $_POST["city"];
            $number = $_POST["number"];
            $pic = $_FILES['pic']['name'];
            echo"<pre>";
                print_r($_FILES["pic"]["name"]);
            echo"<pre>";

            move_uploaded_file($_FILES["pic"]["tmp_name"],"images/".$pic);
            echo"name : $name<br>";
            echo"city : $city<br>";
            echo"number : $number<br>";
            echo"pic : ".$_FILES['pic']['name']."<br>";
            echo"<img src='images/$pic'>";

        }    
    ?>
</body>
</html>