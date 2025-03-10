<?php 

    $primeNumbers = [ 4, 2, 6, 10, 8 ];

    echo 'Jednodimenzionalni niz vjezba 1 <br>';
    echo 'Provjera postoji li u nizu treci element: ';
    var_dump( isset($primeNumbers[3] ) );

    echo '<br><br>';

    isset( $primeNumbers[3] ) ? print_r( "Vrijednost na trecem mjestu u nizu je  $primeNumbers[3]" ) : 'Treci element u nizu ne postoji' ;

    echo '<br><br>';

    $primeNumbers[] = 12;
    print_r( $primeNumbers );

    echo '<br><br>';

    $brojElemenata = count( $primeNumbers );
    echo "Broj elemenata u nizu: $brojElemenata";

    echo '<br><br>';
    print_r($primeNumbers);

    echo '<br><br>';
    echo 'Sortiranje silazno po vrijednostima:';

    rsort( $primeNumbers );
    echo '<br>';
    print_r($primeNumbers);

    echo '<br><br>';
    echo 'Sortiranje uzlazno po vrijednostima:';

    sort( $primeNumbers );
    echo '<br>';
    print_r($primeNumbers);

    echo '<br><br>';
    echo 'Sortiranje uzlazno po kljucu:';

    ksort( $primeNumbers );
    echo '<br>';
    print_r($primeNumbers);

    echo '<br><br>';
    echo 'Sortiranje silazno po kljucu:';

    krsort( $primeNumbers );
    echo '<br>';
    print_r($primeNumbers);

    echo '<br><br>';
    echo 'Visedimenzionalni niz vjezba 2 <br>';

    $users = [
        [
            'ime'     => 'Luka',
            'prezime' => 'Lukic',
            'godine'  => 25,
            'spol'    => 'Muski'
        ],
        [
            'ime'     => 'Ivan',
            'prezime' => 'Horvat',
            'godine'  => 28,
            'spol'    => 'Muski'
        ]
    ];

    echo 'Cijeli niz: <br>';
    print_r( $users );

    echo '<br><br>';

    unset( $users[0]['spol'] );
    unset( $users[1]['spol'] );
    echo 'Niz nakon uklanjanja kljuca "spol" <br>';
    print_r( $users );

    echo '<br><br>';

    $users[] = [
        'ime'     => 'Ivan',
        'prezime' => 'Horvat',
        'godine'  => 28
    ];

    echo 'Ddoan novi korisnik u niz: <br>';
    print_r( $users );






?>