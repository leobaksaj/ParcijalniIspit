<?php 

    include '../../helpers/helpers.php';
    include '../../helpers/table.php';

    $fileName = '../files/igre.json';
    $fileHandler = fopen( $fileName, 'r' ); //provjera jel postoji file
    
    
    if( $fileHandler ){

        $json  = file_get_contents( $fileName );
        $games = json_decode( $json );
    
        // foreach( $games as $game ){
        //     echo '<br><br>';
        //     $gameArray = (array)$game; //Castanje objekt smo pretvorili u array

        //     foreach( $gameArray as $label => $info ){
        //         if( is_bool( $info ) )
        //             $info = $info ? 'Dostupno' : 'Nedostupno';
                
        //         printValue( "$label: $info" );
        //     }
        //     printNewLine();
        // }


        // $games[] = [
        //         "title"          => "CANDY CRUSH",
        //         "genre"          => "RPG",
        //         "studio"         => "CD Mobile",
        //         "year_published" => 2019,
        //         "available"      => true
        // ];

        // $encodeData = json_encode( $games );
        
        // file_put_contents( '../files/igre.json', $encodeData );
        // file_put_contents( '../files/nove_igre.json', $encodeData );

        ?>

        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../../assets/style.css">
            </head>
            <body>

                <h1>Podaci o igricama </h1>
                <?php printTable2( $games ); ?>

            </body>
        </html>

        <?php
    }

///////// PROFA SCORE 
// include '../../helpers/print_helpers.php';
// include '../../helpers/table_helper.php';

// $fileName = '../files/polaznici.json';
// $fileContents = file_get_contents($fileName);
// $students = json_decode($fileContents);

// printTable($students);

// $students[] = [
//     "ime"=> "Novi",
//     "prezime"=> "Polaznik",
//     "godine"=> 35,
//     "email"=> "i.h@gmail.com",
//     "telefon"=> 716728728721
// ];

// $encodedContent = json_encode($students);
// file_put_contents($fileName, $encodedContent);

// $fileContents1 = file_get_contents($fileName);
// $students1 = json_decode($fileContents1);

// printNewLine();
// printNewLine();
// printTable($students1);

