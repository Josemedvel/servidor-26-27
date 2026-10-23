<?php
session_start();
if(isset($_SESSION["contador"])){
    $contador = $_SESSION["contador"];
}else {
    $contador = 0;
    $_SESSION["contador"] = $contador;
}