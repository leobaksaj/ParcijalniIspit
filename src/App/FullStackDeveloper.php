<?php
namespace App;

use App\Interface\DesignerInterface;
// use App\ProgrammersInterface\CoderInterface;

class FullStackDeveloper extends Coder implements DesignerInterface
{
    public function createDesign()
    {
        return "Radim samo dizajn! <br>"; 
    }
}