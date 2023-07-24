<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image uploaded</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name" required><br><br>
        <input type="text" name="city" placeholder="city" required><br><br>
        <input type="text" name="number" placeholder="number" required><br><br>
        <input type="file" name="pic" ><br><br>
        <input type="submit" name="upload" value="submit">
    </form>
<?php
        if(isset($_POST["upload"])){
            $name = $_POST["name"];
            $city = $_POST["city"];
            $number = $_POST["number"];
            $pic = $_FILES['pic']['name'];
            echo"<pre>";
                print_r($_FILES);
            echo"</pre>";
            
            move_uploaded_file($_FILES["pic"]["tmp_name"], "images/".$pic);
            echo "Name: $name<br>";
            echo "City: $city<br>";
            echo "number: $number<br>";
            echo "Pic: ".$_FILES['pic']['name']."<br>";
            echo "<img src='images/$pic'>";
        }
?>
</table>
</body>
</html>