<?php
session_start();

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    header("Allow: POST");
    exit;
}
if(!isset($_POST["email"], $_POST["password"])){
    $_SESSION["error"] = "Hay que rellenar todos los campos del formulario";
    header("Location: formulario_login.php");
    exit;
}

$email = htmlspecialchars(trim($_POST["email"]));
$password = htmlspecialchars(trim($_POST["password"]));

if($email === "" || $password === ""){
    $_SESSION["error"] = "Hay que rellenar todos los campos del formulario";
    header("Location: formulario_login.php");
    exit;
}

// entrada limpia

$emailAdmin = "admin@gmail.com";
$passAdmin = "batman";

if($email !== $emailAdmin || $password !== $passAdmin){ // no coinciden
    $_SESSION["error"] = "El email no existe o la contraseña no coincide";
    header("location: formulario_login.php");
    exit;
}
// identificación completada
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

header("location: productos.php");
exit;