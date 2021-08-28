<?php
function finder($dg){
    for ($i = 0; i < strlen($dg) - 1; ++$i){
        if ($dg[$i] == ' '){
            continue;
        }
        if (substr_count($dg, $dg[$i]) > 1){
            return $dg[$i];
            break;}
    }
}
?>