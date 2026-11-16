<?php
session_start();
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    header("Allow: POST");
    exit;
}
if(!isset($_POST["borrarCookie"])){
    $_SESSION["error"] = "No has clicado en limpiar cookies";
    header("Location: notas.php");
    exit;
}
if(isset($_COOKIE["notas"])){
    setcookie("notas", "asdf", time() - 3600);
}
header("Location: notas.php");
exit;