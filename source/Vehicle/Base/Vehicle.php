<?php

namespace Vehicle\Base;

use Vehicle\Interfaces\VehicleInterface as InterfacesVehicleInterface;

abstract class Vehicle implements InterfacesVehicleInterface
{
    public function start()
    {
        echo "Start<br>";
    }

    public function stop()
    {
        echo "stop<br>";
    }

    public function broj_kotaca($brKotaca){
        echo "Broj kotača je ".$brKotaca.'<br>';
    }

    public function boja_vozila($bojaVozila){
        echo "Boja vozila je ".$bojaVozila.'<br>';
    }
}