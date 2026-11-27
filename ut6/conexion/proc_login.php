<?php
require_once 'Conexion.php';
if(!isset($_POST["email"], $_POST["password"])){
    header("Location: login.php");
    exit;
}

$email = htmlspecialchars(trim($_POST["email"]));
$password = htmlspecialchars(trim($_POST["password"]));

$conn = Conexion::getInstance();
$sql = "SELECT email, password FROM usuarios WHERE email=? AND password=?;";

$stmt = $conn->getConnection()->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$res_email = null;
$res_pass = null;
$stmt->bind_result($results);
$stmt->execute();
$result = $stmt->get_result();
var_dump($res_email);
var_dump($res_pass);

$conn->getConnection()->close();

