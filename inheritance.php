<?php

class MainClass{
    public $name = "Komal";
    public $city = "Delhi";

    function showData(){
        echo "Show data function";
    }
}

class SubClass extends MainClass{
    function subClsFun(){
        echo "This is sub class function";
    }
}

class Another extends SubClass{
    public function abc(){
        echo "abc";
    }
}

$obj = new MainClass();
$obj->showData();
echo "<br>";
echo $obj->name;
$obj->name = "Komal2";
echo $obj->name;

echo "<br>";
$obj2 = new SubClass();
$obj2->subClsFun();
echo "<br>";
$obj2->showData();
echo "<br>";
echo $obj2->name;
echo "<br>";
echo $obj2->name;


$obj3 = new Another();
echo "<br>";
$obj3->showData();
echo "<br>";
$obj3->subClsFun();
echo "<br>";
$obj3->abc();
?>