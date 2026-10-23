<?php

function divide($stack){
    $b = array_shift($stack);
    $a = array_shift($stack);
    if($b == 0){
        throw new Exception("No se puede dividir por 0");
    }
    return $a / $b;
}
function subtract($stack){
    $b = array_shift($stack);
    $a = array_shift($stack);
    return $a - $b;
} 

function power($stack){
    $b = array_shift($stack);
    $a = array_shift($stack);
    return $a ** $b;
} 

function evaluate($expr){
    $stack = [];
    $tokens = mb_split("\s+", $expr);
    $resPar = 0;
    //var_dump($tokens); // lista de tokens
    foreach($tokens as $t){
        if(is_numeric($t)){ // pal stack
            array_unshift($stack, $t);
        }else{ // operador o caracter extraño
            $longitudStack = count($stack);
            if($longitudStack < 2){ // error de sintaxis, no hay operandos
                return [0, "Error de sintaxis: faltan operandos"];
            }
            try{
                $resPar = match($t){
                    "+" => array_shift($stack) + array_shift($stack),
                    "-" => subtract($stack),
                    "*" => array_shift($stack) * array_shift($stack),
                    "/" => divide($stack),
                    "**" => power($stack),
                    default => "Error sintáctico: Operador no conocido"
                };
            } catch (Exception $ex) {
                return [0, "Error aritmético: Intento de división por 0"];
            }
            if(!is_numeric($resPar)){ // error sintactico
                return [0, "Error sintáctico: Operador no conocido"];
            }
            array_unshift($stack, $resPar);
        }
    }
    // solución
    if(count($stack) != 1){ // error sintáctico
        return [0, "Error sintáctico: expresión no válida"];
    }
    return [$stack[0], null];
}

$res = evaluate("3 0 -");
if(isset($res[1])){
    echo "<p style='color:red;'>" . $res[1] ."</p>";
}else{
    echo $res[0];
}
