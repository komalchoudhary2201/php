<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
<body>
<h1>for showing record in a file</h1>

    <form method="post">
        <input type="text" name="rollno" placeholder="roll no." required><br><br>
        <input type="text" name="fname" placeholder="first name" required><br><br>
        <input type="text" name="lname" placeholder="last name" required><br><br>
        <input type="email" name="email" placeholder="email" required><br><br>
        <input type="text" name="password" placeholder="password" required><br><br>
        <input type="text" name="phone" placeholder="phone" required><br><br>
        <input type="text" name="city" placeholder="city" required><br><br>
        <input type="submit" name="task1" value="submit">
    </form>
<?php
// form : 
//     roll no , fname , lname , email , password , phone , city 
//     1. record this in a file 
//     2 . no duplicate roll no.
//     3. no duplicate phone no.
//     4. no duplicate roll no. & phone no.
//         1. show in table 
//         2. fetch all record using roll no (form : rollno-->submit)
//         3. jo bhi update krna h vo roll no dalke pata lgana h
//         4.delete the data if you want  
// ------------------------------------------------------------------------------

$fp = fopen("task1.txt", "a");
    if(isset($_POST["task1"])){
        $rollno = $_POST["rollno"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];
        
        // $_SESSION["rollno"]=$rollno;
        // $_SESSION["fname"]=$fname;
        // $_SESSION["lname"]=$lname;
        // $_SESSION["email"]=$email;
        // $_SESSION["password"]=$password;
        // $_SESSION["phone"]=$phone;
        // $_SESSION["city"]=$city;
        
        echo"submited successfully";
        $data = implode("\t", $_POST);
        fwrite($fp, $data."\n");
    }

    // echo "<pre>";
    //     print_r($_SESSION);
    // echo"</pre>";
?>


<?php
$fp = fopen("task1.txt", "r");



// while($data = fgets($fp)){
//     $btab = explode("\t", $data);

//     echo "<pre>";
//     print_r($btab);
//     echo "</pre>";
// }
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
            <td><?php echo $btab[0]; ?></td>
            <td><?php echo $btab[1]; ?></td>
            <td><?php echo $btab[2]; ?></td>
            <td><?php echo $btab[3]; ?></td>
            <td><?php echo $btab[4]; ?></td>
            <td><?php echo $btab[5]; ?></td>
            <td><?php echo $btab[6]; ?></td>
        </tr>

    <?php
        }
    ?>
    

</table>
</body>
</html>