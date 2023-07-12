<?php


    class Name{
        public $fname = "ravi";
        public $lname = "singh";

        function mainfun(){
            echo"this is main class";
        }
    }

       
    class  Fname extends Name{
        public $FullName="";
        
        function subfun(){
            echo "parent's property";
        }   
    }
    
    class  Lname extends Name{
        public $FullName="";
        
        function subfun(){
            echo "parent's property";
        }   
    }
    class otherclass extends Fname{
        function childfun(){
            echo"child's property";
        }
    }

    class Test extends otherclass{}

    // $obj = new myclass();
    // echo $obj->main();
    // echo"<br>";
    // echo $obj->name;
    // echo"<br>";
    // echo $obj->lname;

    $ref = new Test();
    $ref->childfun();
    $ref->subfun();
    $ref->mainfun();   
?>