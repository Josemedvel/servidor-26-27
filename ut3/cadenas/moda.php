<?php

function moda1($cadena){
    $letras = mb_str_split($cadena);
    $num_max_rep = 0;
    $letra_mas_rep = "";
    for($i = 0; $i < count($letras); $i++){
        $num_rep = 0;
        for($j = 0; $j < count($letras); $j++){
            if($letras[$i] == $letras[$j]){
                $num_rep++;
                if($num_rep > $num_max_rep){
                    $letra_mas_rep = $letras[$i];
                    $num_max_rep = $num_rep;
                }
            }
        }
    }
    return $letra_mas_rep;
}

function moda2($cadena){
    $repeticiones = [];
    $letras = mb_str_split($cadena);
    $num_max_rep = 0;
    $letra_mas_rep = "";
    foreach($letras as $l){
        if(isset($repeticiones[$l])){
            $repeticiones[$l]++;
        }else{
            $repeticiones[$l] = 1;
        }
        if($repeticiones[$l] > $num_max_rep){
            $letra_mas_rep = $l;
            $num_max_rep = $repeticiones[$l];
        }
    }
    return $letra_mas_rep;
}

echo moda2("serpientes");