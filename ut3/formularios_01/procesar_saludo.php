<?php

if(isset($_POST["user"])){
    echo "<h1>Bienvenido de nuevo " . htmlspecialchars($_POST['user']) . " </h1>";
}else{
    echo "<p>No has metido la información</p>";
}