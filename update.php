<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4</title>
</head>
<body>
<h1>roll number column</h1>
    <form method="post">
        <input type="text" name="rollno" placeholder="roll no." required><br><br>
        <input type="submit" name="rollnofetch" value="Update">
    </form>
    <a href="roll_data.php">data</a>
<?php
$filename = "task4.txt";
$isDuplicate = false;
if(isset($_POST["rollnofetch"])){
    $rollno = $_POST["rollno"];
    $fp = fopen($filename, "r");
    while($line = fgets($fp)){
        $data_arr = explode("\t", $line);
        if($rollno == $data_arr[0]){
            $isDuplicate = true;
             break;
        }
    }
    // print_r($data_arr);
}

if(isset($_POST["task4"])){
    $updated_data = "";
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
    $updated_data = $fname."\t".$lname."\t".$email."\t".$password."\t".$phone."\t".$city."\n";
}
?>
<?php if($isDuplicate)
    {  print_r($data_arr); ?>
        <form method="post">
            <input type="text" name="rollno" value="<?= $data_arr[0] ?>" readonly placeholder="roll no." required><br><br>
            <input type="text" name="fname" value="<?= $data_arr[1] ?>" placeholder="first name" required><br><br>
            <input type="text" name="lname" value="<?= $data_arr[2] ?>" placeholder="last name" required><br><br>
            <input type="email" name="email" value="<?= $data_arr[3] ?>" placeholder="email" required><br><br>
            <input type="text" name="password" value="<?= $data_arr[4] ?>" placeholder="password" required><br><br>
            <input type="text" name="phone" value="<?= $data_arr[5] ?>" placeholder="phone" required><br><br>
            <input type="text" name="city" value="<?= $data_arr[6] ?>" placeholder="city" required><br><br>
            <input type="submit" name="task4" value="submit">
        </form>

<?php } ?>
</body>
</html>