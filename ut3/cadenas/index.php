<?php
$cad_1 = "asdfasdf";
$cad_2 = 'asdfasdf';
$cad_3 = <<<TEXTO
        asdfasdf
        asdfasdf
        TEXTO;

$nombre = "Manuel";
$frase = "Me llamo '$nombre'";
$frase = 'Me llamo "'.$nombre.'"';
$frase = "Me llamo \"$nombre\"";
echo $frase;
echo "<br>";
$palabra = "hola";
echo mb_strlen($palabra);
echo "<br>";

// como no recorrer una cadena
for($i = 0; $i < mb_strlen($palabra); $i++){
    echo $palabra[$i] . " <br>";
}

$palabra = "ñoño";
$letras = mb_str_split($palabra);
echo "<pre>";
print_r($letras);
echo "</pre>";
echo "<br>";
