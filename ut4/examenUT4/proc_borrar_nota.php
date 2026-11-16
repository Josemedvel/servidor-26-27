<?php
if(!isset($_POST["borrar"], $_POST["id"]) || trim(htmlspecialchars($_POST["id"])) == ""){
    $_SESSION["error"] = "No se ha enviado el id de la nota a borrar";
    header("Location: notas.php");
    exit;
}
$id = trim(htmlspecialchars($_POST["id"]));
$notas = [];
if(isset($_COOKIE["notas"])){
    $notas = json_decode($_COOKIE["notas"], true);
}

if(isset($notas[$id])){
    unset($notas[$id]);
}
setcookie("notas", json_encode($notas), time() + 3600 * 24 * 7);
header("Location: notas.php");
exit;