<?php
session_start();

if(!isset($_SESSION["email"], $_SESSION["password"])){
    $_SESSION["error"] = "Es necesario iniciar sesión antes de comprar";
    header("Location: formulario_login.php");
    exit;
}
if(isset($_COOKIE["carrito"], $_SESSION["precios"]) || count(json_decode($_COOKIE["carrito"], true)) != 0){
    $carrito = json_decode($_COOKIE["carrito"], true);
}else{
    $_SESSION["error"] = "Añade productos al carrito antes de comprar";
    header("Location: productos.php");
    exit;
}

$total = 0;
foreach($carrito as $p => $c){
    $total += $_SESSION["precios"][$p] * $c;
}
setcookie("carrito", "", time() - 3600);
echo "<h1>Gracias por su compra de $total €, vuelva pronto.</h1>";
echo "<a href='productos.php'><button>Seguir comprando</button></a>";