<?php 

function luasSegitiga($alas, $tinggi) {
    //code 
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// echo luasSegitiga(5,3);
function sum(...$input) {
    $result = 0;


    foreach ($input as $value) {
        $result = $result + $value;
    }

    return $result;
}

echo sum (1,2,3);