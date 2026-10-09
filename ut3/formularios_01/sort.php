<?php
// cualquier cosa que no sea POST
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    header("location: /serv-26-27/ut3/formularios_01/formulario_sort.php");
    header("Allow: POST");
    exit;
}
// que no exista la variable
if(!isset($_POST["numeros"])){
    header("location: /serv-26-27/ut3/formularios_01/formulario_sort.php");
    exit;    
}
$numeros = $_POST["numeros"];
foreach($numeros as $k => $n){
    try{
        $numeros[$k] = (int)$n;
    } catch (Exception $ex) {
        $numeros[$k] = 0;
    }
}
/*
foreach($numeros as $n){
    var_dump($n);
    echo "<br>";
}*/
function bubble($numeros){
    do{
        $ordenado = True;
        for($i = 0; $i < count($numeros) - 1; $i++){
            if($numeros[$i] > $numeros[$i + 1]){ // numero mas grande encontrado a la izq
                $aux = $numeros[$i];
                $numeros[$i] = $numeros[$i + 1];
                $numeros[$i + 1] = $aux;
                $ordenado = False;
            }
        }
    }while(!$ordenado);
    return $numeros;
}

echo implode(" --> ", bubble($numeros));
