<?php

function invertirCadena($cadena){
    $letras = mb_str_split($cadena);
    $resultado = ""; 
    $limite = count($letras);
    for($i = 0; $i < $limite; $i++){
        $resultado .= $letras[$limite - 1 - $i];
    }
    return $resultado;
}

function invertirCadena2($cadena){
    $letras = mb_str_split($cadena, 2);
    $resultado = []; 
    for($i = 0; $i < count($letras); $i++){
        array_push($resultado, $letras[count($letras) - 1 - $i]);
    }
    return implode("",$resultado);
}

echo "<pre>";
print_r($_SERVER);
echo "<pre>";