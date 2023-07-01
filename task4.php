<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4</title>
</head>
<body>
<h1>no duplicates roll no. &  no duplicates phone no.</h1>

    <form method="post">
        <input type="text" name="rollno" placeholder="roll no." required><br><br>
        <input type="text" name="fname" placeholder="first name" required><br><br>
        <input type="text" name="lname" placeholder="last name" required><br><br>
        <input type="email" name="email" placeholder="email" required><br><br>
        <input type="text" name="password" placeholder="password" required><br><br>
        <input type="text" name="phone" placeholder="phone" required><br><br>
        <input type="text" name="city" placeholder="city" required><br><br>
        <input type="submit" name="task4" value="submit">
    </form>

    <a href="task_roll.php">data</a>
    <a href="update.php">Update</a>
<?php
// form : 
//     4. no duplicate roll no. & phone no.
//         1. show in table 
//         2. fetch all record using roll no (form : rollno-->submit)
//         3. jo bhi update krna h vo roll no dalke pata lgana h
//         4.delete the data if you want  
// ------------------------------------------------------------------------------

$fp = fopen("task4.txt", "a");
    if(isset($_POST["task4"])){
        $rollno = $_POST["rollno"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];

        
    
        $fp2 = fopen("task4.txt", "r");
            
        $flag = "dublicate not allowed";
        $isDuplicate = false;
        while($line = fgets($fp2)){
            $data_arr = explode("\t", $line);
            // print_r($data_arr);
            // echo "---<br>";
            if($phone == $data_arr[5] or $rollno == $data_arr[0]){
                // echo "Found the number";
                // echo "<br>";
                // $flag = "already exists";
                // break;
                $isDuplicate = true;
            }
        }
    
        echo $flag;
        if(!$isDuplicate){
            echo"submited successfully";
            $data = implode("\t", $_POST);
            fwrite($fp, $data."\n");
        }
        
    }
    ?>
    
    <?php
    $fp = fopen("task4.txt", "r");
    ?>
    
    <table border="1">
    <tr>
        <td>Roll No</td>
        <td>Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Phone NO</td>
        <td>City</td>
    </tr>

    <?php
        while($data = fgets($fp)){
            $btab = explode("\t", $data);
    ?>
        <tr>
            <td><?php echo $btab[0];?></td>
            <td><?php echo $btab[1];?></td>
            <td><?php echo $btab[2];?></td>
            <td><?php echo $btab[3];?></td>
            <td><?php echo $btab[4];?></td>
            <td><?php echo $btab[5];?></td>
            <td><?php echo $btab[6];?></td>
        </tr>
    <?php
        }
    ?>

    </table>


<h1> Deleted </h1>
<form method="post">
    <input type="text" name="rollno" placeholder="roll no." required><br>
    <input type="submit" name="delete" value="Delete    ">
    <input type="submit" name="edit" value="Edit">
</form>
<br><br>

<?php
// deleteing code
$filename = "task4.txt";
$temp = "temp.txt";
$fp = fopen($filename, "r");
$fp_temp = fopen($temp, "w");

if(isset($_POST["delete"])){
    $rollno = $_POST["rollno"];
    $is_exist = false;

    while($line = fgets($fp)){
        $data_arr = explode("\t", $line);
        if($rollno == $data_arr[0]){
            $is_exist = true;
        }else{
            fwrite($fp_temp, $line);
        }
    }
    fclose($fp);
    fclose($fp_temp);

    // file_put_contents("temp.txt",)
    if($is_exist){
        $fp_temp = fopen($temp, "r");
        $fp = fopen($filename, "w");

        while($line = fgets($fp_temp)){
            fwrite($fp, $line);
        }
        echo "Data Deleted";
        echo '
        <script>

            window.location.href = "task4.php";
        </script>
        ';
    }else{
        echo "Data not found";
    }
}

if(isset($_POST["edit"])){
    
    $fp_edit = fopen("task4.txt", "r");

    $rollno = $_POST["rollno"];
    $is_exist = false;


    while($line = fgets($fp_edit)){
        $data_arr = explode("\t", $line);
        if($rollno == $data_arr[0]){
            $is_exist = true;
            break;
        }else{
            fwrite($fp_temp, $line);
        }
    }

    if($is_exist){?>

        <form method="post">
            <input type="text" name="rollno" placeholder="roll no." value="<?= $data_arr[0] ?>" readonly required><br><br>
            <input type="text" name="fname" placeholder="first name" value="<?= $data_arr[1] ?>" required><br><br>
            <input type="text" name="lname" placeholder="last name" value="<?= $data_arr[2] ?>" required><br><br>
            <input type="email" name="email" placeholder="email" value="<?= $data_arr[3] ?>" required><br><br>
            <input type="text" name="password" placeholder="password" value="<?= $data_arr[4] ?>" required><br><br>
            <input type="text" name="phone" placeholder="phone" value="<?= $data_arr[5] ?>" required><br><br>
            <input type="text" name="city" placeholder="city" value="<?= $data_arr[6] ?>" required><br><br>
            <input type="submit" name="update" value="submit">
        </form>

    <?php }
}
?>


<!-- UPDATE -->
<?php

if(isset($_POST["update"])){
    $filename = "task4.txt";
    $rollno = $_POST["rollno"];
    $fp_update = fopen("task4.txt", "r");
    $temp = "temp.txt";
    $fp_temp = fopen($temp, "w");

   
    $is_exist = false;

    while($line = fgets($fp_update)){
        $data_arr = explode("\t", $line);
        if($rollno == $data_arr[0]){
            $is_exist = true;
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $phone = $_POST["phone"];
            $city = $_POST["city"];
            
            if($fname == ""){
                $fname = $data_arr[1];
            }
            
            if($lname == ""){
                $lname = $data_arr[2];
            }
            
            if($email == ""){
                $email = $data_arr[3];
            }
            
            if($password == ""){
                $password = $data_arr[4];
            }

            if($phone == ""){
                $phone = $data_arr[5];
            }

            if($city == ""){
                $city = $data_arr[6];
            }

            $update_data = $data_arr[0]."\t".$fname."\t".$lname."\t".$email."\t".$password."\t".$phone."\t".$city."\n";
            fwrite($fp_temp, $update_data);
            // break;
        }else{
            fwrite($fp_temp, $line);
        }
    }


    if($is_exist){
        $fp_temp = fopen($temp, "r");
        $fp = fopen($filename, "w");

        while($line = fgets($fp_temp)){
            fwrite($fp, $line);
        }
        echo "Updated Deleted";
        echo '
        <script>

            window.location.href = "task4.php";
        </script>
        ';
    }else{
        echo "Data not found";
    }
    
}

?>

</body>
</html>