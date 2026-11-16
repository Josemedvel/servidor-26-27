<?php
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST"){
    http_response_code(405);
    header("Allow: POST");
    exit;
}
if(!isset($_POST["editar"], $_POST["id"]) || trim(htmlspecialchars($_POST["id"])) == ""){
    $_SESSION["error"] = "No se puede enviar a editar una nota sin el id";
    header("Location: notas.php");
    exit;
}

$_SESSION["nota"] = trim(htmlspecialchars($_POST["id"]));
header("Location: editar_nota.php");
exit;