<?php
session_start();
if(!isset($_SESSION["email"], $_SESSION["password"])){
    $_SESSION["error"] = "¡Tienes que autenticarte antes!";
    header("location: formulario.php");
    exit;
}
?>
<h1>Bienvenido <?= $_SESSION["email"]?></h1>
<h2>Tu contraseña es <?= $_SESSION["password"]?></h2>