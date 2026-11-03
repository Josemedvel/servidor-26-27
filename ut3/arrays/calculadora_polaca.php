<?php
function evaluate($expr) {
    $stack = [];
    $tokens = preg_split('/\s+/', trim($expr));

    foreach ($tokens as $t) {
        if (is_numeric($t)) {
            array_unshift($stack, (float)$t);
            continue;
        }

        if (count($stack) < 2) {
            return [0, "Error de sintaxis: faltan operandos"];
        }

        $b = array_shift($stack);
        $a = array_shift($stack);

        try {
            $res = match ($t) {
                "+"  => $a + $b,
                "-"  => $a - $b,
                "*"  => $a * $b,
                "/"  => $b == 0 
                        ? throw new Exception("División por cero") 
                        : $a / $b,
                "**" => $a ** $b,
                default => null
            };
        } catch (Exception $e) {
            return [0, "Error aritmético: Intento de división por 0"];
        }

        if ($res === null) {
            return [0, "Error sintáctico: Operador no conocido"];
        }

        array_unshift($stack, $res);
    }

    if (count($stack) !== 1) {
        return [0, "Error sintáctico: expresión no válida"];
    }

    return [$stack[0], null];
}

// Pruebas
$tests = [
    "3 0 -",
    "5 3 -",
    "3 5 -",
    "2 3 **",
    "10 2 /",
    "3 0 /",
    "4 2 + 3 *",   // (4+2)*3 = 18
    "4 2 3 * +",   // 4 + (2*3) = 10
];

foreach ($tests as $expr) {
    $res = evaluate($expr);
    echo $expr . " → ";
    echo isset($res[1]) ? $res[1] : $res[0];
    echo "\n";
}