<?php
if(isset($_COOKIE["contador"])){
    $contador = $_COOKIE["contador"];
}else{
    $contador = 0;
}
if(isset($_POST["add"])){
    $contador++;
}elseif($_POST["sub"]){
    $contador--;
}elseif($_POST["clear"]){
    setcookie("contador", "", time() - 3600);
    header("location: formulario.php");
    exit;
}else{
    http_response_code(500);
    header("location: formulario.php");
    exit;
}
setcookie("contador", $contador, time() + 30 * 60);
header("location: formulario.php");
exit;