<?php 
   // Kreiranje varijabla - tema Automobili

   $carYear       = 2023;
   $carEngineSize = 3.2;
   $carHorsepower = 260;
   $carMake       = 'VW';
   $carModel      = 'Golf 8';
   $carColor      = 'Crna';
   $carStock      = false; 
   $carPrice      = 32.567;

   $carYear2       = 2024;
   $carEngineSize2 = 2.0;
   $carHorsepower2 = 150;
   $carMake2       = 'VW';
   $carModel2      = 'Golf 8';
   $carColor2      = 'Bijela';
   $carStock2      = true; 
   $carPrice2      = 27.754;

   $carStockString  = $carStock ? 'Na stanju' : 'Nema na stanju';
   $carStockString2 = $carStock2 ? 'Na stanju' : 'Nema na stanju';

   define("PI", 3.14159265);
   define("VERSION", "1.0.0");
   define("SITE_NAME", "Osnove PHP-a");
   define("YEAR_ESTBABLISHED","2025");
?>

    <table>
        <thead>
            <tr>
                <th>Marka</th>
                <th>Model</th>
                <th>Godina proizvodnje</th>
                <th>Boja</th>
                <th>Tip motora</th>
                <th>Snaga(ks)</th>
                <th>Stanje zalihe</th>
                <th>Cijena(€)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $carMake; ?></td>
                <td><?php echo $carModel; ?></td>
                <td><?php echo $carYear; ?></td>
                <td><?php echo $carColor; ?></td>
                <td><?php echo $carEngineSize; ?></td>
                <td><?php echo $carHorsepower; ?></td>
                <td><?php echo $carStockString; ?></td>
                <td><?php echo $carPrice; ?></td>
            </tr>
            <tr>
                <td><?php echo $carMake2; ?></td>
                <td><?php echo $carModel2; ?></td>
                <td><?php echo $carYear2; ?></td>
                <td><?php echo $carColor2; ?></td>
                <td><?php echo $carEngineSize2; ?></td>
                <td><?php echo $carHorsepower2; ?></td>
                <td><?php echo $carStockString2; ?></td>
                <td><?php echo $carPrice2; ?></td>
            </tr>
        </tbody>
    </table>

    <h1>Ispit konstanti</h1>
    <table>
        <thead>
            <tr>
                <th>PI</th>
                <th>Verzija</th>
                <th>Ime projekta</th>
                <th>Godina nastanka</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo PI; ?></td>
                <td><?php echo VERSION; ?></td>
                <td><?php echo SITE_NAME; ?></td>
                <td><?php echo YEAR_ESTBABLISHED; ?></td>
            </tr>
        </tbody>
    </table>

    <h1>Ispit referenci</h1>
    <table>
        <thead>
            <tr>
                <th>Varijabla B (prvi put)</th>
                <th>Varijabla A</th>
                <th>Varijabla B (drugi put)</th>
                <th>Varijabla A</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php 
                        $a = 4;
                        $b = &$a;
                        echo $b;
                    ?>
                </td>
                <td><?php echo $a; ?></td>
                <td><?php 
                        $a = 10;
                        echo $b;
                    ?>
                </td>
                <td><?php echo $a; ?></td>
            </tr>
        </tbody>
    </table>
    