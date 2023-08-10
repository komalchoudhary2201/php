<!-- localhost
user
password
databaes -->
<?php
$con = mysqli_connect("localhost","root","","kdatabase");

// if($con){
//     echo"hello";
// }else{
//     echo"BYE";
// }
$qry = "create table em(no int)";
$t = mysqli_query($con, $qry);
// if($t){
//     echo"hello";
// }else{
//     echo"BYE";
// }
$show_data = "select * from kdatabase";
$t = mysqli_query($con, $show_data);
$d = mysqli_fetch_assoc($t);
print_r($d);
?>