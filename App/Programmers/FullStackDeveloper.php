<?php
namespace App\Programmers;

include_once 'App/Programmers/Coder.php';
include_once 'App/ProgrammersInterface/DesignerInterface.php';

use App\ProgrammersInterface\DesignerInterface;
// use App\ProgrammersInterface\CoderInterface;

class FullStackDeveloper extends Coder implements DesignerInterface
{
    public function createDesign()
    {
        return "Radim samo dizajn! <br>"; 
    }
}