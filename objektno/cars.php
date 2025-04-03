<?php 

interface Car 
{
    public function setModel(string $modelName);
    public function getModel();
}

interface Vehicle 
{
    public function setHasWheels(bool $hasWheels);
    public function getHasWheels();
}

abstract class CarModel implements Car
{

    private string $model;

    public function __construct(string $modelName){
        $this->model = $modelName;
    }

    public function setModel(string $modelName){
        $this->model = $modelName;
    }
    
    public function getModel(){
        return $this->model;
    }
}

class AlfaRomeo extends CarModel
{
}

class BMW extends CarModel implements Vehicle
{
    private bool $hasWheels = true;
   
    public function setHasWheels(bool $hasWheels){
        $this->hasWheels = $hasWheels;
    }
    
    public function getHasWheels(){
        return $this->hasWheels;
    }
}

$car1 = new AlfaRomeo("Giulietta");
$car2 = new BMW("e30 320i");

if($car1 instanceof Car){
    echo $car1->getModel();
}

if($car2 instanceof Vehicle){
    echo $car2->getHasWheels();
} 