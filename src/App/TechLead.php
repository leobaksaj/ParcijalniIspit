<?php 
namespace App;

use App\Interface\ManagerInterface;

class TechLead extends Coder implements ManagerInterface{
    public function manageProject()
    {
        return "Upravljam projektom!<br>";
    }
} 