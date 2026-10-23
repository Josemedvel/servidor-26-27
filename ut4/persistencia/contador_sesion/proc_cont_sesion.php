<?php
session_start();

if(isset($_SESSION["contador"])){
    $contador = $_SESSION["contador"];
}else {
    $contador = 0;
    $_SESSION["contador"] = $contador;
}
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["add"])){
        $contador++;
        $_SESSION["contador"] = $contador;
    }elseif(isset($_POST["sub"])){
        $contador--;
        $_SESSION["contador"] = $contador;
    }
}
header("location:contador_sesiones_sin_proc.php");
