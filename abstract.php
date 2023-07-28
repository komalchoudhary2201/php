<?php
//abstract
/*
abstract class Student{
    abstract function add();
    abstract function sub();
}

class child extends Student{
    function add(){
        echo"this is add function <br>";
    }
    function sub(){
        echo"this is sub function";
    }
}

$obj=new child;
$obj->add();
$obj->sub();
*/

// class student{
//     public static $name="rahul";
//     public static $age=25;
//     static function show(){
//         echo student::$name."<br>";
//         echo student::$age;
//     }
// }
// student::show();


class student{
    const name ="rahul";
    const age=25;
    static function show(){
        echo student::name."<br>";
        echo student::age;
    }
}
student::show();













?>