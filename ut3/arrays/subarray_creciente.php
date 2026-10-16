<?php

$arr = [2,3,2,3,5];

function subarray_creciente($arr){
    if(count($arr) == 0){
        return [];
    }
    $inicio = 0;
    $final = 0;
    $largoActual = 0;
    $largoMax = 0;
    $ultimoValor = $arr[0];
    $inicioMax = 0;
    $finalMax = 0;
    foreach($arr as $i => $v){
        if($v >= $ultimoValor){ // [2,2,2,3,4]
            $final++;
            $largoActual++;
            if($largoActual > $largoMax){
                $largoMax = $largoActual;
                $inicioMax = $inicio;
                $finalMax = $final;
            }
        }else{ // reiniciar
            $inicio = $i;
            $final = $i;
        }
        $ultimoValor = $v;
    }
    $resultado = [];
    for($i = $inicioMax; $i <= $finalMax; $i++){
        $resultado[]=$arr[$i];
    }
    return $resultado;
}
print_r(subarray_creciente($arr));