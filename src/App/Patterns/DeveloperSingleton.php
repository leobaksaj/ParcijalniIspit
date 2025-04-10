<?php
namespace App\Patterns;

use App\FullStackDeveloper;

class DeveloperSingleton
{
    private static ?DeveloperSingleton $instance = null;
    private FullStackDeveloper $fullStack;
    
    private function __construct()
    {
        $this->fullStack = new FullStackDeveloper();
    }

    public static function getInstance() :DeveloperSingleton{
        if(self::$instance === null){
            self::$instance = new DeveloperSingleton();
        }

        return self::$instance;
    }

    public function getFullStack():FullStackDeveloper{
        return $this->fullStack;
    }

}