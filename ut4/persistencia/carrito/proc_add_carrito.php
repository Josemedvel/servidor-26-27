<?php
if(!isset($_POST["producto"]) || htmlspecialchars(trim($_POST["producto"])) === ""){
    header("location: productos.php");
    exit;
}
$idProducto = htmlspecialchars(trim($_POST["producto"]));

if(isset($_COOKIE["carrito"])){
    $carrito = json_decode($_COOKIE["carrito"], true);
}else{
    $carrito = [];
}

if(isset($carrito[$idProducto])){
    $carrito[$idProducto]++;
}else{
    $carrito[$idProducto] = 1;
}

setcookie("carrito", json_encode($carrito), time() + 3600 * 24 * 7);
header("location: mostrar_carrito.php");
exit;