<?php
class myclass{
    public $salary;
    public $hra;
    public $da;
    public $convey;
    public $entertainment;
    public $fund;
    public $insurance;
    public $gross_salary;
    function __construct($s){
        $this->salary=$s;
    }
        function setS($s){
            $this->salary=$s;
        }
        function getS(){
           return $this->salary; 
        }

    function calculateHra(){
      
        if($this->salary >3000){
            $this->hra = $this->salary * 20 / 100;
        }else if($this->salary > 1000 && $this->salary <= 3000){
            $this->hra = $this->salary *  25 / 100;
        }else{
            $this->hra = $this->salary * 30 /100;
        }
        return $this->hra;
    }

    function calculateDa(){
        
        $this->da = $this->salary * 30 /100;
            return $this->da;
    }

    function calculateConvey(){
      
        if($this->salary >2000){
            $this->convey = 100;
        }else if($this->salary > 1000 && $this->salary <= 2000){
            $this->convey = 75;
        }else{
            $this->convey = 50;
        }
        return $this->convey;
    }

    function calculateEntertainment(){

        if($this->salary>1000){
            $this->entertainment = 100;
        }else{
            $this-> entertainment = 0;
        }
            return $this->entertainment;
    }

    function calculateFund(){

        $this->fund = $this->salary * 6/100;
            return $this->fund;
    }

    function calculateInsurance(){
        
        if($this->salary>3000){
            $this->insurance = 80;
        }else if($this->salary>1500 && $this->salary<=3000){
            $this->insurance = 60;
        }else{
            $this-> insurance = 40;
        }
            return $this->insurance;
    }

    function calculateGrossSalary(){
        $this->gross_salary = $this->salary+$this->hra+$this->da+$this->convey+$this->entertainment;
            return $this->gross_salary;
    }    
}

$obj=new myclass(20000); 
echo $obj->getS();
echo"<br>";
echo "HRA is : ";
echo $obj->calculateHra();
echo"<br>";
echo "DA is : ";
echo $obj->calculateDa();
echo"<br>";
echo "CONVEYANCE ALLOWANCE is : ";
echo $obj->calculateConvey();
echo"<br>";
echo "ENTERTAINMENT ALLOWANCE is : ";
echo $obj->calculateEntertainment();
echo"<br>";
echo "PROVIDENT FUNDS is : ";
echo $obj->calculateFund();
echo"<br>";
echo "GROUP INSURANCE PREMIUM is : ";
echo $obj->calculateInsurance();
echo"<br>";
echo "GROSS SALARY is : ";
echo $obj->calculateGrossSalary();

?>