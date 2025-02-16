<?php 

///////////// ZADATAK DZ
/*

 PHP generira 10 nasumičnih brojeva (1-100) i sprema ih u brojevi.json, svaki u novi red.
* Skripta zatim čita te brojeve, izračunava:
* Zbroj svih brojeva
* Prosječnu vrijednost
* Najveći i najmanji broj 
* Ispisuje rezultate.

    - datoteke
    - petlje
    - funkcije za kalkulacije
    - nizove
*/ 
$filePath = __DIR__.'/../files/';

$numbersArr = [];
for ($i=0; $i < 10; $i++) { 
    $numbersArr[] = rand(1,100); 
}

$numbersJson = json_encode( $numbersArr );
$result = file_put_contents( $filePath.'brojevi.json', $numbersJson );

if( $result !== false ){
    echo "Uspješno kreiran json brojevi!";
}else{
    echo "Greška kod premanja json-a!";
}

$readJson = file_get_contents( $filePath.'brojevi.json' );
$numbers  = json_decode( $readJson );

function average( $num ){
    return array_sum( $num ) / count( $num );
}
$averageF = 'average';

echo '<pre>';
    print_r( 'Zbroj svih brojeva je: '.array_sum( $numbers ) );
echo '</pre>';
echo '<pre>';
    print_r( 'Prosjek brojeva je: '.$averageF( $numbers ) );
echo '</pre>';
echo '<pre>';
    print_r( 'Najmanji broj je: '.min( $numbers ) );
echo '</pre>';
echo '<pre>';
    print_r( 'Najveći broj je: '.max( $numbers ) );
echo '</pre>';
echo '<pre>';
    print_r( $numbers );
echo '</pre>';
