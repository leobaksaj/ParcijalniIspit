<?php 

namespace App\Patterns;

use App\TechLead;

class TechLeadSingleton
{
    private static ?TechLeadSingleton $instance = null;

    private TechLead $techLead;

    private function __construct()
    {
        $this->techLead = new TechLead();
    }

    public static function getInstance() :TechLeadSingleton{
        if(self::$instance === null){
            self::$instance = new TechLeadSingleton();
        }
        return self::$instance;
    }

    public function getTechLead():TechLead{
        return $this->techLead;
    }
}