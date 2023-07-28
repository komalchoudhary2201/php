<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image-uploaded</title>
</head>
<body>
    <?php
    // $op = opendir("images");
    // $x = readdir($op);

    // while(($r = readdir($op)) != false){
    //     print_r($r);
    //     
    //         <img src="images/<?= $r " width="50">
    
    //     echo "<br>";
    // }

    // print_r($x);

    // echo rand();
    $fp = fopen("image-uploade/php","r");
        while($data = fgets($fp)){
            $btab = explode("\t", $data); 
        }   
        if(isset($_POST["upload"])){
            $loc = $_FILES["profile"]["tmp_name"];
            $filename = rand().$_FILES["profile"]["name"];

            move_uploaded_file($loc, "images/".$filename);
            echo "file uploaded";
         }
        
    ?>
        <form enctype="multipart/form-data" method="post">
            Name :         <input type="text" name="name"><br><br>                                                                                         
            City :         <input type="text" name="city"><br><br>
            Number :       <input type="text" name="number"><br><br>
            upload image : <input type="file" name="profile"><br><br>
                           <input type="submit" name="upload" value="submit">
        </form>
