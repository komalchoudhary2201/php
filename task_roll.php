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
<h1>roll number column</h1>

    <form method="post">
        <input type="text" name="rollno" placeholder="roll no." required><br><br>
        <input type="submit" name="task4" value="submit">
    </form>

    <a href="roll_data.php">data</a>
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
        
        $fp2 = fopen("task4.txt", "r");
        $flag = "s";
        $isDuplicate = false;
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
    $recordExist = false;
        while($line = fgets($fp2)){
            $btab = explode("\t", $line);
            if($rollno == $btab[0]){
                $recordExist = true;
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
        }
   
        if (!$recordExist) {
            ?>
            <tr>
            <td> "Record Not Exist!" </td>
        </tr>
            <?php
        }

    }
        ?> 

    </table>
       
    </body>
    </html>