<?php
require_once "comprobarAutenticacion.php";
?>
<h1>Bienvenido <?= $_SESSION["email"]?></h1>
<h2>Tu contraseña es <?= $_SESSION["password"]?></h2>