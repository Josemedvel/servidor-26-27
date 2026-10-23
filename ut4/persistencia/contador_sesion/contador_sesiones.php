<?php
require_once "carga_sesion_cont.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["add"])){
        $contador++;
        $_SESSION["contador"] = $contador;
    }elseif(isset($_POST["sub"])){
        $contador--;
        $_SESSION["contador"] = $contador;
    }
}
?>

<html>
    <head>
        <title>Contador sesiones</title>
    </head>
    <body>
        <form action="#" method="post">
            <input type="submit" value="+" name="add">
            <h1><?=$contador?></h1>
            <input type="submit" value="-" name="sub">
        </form>
    </body>
</html>
