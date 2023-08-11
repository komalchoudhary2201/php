<?php
$conct = mysqli_connect("localhost","root","","employee");
    // if($conct){
    //     echo"connection worked","<br>";
    // }else{
    //     echo"connnection not worked","<br>";
    // }

// $query = "create table boxs(id int ,name char(20))";
// $xy = mysqli_query($conct,$query);
//     if($xy){
//         echo"query done";
//     }else{
//         echo"query finished";
//     }

//$show ="insert into boxs values(5,'kkk')";
//$xy = mysqli_query($conct,$show); 
// if($xy){
//     echo"query done";
// }else{
//     echo"query finished";
// }

$show = " select * from boxs";
$xy = mysqli_query($conct, $show);
// if($xy){
//     echo" done";
// }else{
//     echo" finished";
// }
// $a = mysqli_num_rows($xy);
// print_r($a);
// if($a = mysqli_num_rows($xy)>0){
?>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>name</th>
    </tr>


<?php
    while($row = mysqli_fetch_assoc($xy)){ ?>
        <tr>
            <td><?php echo ($row["id"]);?></td>
            <td><?php echo ($row["name"])?></td>
        </tr>
        
    <?php
    };

?></table>


