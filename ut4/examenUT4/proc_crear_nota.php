<?php
session_start();
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    header("Allow: POST");
    exit;
}
if(!isset($_POST["titulo"]) || trim(htmlspecialchars($_POST["titulo"])) === ""){
    $_SESSION["error"] = "El formulario no puede enviarse con campos vacíos";
    header("Location: notas.php");
    exit;
}

$titulo = trim(htmlspecialchars($_POST["titulo"]));
$nuevoId = uniqid();
$fecha = date("Y-m-d H:i:s", time());

$notas = [];
if(isset($_COOKIE["notas"])){
    $notas = json_decode($_COOKIE["notas"], true);
}
$notas[$nuevoId] = ["id" => $nuevoId, "titulo" => $titulo, "fecha" => $fecha];

setcookie("notas", json_encode($notas), time() + 3600 * 24 * 7);


$_SESSION["alert"] = "Nota creada";
header("Location: notas.php");
exit;
