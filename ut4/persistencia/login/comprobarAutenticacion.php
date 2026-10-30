<?php
session_start();
if(!isset($_SESSION["email"], $_SESSION["password"])){
    $_SESSION["error"] = "¡Tienes que autenticarte antes!";
    header("location: formulario.php");
    exit;
}
