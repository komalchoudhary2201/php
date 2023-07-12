<?php
    class Hotel{
      
        public $room_type;
        public $total_days;
        public $age;
        public $total_charges;
        public $cid, $cod;
        
        function __construct ($rt, $age, $cid, $cod){
            $this->room_type = $rt;
            $this->age = $age;
            $this->cid = $cid;
            $this->cod = $cod;
            
        }
        
        function totalDays(){
            return $this->cod - $this->cid;
        }
        function calculateCharges($disDay=0){
            if($this->room_type == "AC"){
                return ($this->totalDays()-$disDay) * 500;
            }else if($this->room_type == "GEN"){
                return  ($this->totalDays()-$disDay) * 200;
            }else{
                return "invalid room type ";
                die();
            } 
        }

        //calculate
        //constructor -->()         
    }

    class Discount extends Hotel{
       
        public $dis;
        public $disAmount;
        function disFun(){
            if($this->age >= 60 && $this->totalDays() >= 10){
                return $this->calculateCharges(2);
                // $this->total_days = $this->total_days - 2;
            }else if($this->age >= 60 && $this->totalDays() < 10){
                return $this->calculateCharges(1);
                // $this->total_days = $this->total_days - 1;
            }else if($this->age < 60 && $this->totalDays()>= 10){
                return $this->calculateCharges(1);
                // $this->total_days = $this->total_days - 1;
            }else if($this->age < 60 && $this->totalDays()< 10){
                return $this->calculateCharges(0);
                // $this->total_days = $this->total_days - 0;

            }
        }

        function dis_amount(){
            echo $this->disAmount =  $this->calculateCharges() -$this->disFun(); 
        }
        
    }

    // $obj = new Hotel(10, "AC", 60);
    $obj1 = new Discount("AC",60 , 5, 14);
    echo "Charges : ".$obj1->calculateCharges();
    echo"<br>";
    echo "Pable amount : ".$obj1->disFun();
    echo "<br>";
    echo "Total Days : ".$obj1->totalDays();
    echo"<br>";
    echo"discount amount : ",$obj1->dis_amount();
?>