<?php
$host="localhost";
$username="root";
$password = "";
$db = "prueba";
$port = 3307;
$conn = new mysqli($host, $username, $password, $db, $port);
$stmt = $conn->prepare("SELECT nombre FROM usuarios WHERE id=? ;");
$id = 1;
$stmt->bind_param("i",$id);
$result = [];
$stmt->bind_result($result);
$stmt->execute();

print_r($result);