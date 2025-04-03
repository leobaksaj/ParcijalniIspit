<?php 

interface Coder
{
    public function writeCode();
    public function debugCode();
}

interface Designer
{
    public function createDesign();
}

interface Manager
{
    public function manageProject();
}

abstract class CodeMaster implements Coder{
    public function writeCode()
    {
        return "Ja sam Developer i pišem programski kod! <br>";
    }

    public function debugCode()
    {
        return "Ovdje tražim što sam zeznuo u pisanju koda (DEBUG)! <br>";
    }
}

class FullStackDeveloper extends CodeMaster implements Designer
{
    public function createDesign()
    {
        return "Radim samo dizajn! <br>"; 
    }
}

class TechLead extends CodeMaster implements Manager{
    public function manageProject()
    {
        return "Upravljam projektom!<br>";
    }
} 

$fullStack = new FullStackDeveloper();
$manager   = new TechLead();

if( $fullStack instanceof FullStackDeveloper ){
    echo "Developer dio -> <br>";
    echo $fullStack->writeCode();
    echo $fullStack->debugCode();
    echo $fullStack->createDesign();
}

echo "<br>";

if( $manager instanceof TechLead ){
    echo "Manager dio -><br>";
    echo $manager->writeCode();
    echo $manager->debugCode();
    echo $manager->manageProject();
}
