<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../assets/style.css'>
        <title>Upload word</title>
    </head>
    <body>
    
        <h1> Drugi parcijalni ispit </h1>
        <br>

        <form action="#" method="POST">
            <label>Upišite riječ: </label>
            <input type="text" id="word" name="word"><br>

            <button type="submit"> Pošalji </button>
        </form>

        <?php printData(); ?>

    </body>

</html>

<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    if( !empty($_POST['word']) ){
      getWord( $_POST['word'] );
    }else {
        echo "Polje je prazno!";
    }
}

function getWord( $value ){

    $word = htmlspecialchars( $value );

    $newWord = [
        'word'                 => $word,
        'number_of_letters'    => strlen( $word ),
        'number_of_consonants' => numOfVowelsOrConsonants( $word ),
        'number_of_vowels'     => numOfVowelsOrConsonants( $word, true ),
    ];
    
    $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/parcijalni2/uploads';
    $filePath  = $uploadDir.'/words.json';
    
    //ČITANJE IZ words.json
    $dataJson = file_get_contents( $filePath );
    
    if( !empty( $dataJson ) ){
        $data = json_decode( $dataJson, true );
        array_push( $data, $newWord );
    }else {
        $data[] = $newWord;
    }
    
    // DODAVANJE U words.json
    $uploadData = json_encode( $data );
    $result     = file_put_contents( $filePath, $uploadData );
    
    if( $result ){
        header( "Location:#" );
    }else {
        echo 'Neuspješno dodavanje!';
    }

}

function numOfVowelsOrConsonants( $word, $vowels = false ){
    $consonants = [ 'a', 'e', 'i', 'o', 'u' ];
    $countVowel = 0;
    $countCons  = 0;

    foreach( str_split( $word ) as $letter ){
        if( in_array( $letter, $consonants ) ) {
            $countVowel++;
        }else {
            $countCons++;
        }
    }
    return $vowels ? $countVowel : $countCons;
}

function printData(){
    $filePath  = $_SERVER['DOCUMENT_ROOT'].'/parcijalni2/uploads/words.json';
    if( file_exists( $filePath ) && $dataJson = file_get_contents( $filePath ) ){
    ?>
     <table>
            <thead>
                <tr>
                    <th>Riječ</th>
                    <th>Broj slova</th>
                    <th>Broj suglasnika</th>
                    <th>Broj samoglasnika</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $data = json_decode( $dataJson, true );
                    foreach( $data as $word ){
                        echo '<tr>';
                        foreach( $word as $value ){
                            echo "<td> $value  </td>";
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    <?php
    }else {
        echo 'Nema podataka za ispis!';
    }
}
