<?php 

function printTable2( $dataArr ){

    $isHeaderPrint = false;
    echo '<table>';
    echo '<thead>';
        foreach( $dataArr as $value ){
            if( !$isHeaderPrint ){
                echo '<tr>';
                    foreach( $value as $headerKey  => $headerVal )
                        echo '<th>'.$headerKey.'</th>'; 
                echo '</tr>';
            }
            $isHeaderPrint = true;
        }
    echo '</thead>';
    echo '<tbody>';

        foreach( $dataArr as $cellData ){
            echo '<tr>';
                foreach( $cellData as $val ){
                    echo '<td>'.$val.'</td>'; 
                }
            echo '</tr>';
        }

    echo '<tbody>';
    echo '</table>';
}

function printTable($array)
{
    echo '<table style="border: 1px solid black">';

    // print header row
    $isHeaderPrinted = false;
    
    foreach ($array as $item){
        if(!$isHeaderPrinted) {
            
            echo '<tr>';
            foreach ($item as $key => $cellData) {
                echo '<td style="border: 1px solid red">';
                echo "<span>$key</span>";
                echo '</td>';
            }
            echo '</tr>';
            
        }
        $isHeaderPrinted = true;
    }

    // print table rows
    foreach ($array as $item){
        echo '<tr>';
        foreach ($item as $cellData){

            echo '<td style="border: 1px solid black">';
            echo "<span>$cellData</span>";
            echo '</td>';

        }
        echo '</tr>';
    }

    echo '</table>';
}


?>
