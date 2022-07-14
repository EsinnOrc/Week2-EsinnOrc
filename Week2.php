<?php

abstract class Vehicles
{
   
    public $brand;
    public $model;
    public $plateNo;
    public $numberWheels;
    public $wingSpan;
  


    public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        $this->plateNo = $plateNo;
        $this->brand = $brand;
        $this->model = $model;
        $this->numberWheels = $numberWheels;
        $this->wingSpan = $wingSpan;
    }
     
    function setModel($model){
        $this->model = $model;
    }
    function getModel(){
       return $this->model; 
    }
       
    function setWingSpan($wingSpan){
        $this->wingSpan = $wingSpan;
    }
    function getWingSpan(){
       return $this->wingSpan; 
    }
    
    function setPlateNo($plateNo){
        $this->plateNo = $plateNo;
    }
    function getPlateNo(){
       return $this->plateNo; 
    }
    
    function setNumberWheels($numberWheels){
        $this->numberWheels = $numberWheels;
    }
    
    function getNumberWheels(){
       return $this->numberWheels; 
    }

    function setBrand($brand){
        $this->brand = $brand;
    }
    function getBrand(){
       return $this->brand; 
    }

    abstract public function vehiclesType();
}

class Car extends Vehicles
{
 public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        parent::__construct($plateNo, $brand, $model, $numberWheels, $wingSpan);
    }

    public function vehiclesType()
    {
        return "$this->plateNo $this->brand $this->model $this->numberWheels $this->wingSpan\n";
    }
}

class Motorcycle extends Vehicles
{
    public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        parent::__construct($plateNo, $brand, $model, $numberWheels, $wingSpan);
    }

    public function vehiclesType()
    {
        return "$this->plateNo $this->brand $this->model $this->numberWheels $this->wingSpan\n";
    }
   
}

class Plane extends Vehicles
{
    public function __construct($plateNo, $brand, $model, $numberWheels, $wingSpan)
    {
        parent::__construct($plateNo, $brand, $model, $numberWheels, $wingSpan);
    }

    public function vehiclesType()
    {
        return " $this->brand $this->model $this->wingSpan\n";
    }
}


$car = new Car("00 XWX 01 ","Tesla","ZWXI-3",4,"");
$car->setPlateNo('00 XWX 01');
$car->setBrand('yeni');
$car->setModel('ZWXI-3');
$car->setNumberWheels(4);

echo $car->vehiclesType();

$motorcycle =  new Motorcycle("01 CYC 00","anka","CYC-40",2,"");
echo $motorcycle->vehiclesType();

$plane =  new Plane("","starPlane","PLN-36","","2ft");
echo $plane->vehiclesType();
?>
