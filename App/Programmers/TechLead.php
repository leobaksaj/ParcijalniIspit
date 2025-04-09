<?php 
namespace App\Programmers;

include_once 'App/Programmers/Coder.php';
include_once 'App/ProgrammersInterface/ManagerInterface.php';

use App\ProgrammersInterface\ManagerInterface;

class TechLead extends Coder implements ManagerInterface{
    public function manageProject()
    {
        return "Upravljam projektom!<br>";
    }
} 