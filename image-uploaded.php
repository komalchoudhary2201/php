<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image-uploaded</title>
</head>
<body>
    <?php
    echo rand();
         if(isset($_POST["upload"])){
            $loc = $_FILES["profile"]["tmp_name"];
            $filename = rand().$_FILES["profile"]["name"];

            move_uploaded_file($loc, "images/".$filename);
            echo "file uploaded";
         }
    ?>
        <form enctype="multipart/form-data" method="post">
        Name : <input type="text" name="name"><br><br>    
        City : <input type="text" name="city"><br><br>
        Number : <input type="text" name="number"><br><br>
        upload image : <input type="file" name="profile"><br><br>
                <input type="submit" name="upload" value="submit">
        </form>
    
</body>
</html>