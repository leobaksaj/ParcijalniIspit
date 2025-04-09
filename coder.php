<?php

    require __DIR__ . '/vendor/autoload.php'; 

    use App\FullStackDeveloper;
    use App\TechLead;
 
    $fullStack = new FullStackDeveloper();
    $manager   = new TechLead();
    
    if( $fullStack instanceof FullStackDeveloper ){
        echo "Developer dio -> <br>";
        echo $fullStack->writeCode(true);
        // echo $fullStack->debugCode();
        // echo $fullStack->createDesign();
    }
    
    echo "<br>";
    
    if( $manager instanceof TechLead ){
        echo "Manager dio -><br>";
        echo $manager->writeCode();
        // echo $manager->debugCode();
        // echo $manager->manageProject();
    }
    