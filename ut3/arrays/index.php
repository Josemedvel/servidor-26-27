<html>
    <head>
        <title>title</title>
        <style>
            .numero{
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <?php
$arr1 = [245636 => 1, 1 => 2, 7 => 3];
$arr2 = array( "1" => 2, "2" => 3);
echo "<pre>";
print_r($arr1 + $arr2);
echo "<br>";
print_r($arr1 == $arr2 ? "V" : "F");
echo "<br>";
print_r($arr1 === $arr2 ? "V" : "F");

echo "<br>";
$arrRara = array_diff($arr1, $arr2);
print_r(array_values($arrRara));
echo "<br>";
$arrNueva = [];
array_push($arrNueva, 4);
$arrNueva[count($arrNueva)] = 5;
$arrNueva[30] = 10;
print_r($arrNueva);
echo "</pre>";

echo "<ol>";
for($i = 0; $i < count($arrNueva); $i++){
    echo "<li>".$arrNueva[$i]."</li>";
}
echo "</ol>";

array_unshift($arrNueva, "hola");
$arrAlumnos = [];
echo "<pre>";
print_r($arrNueva);
$arrAlumnos["Javi"] = ["213451", "javi@gmail.com"];
$arrAlumnos["Julia"] = ["213452", "julia@gmail.com"];
print_r($arrAlumnos);
array_pop($arrNueva);
print_r($arrNueva);
array_splice($arrNueva, 1, 4, 27);
$arrNueva[2] = "Hola";
print_r($arrNueva);
echo "<br>";
echo "</pre>";
$numerosAl10 = [];
for($i = 1; $i <= 10; $i++){
    $numerosAl10[] = $i;
}

function duplicado($num){
    return $num*2;
}

$arrTransMap = array_map(Fn ($num) => duplicado($num) ,$numerosAl10);
/*
// funciones anónimas
$arrTransMap = array_map(function ($num){
    return $num * 2;
}, $numerosAl10);
*/
/*
// funciones flecha
$arrTransMap = array_map(Fn ($n) => $n * 2, $numerosAl10);
*/
/*
 // asignacion de callable a variable
 $f = Fn ($num) => $num * 2;//function ($num) {return $num * 2;};
 
$arrTransMap = array_map($f, $numerosAl10);
*/

print_r($arrTransMap);
echo "<br>";
$sumaNumeros = array_reduce($numerosAl10, Fn ($num, $acc) => $num + $acc, 0);
print_r($numerosAl10);
echo "<br>";
echo $sumaNumeros;
echo "</br>";

// numero de impares
//TODO

// array de valores impares
$numImpares = array_filter($numerosAl10, Fn ($num) => $num % 2 != 0);
print_r($numImpares);
echo "<br>";
$mayoresA5 = array_filter($numerosAl10, function ($num){
  return $num > 5;  
});
print_r($mayoresA5);

$diasSemana = [1,2,3,4,5,6,7];
$nombresDias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
echo "<br>";
echo "<pre>";
print_r(array_combine($diasSemana, $nombresDias));
echo "</pre>";

echo "<br>";

// creación array 3x3 aleatoria
$array = [];
for($i = 0; $i < 3; $i++){
    $fila = [];
    for($j = 0; $j < 3; $j++){
        $fila[] = rand() % 11;
    }
    $array[] = $fila;
}
echo "<br>";
echo "<pre>";
print_r($array);
echo "</pre>";
foreach($array as $fila){
    foreach($fila as $col){
        echo "<span class='numero'>$col</span>";
    }
    echo "<br>";
}
$num = 5;
function modificar(&$num){
    $num = 10;
}
modificar($num);
echo $num;
echo "<br>";
$arrAMano = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
$arrAMano2 = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9),
);

function mediaExamenes(...$notas){
    $n = count($notas);
    $suma = 0;
    foreach($notas as $nota){
        $suma += $nota;
    }
    if($n == 0){
        return 0;
    }
    return $suma / $n;
}
echo mediaExamenes(2,4,7,10,8,4,3,7,8,6,5,9);

function mediaPonderada($pesos, ...$notas){
    if(count($pesos) != count($notas)){
        return 0;
    }
    $notaFinal = 0;
    for($i = 0; $i < count($pesos); $i++){
        $notaFinal += $pesos[$i] * $notas[$i];
    }
    return $notaFinal;
}
echo "<br>";
echo "<pre>";
print_r(mediaPonderada([0.25, 0.5,0.25], 8, 6, 5));
echo "</pre>";
echo "<br>";
function hacerVestidoNovia($hombros, $pecho, $cadera, $cintura, $color="blanco"){
    echo "Tejiendo vestido con medidas:<br>";
    echo "<ul>";
    echo "<li>Hombros:$hombros</li>";
    echo "<li>Pecho:$pecho</li>";
    echo "<li>Cadera:$cadera</li>";
    echo "<li>Cintura:$cintura</li>";
    echo "<li>Color:$color</li>";
    echo "</ul>";
}
hacerVestidoNovia(60, 90, 60, 70, "negro");
$suma = function($a, $b){
    return $a + $b;
};
echo "<br>";
echo $suma(2,4);
$media = "mediaExamenes";
//echo $media(2,4); // buscar

echo "<br>";
print_r(array_filter([2,3,3,4,5,6,7], function($num){
    if($num == 3){
        return True;
    }else{
        return False;
    }
}));

// fibonacci
function fib($n){
    if($n == 0){
        return 0;
    }else if($n == 1){
        return 1;
    }else{
        return fib($n - 1) + fib($n - 2);
    }
}
echo "<br>";
echo fib(6);
echo "<br>";
// suma recursiva
function sumaRec($array){
    if(count($array) == 0){
        return 0;
    }
    $num = array_shift($array);
    return $num + sumaRec($array);
}
//factorial
function factorial($n){
    if($n < 0){
        return 0;
    }else if($n == 0){
        return 1;
    }else{
        return $n * factorial($n - 1);
    }
}

echo sumaRec([1,2,3]);
?>
    </body>
</html>

