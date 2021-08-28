<?php
function shower(array $array){
    foreach($array as $item){
        echo "$item<br>";
    }
}

function split(string $string){
    $array = []; $digit = ''; $string = $string.' ';
    for ($i = 0; $i < strlen($string); $i++){
        if ($string[$i] != ' '){         
            $digit = $digit.$string[$i];}
        else{
            array_push($array, $digit);
            $digit = '';}
    }
    return $array;
}

function finder(array $array_of_digits){
    for($i = 0; $i < count($array_of_digits); $i++){
        for($j = 0; $j <= count($array_of_digits); $j++){
            if ($j != $i){
                if ($array_of_digits[$i] == $array_of_digits[$j]){
                    return $array_of_digits[$i];
                    break 2;
                }

            }
        }   
    }
}
?>