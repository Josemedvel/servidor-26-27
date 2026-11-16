<?php
session_start();
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    header("Allow: POST");
    exit;
}

if(!isset($_POST["editar"], $_POST["titulo"], $_POST["id"]) || trim(htmlspecialchars($_POST["titulo"])) == ""){
    $_SESSION["error"] = "No se ha enviado a editar una nota";
    header("Location: notas.php");
    exit;
}
if(!isset($_COOKIE["notas"])){
    $_SESSIOn["error"] = "No hay notas para editar";
    header("Location: notas.php");
    exit;
}

$id = trim(htmlspecialchars($_POST["id"]));
$titulo = trim(htmlspecialchars($_POST["titulo"]));

$notas = json_decode($_COOKIE["notas"], true);
if(!isset($notas[$id])){
    $_SESSION["error"] = "No existe la nota con id $id";
    header("Location: notas.php");
    exit;
}
$notas[$id]["titulo"] = $titulo;

setcookie("notas", json_encode($notas), time() + 3600 * 24 * 7);
if(isset($_SESSION["nota"])){
    unset($_SESSION["nota"]);
}
header("Location: notas.php");
exit;

