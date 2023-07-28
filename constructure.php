<?php
/*class main{
    function __construct(){
        echo"first constructor","<br>";
    }
    function __destruct(){
        echo"im destructure always last","<br>";
    }
    function ok(){
        echo"second function","<br>";
    }
}

$obj = new main();
$obj->ok();
*/
/*class main{
    function __construct(){
        echo"parent class","<br>";
    }
}
    class child extends main{
        function __construct(){
            parent::__construct();
            echo"child constructure","<br>";
        }
    }
$obj = new child();
*/
class main{
    public $a;
    function __construct($value){
        $this->a = $value;
        echo"parent class $this->a","<br>";
    }
}
    class child extends main{
        function __construct($a){
            parent::__construct($a);
            echo"child constructure","<br>";
        }
    }
$obj = new child(10);


?>