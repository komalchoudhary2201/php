<?php
//public access-modifier
/*class Student{
    public $name;
    public function display($nm){
        $this->name = $nm;
        echo $this->name;
    }
}

// $obj = new Student();
// $obj->display("Rohan");

class Faculty extends Student{
    public $tname = "Mr. Raman";
    function detail(){
        echo $this->name;
        echo "<br>";
        echo $this->tname;
    }
}
$obj = new Faculty();
$obj->name = "Mohan";
$obj->detail();
*/

//protected access-modifier
/*class Student{
    protected $name = "Ram";
}

class Faculty extends Student{
    function show(){
        echo $this->name;
    }
}
$obj = new Faculty();
$obj->show();
*/


//private access-modifier
/*class Student{
    private $name = "Ram";

    function display(){
        echo $this->name;
    }
}
$obj = new Student();
$obj->display();
/*
class Faculty extends Student{
    public $fname;

    function st_name(){
        echo $this->name;
    }
}

$obj=new faculty();
*/



//check funtions:

//private access-modifier
/*
class Student{
    private $name = "Ram";
    public  function display(){           //cannot access with private and prtected function 
        echo $this->name;
    }
}
$obj = new Student();
$obj->display();
*/

//protected access-modifier
/*
class Student{
    protected $name = "Rohan";
        public function pro(){            //cannot access with private and public function 
        echo $this->name;
    }
}
$obj = new student();
$obj->pro();
*/

//public access-modifier
class Student{
    private $name="Rohan";
    function display(){
        echo $this->name;
        
    }
}


class Faculty extends Student{
    private $tname = "Mr. Raman<br>";
    function detail(){
        // echo $this->name;
        echo "<br>";
        echo $this->tname;
        echo $this->x;
        echo $this->display();
    }
}
$obj = new Faculty();
$obj->x = "Mohan";
$obj->detail();





?>
