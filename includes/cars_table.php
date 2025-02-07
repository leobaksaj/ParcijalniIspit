<?php

$cars = [
    "Audi" => [
        "A4" => [
            "Godina"        => 2020,
            "Snaga"         => "150 KS",
            "Cijena"        => "30.000",
            "Stanje_zalihe" => 0,
            "Boja"          => "Crna",
            "Tip_motora"    => "Benzin"
        ],
        "Q5" => [
            "Godina"        => 2021,
            "Snaga"         => "190 KS",
            "Cijena"        => "45.000",
            "Stanje_zalihe" => 2,
            "Boja"          => "Bijela",
            "Tip_motora"    => "Dizel"
        ]
    ],
    "BMW" => [
        "Serija 3" => [
            "Godina"        => 2019,
            "Snaga"         => "184 KS",
            "Cijena"        => "35.000",
            "Stanje_zalihe" => 0,
            "Boja"          => "Siva",
            "Tip_motora"    => "Benzin"
        ],
        "X5" => [
            "Godina"        => 2022,
            "Snaga"         => "265 KS",
            "Cijena"        => "60.000",
            "Stanje_zalihe" => 3,
            "Boja"          => "Plava",
            "Tip_motora"    => "Hibrid"
        ]
    ],
    "Mercedes" => [
        "C-Klasa" => [
            "Godina"        => 2021,
            "Snaga"         => "170 KS",
            "Cijena"        => "38.000",
            "Stanje_zalihe" => 4,
            "Boja"          => "Crvena",
            "Tip_motora"    => "Benzin"
        ],
        "GLE" => [
            "Godina"        => 2023,
            "Snaga"         => "330 KS",
            "Cijena"        => "80.000",
            "Stanje_zalihe" => 0,
            "Boja"          => "Crna",
            "Tip_motora"    => "Dizel"
        ]
    ],
    "Volkswagen" => [
        "Golf 8" => [
            "Godina"        => 2021,
            "Snaga"         => "130 KS",
            "Cijena"        => "25.000",
            "Stanje_zalihe" => 7,
            "Boja"          => "Zelena",
            "Tip_motora"    => "Benzin"
        ],
        "Passat" => [
            "Godina"        => 2020,
            "Snaga"         => "150 KS",
            "Cijena"        => "32.000",
            "Stanje_zalihe" => 2,
            "Boja"          => "Srebrna",
            "Tip_motora"    => "Dizel"
        ]
    ],
    "Toyota" => [
        "Corolla" => [
            "Godina"        => 2022,
            "Snaga"         => "140 KS",
            "Cijena"        => "27.000",
            "Stanje_zalihe" => 0,
            "Boja"          => "Bijela",
            "Tip_motora"    => "Hibrid"
        ],
        "RAV4" => [
            "Godina"        => 2023,
            "Snaga"         => "220 KS",
            "Cijena"        => "40.000",
            "Stanje_zalihe" => 3,
            "Boja"          => "Crna",
            "Tip_motora"    => "Hibrid"
        ]
    ]
];

?>
<h2> Popust 15% na automobile starije od 3 godine! </h2>
<table>
<thead>
    <tr>
        <th>Marka</th>
        <th>Model</th>
        <th>Godina proizvodnje</th>
        <th>Boja</th>
        <th>Tip motora</th>
        <th>Snaga(ks)</th>
        <th>Dostupnost</th>
        <th>Osnovna cijena (€)</th>
        <th>Popust</th>
        <th>Cijena s popustom (€)</th>
    </tr>
</thead>
<tbody>
    <?php 
       foreach( $cars as $carKey => $car ){
           foreach( $car as $modelKey => $model ){
                $fmt                = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
                $stockStatus        = ($model['Stanje_zalihe'] > 0 ) ? 'Dostupno' : 'Nedostupno';
                $stockStatusCss     = ($model['Stanje_zalihe'] > 0 ) ? 'active' : 'inactiv';
                $currentYear        = date('Y');
                $correctFormatPrice = str_replace(".", "", $model['Cijena']);
                $currentPrice       = numfmt_format_currency($fmt, $correctFormatPrice, "EUR");
                $carAge             = $currentYear - $model['Godina'];
                $discountCss        = '-';
                $discountPrice      = '-';

                if( $carAge > 3 ){
                    $discount      = 15; //popust 15%
                    $discountCss   = "$discount%";
                    $correctPrice  = $correctFormatPrice - ( $correctFormatPrice * $discount / 100 );
                    $discountPrice = numfmt_format_currency($fmt, $correctPrice, "EUR");
                }

                echo '<tr>';   
                echo '<td>'.$carKey.'</td>'; 
                echo '<td>'.$modelKey.'</td>'; 
                echo '<td>'.$model['Godina'].'</td>'; 
                echo '<td>'.$model['Boja'].'</td>'; 
                echo '<td>'.$model['Tip_motora'].'</td>'; 
                echo '<td>'.$model['Snaga'].'</td>'; 
                echo '<td class="'.$stockStatusCss.'">'.$stockStatus.'</td>'; 
                echo '<td>'.$currentPrice.'</td>'; 
                echo '<td>'.$discountCss.'</td>'; 
                echo '<td>'.$discountPrice.'</td>'; 
                echo '</tr>';
            }
        }
    ?>
</tbody>
</table>



