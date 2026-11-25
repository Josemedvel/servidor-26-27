<?php
require_once "Conexion.php";

$conn = Conexion::getInstance();

$results = $conn->getConnection()->query("SELECT * FROM usuarios;", MYSQLI_ASSOC);
foreach($results as $r){
    print_r($r);
    echo "<br>";
}
