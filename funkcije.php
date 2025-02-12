<?php 
    function fullName( $name,  $surname ){
        $person = $name .' '. $surname;
        return strtoupper( $person );
    }

    // $osoba = fullName( 'Ivan', 'Horvat' );
    // var_dump( $osoba );


    function numberFunction( $number ){
        static $lokalna = 0; 
        return $lokalna += $number;
    }

    $funcNumber = 'numberFunction';
    for( $i = 0; $i < 5; $i++ ){
        echo $funcNumber( rand( 1, 10 ) ).'<br>';
    }

    
    echo '<br><br><br><br>';
    echo 'Funkcija kao varijabla vježba 1 <br>';

    $currentDay = strtolower( date( 'l' ) );
    print_r( $currentDay ); 
    echo '<br>';
    $currentDay(); // $currentDay('monday');

    function monday(){
        echo 'Ponedjeljak';
    }
    function tuesday(){
        echo 'Utorak';
    }
    function wednsday(){
        echo 'Srijeda';
    }
    function thursday(){
        echo 'Četvrtak';
    }
    function friday(){
        echo 'Petak';
    }
    function saturday(){
        echo 'Subota';
    }
    function sunday(){
        echo 'Nedjelja';
    }


    echo '<br><br><br><br>';
    echo 'Funkcija kao varijabla vježba 2 <br><br><br>';

    $operacije = [
        'zbrajanje'  => 'zbrajanje',
        'oduzimanje' => 'oduzimanje',
        'mnozenje'   => 'mnozenje',
        'dijeljenje' => 'dijeljenje',
    ];

    foreach( $operacije as $key => $operacija ){
        echo $key(5,5);

    }


    function zbrajanje( $a, $b ){
        echo "Zbrajanje: ". $a + $b;
    }
    function oduzimanje( $a, $b ){
        echo "Oduzimanje: ". $a - $b;
    }
    function mnozenje( $a, $b ){
        echo "Množenje: ". $a * $b;
    }
    function dijeljenje( $a, $b ){
        echo "Dijeljenje: ". $a / $b;
    }

?>