<?php
namespace App\Programmers;

include_once 'App/ProgrammersInterface/CoderInterface.php';

use App\ProgrammersInterface\CoderInterface;

abstract class Coder implements CoderInterface{
    public function writeCode()
    {
        return "Ja sam Developer i pišem programski kod! <br>";
    }

    public function debugCode()
    {
        return "Ovdje tražim što sam zeznuo u pisanju koda (DEBUG)! <br>";
    }
}