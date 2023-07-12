<?php
    class MyClass{
        public $name = "rajiv";
        public $city = "punjab";

        function grand(){
            echo "grand's property";
        }
    }
   
class SubClass extends MyClass{
        public $age="24";
    function subfun(){
        echo "parent's property";
    }
}

class otherclass extends subclass{
        public $fname ="singh";
    function child(){
        echo"child's property";
    }
}
    // $obj= new MyClass();
    // $obj->grand();
    // echo"<br>";
    // echo $obj->name;
    // echo"<br>";
    // echo $obj->city;

    // $obj =new subclass();
    // echo "<br>";
    // $obj->subfun();
    // echo"<br>";
    // echo $obj->name;
    // echo"<br>";
    // echo $obj->city;
    // echo"<br>";
    // echo $obj->age;
    // echo"<br>";

    $obj = new otherclass();
    $obj->child();
    echo"<br>";
    echo $obj->name;
    echo"<br>";
    echo $obj->city;
    echo"<br>";
    echo $obj->age;
    echo"<br>";
    echo $obj->fname;
    echo"<br>";
?>