<?php
/*    class student{
        function show(){
            echo"this is student class nd show function","<br>";
        }
    }
    class faculty extends student{
        function show(){
            echo"this is faculty class nd show function";
        }
        function hello(){
            echo"this is faculty class nd hello function";
        }
    }
    // $obj=new student();
    // $obj->show();

    // $obj=new faculty();
    // $obj->show();
*/
  
/*  class student{
        function show(){
            echo"this is student class nd show function","<br>";
        }
    }
    class faculty extends student{
        function show(){
            echo"this is faculty class nd show function";
        }
        final function hello(){
            echo"this is faculty class nd hello function";
        }
    }
    // $obj=new student();
    // $obj->show();
    $obj=new faculty();
    $obj->hello();
*/
final class student{
    function show($a){
        echo"this is student class nd show function","<br>";
    }
}
// class faculty extends student{
//     function show($a){
//         echo"this is faculty class nd show function";
//     }
//     function hello(){
//         echo"this is faculty class nd hello function";
//     }
// }
$obj=new student();
$obj->show(6);

// $obj=new faculty();
// $obj->show(10);

?>