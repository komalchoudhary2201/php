<?php
/*    class Myclass{
        function jk(){
            echo "hello";
        }
        function __construct(){
            echo "constructor","<br>";    
        }
    }
    $myobj = new Myclass;
    $myobj->jk();
*/
  
/*    class myclass{
        public $name ="sharma";
        public $city="punjab";
        
        function __construct(){
            echo $this->name;
            echo "<br>";
            echo $this->city;
        }
    }
  
    $obj=new myclass();
*/
/*
    class myclass{
        function __construct(){
            $a = 20;
            $b = 30;
            echo $a*$b;
        }
    }
    $obj= new myclass();
*/
/*
    class myclass{
        public $a = 10;
        public $b = 20;
        function __construct(){
            echo $this->a+ $this->b;
        }
    }
    $obj = new myclass();
*/
/*
    class myclass{
        public $a = 10;
        public $b = 10;

        function sum(){
            echo $this->a + $this->b;
        }
        function multi(){
            echo $this->a * $this->b;
        }
    }

    $obj=new myclass();
    $obj->sum();
    echo "<br>";
    echo $obj->a; //try
    echo "<br>";
    $obj->multi();
*/

#Encapsulation
class myClass {
    private $a;
    private $b;
    private $fact;

    function __construct($a, $b){
        $this->a = $a; 
        $this->b = $b;
    }
    
    function setA($a) {
        $this->a = $a;
    }
    //setB
    //getFactorialA --> B
    // isPrimeA  --> B
    // armStrongA 
    // isPalindrome
    function setB($b){
        $this->b = $b;
    }
    function getA() {
        return $this->a;
    }
    function getB(){
        return $this->b;
    }
    function sum(){
        echo $this->a+$this->b;
    }  
    function sub(){
        echo $this->a-$this->b;
    }
    function mul(){
        echo $this->a*$this->b;
    }
    function modl(){
        echo $this->a%$this->b;
    }
    function div(){
        echo $this->a/$this->b;
    }
    function calcuateFactA(){
        $fact = 1;
        for($n=1;$n<=$this->a;$n++){
            $fact=$fact*$n;
        }
        return $this->fact = $fact;
    }
    
    function getFact() {
            return $this->fact;
    }

    /*function calcuateFactB(){
        for($n=1;$n<=$b;$n++){

        }
    }*/
}

$obj = new myClass(10, 20);
echo $obj->getB();
$obj->setB(100);
echo"<br>";
echo $obj->getB();
echo"<br>";
$obj->sum();
echo"<br>";
$obj->sub();
echo"<br>";
$obj->mul();
echo"<br>";
$obj->modl();
echo"<br>"; 
$obj->div();
echo"<br>"; 
echo $obj->calcuateFactA();
?>