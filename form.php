<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="post" method="">
        name :      <input type="text" name="name"><br><br>
        username :  <input type="text" name="user"><br><br>
        number :    <input type="text" name="number"><br><br>
        email :     <input type="text" name="email"><br><br>
        password :  <input type="password" name="password"><br><br>
                    <input type="submit" name="submit" value="submit">
    </form> -->

    <?php
        // if(isset($_POST["submit"])){
        //     $name = $_POST["name"];
        //     $pattern = "/^[a-zA-Z]/";
        //     $s = preg_match($pattern, $name);
        //     if($s != 1){
        //         echo "wrong";
        //     }else{
        //         print_r($name);
        //     }
        // }

        // if(isset($_POST["submit"])){     
        //         $user = $_POST["user"];
        //         $pattern = "/[a-zA-Z0-9]/";
        //         $s = preg_match($pattern, $user);
        //         if($s != 1){
        //             echo "wrong";
        //         }else{
        //             print_r($user);
        //         }
        //     }

        // if(isset($_POST["submit"])){
        //     $num = $_POST["number"];
        //     $pattern = "/^[0-9]/";
        //     $s = preg_match_all($pattern, $num);
        //     if($s != 1){
        //         echo "wrong";
        //     }else{
        //         print_r($num);
        //     }
        // }
    
        // if(isset($_POST["submit"])){
        //         $email = $_POST["email"];
        //         $pattern = "/^\\s+@\\s+\\.\\s+$/";
        //         $s = preg_match_all($pattern, $email);
        //         if($s != 1){
        //             echo "wrong";
        //         }else{
        //             print_r($email);
        //         }
        //     }
    
        // if(isset($_POST["submit"])){
        //         $password = $_POST["password"];
        //         $pattern = "/^[a-zA-Z]/";
        //         $s = preg_match($pattern, $password);
        //         if($s != 1){
        //             echo "wrong";
        //         }else{
        //             print_r($password);
        //         }
        //     }
    
    
        $email = "fdf@sdf.sdf"; 
// $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@([a-z0-9]){2,}(\.[a-z]{2,3})$/'; 

if (preg_match($regex, $email)) {
 echo "valid";
} else { 
 echo "not valid";
}       
    ?>
</body>
</html>