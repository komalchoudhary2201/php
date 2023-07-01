<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<body>
<h1>no duplictes phone no.</h1>

    <form method="post" novalidate>
        <input type="text" name="rollno" placeholder="roll no." required><br><br>
        <input type="text" name="fname" placeholder="first name" required><br><br>
        <input type="text" name="lname" placeholder="last name" required><br><br>
        <input type="email" name="email" placeholder="email" required><br><br>
        <input type="text" name="password" placeholder="password" required><br><br>
        <input type="text" name="phone" placeholder="phone" required><br><br>
        <input type="text" name="city" placeholder="city" required><br><br>
        <input type="submit" name="task3" value="submit">
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

$fp = fopen("task3.txt", "a");

if(isset($_POST["task3"])){
    $rollno = $_POST["rollno"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    
    $fp2 = fopen("task3.txt", "r");
       
      
    $flag = "s";
    while($line = fgets($fp2)){
        $data_arr = explode("\t", $line);
        print_r($data_arr);
        echo "---<br>";
        if($phone == $data_arr[5]){
            echo "Found the number";
            echo "<br>";
            $flag = "already exists";
            break;
        //     $flag == 1;
            // print_r($data_arr);
        //     break;
        }
     
    }

    echo $flag;
    if($flag != "already exists"){
        echo"submited successfully";
        $data = implode("\t", $_POST);
        fwrite($fp, $data."\n");
    }
    
    // for($i = 0; $i < count($data_arr); $i++){
    //     if($phone == $data_arr[4]){
    //         echo "Phone no is already exist";
    //     }else{
    //         echo"submited successfully";
    //         $data = implode("\t", $_POST);
    //         fwrite($fp, $data."\n");
    //     }
    // }
   
    

    
    
}
// echo "<pre>";
//     print_r($_SESSION);
// echo "</pre>";    
?>
<?php
$fp = fopen("task3.txt", "r");
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