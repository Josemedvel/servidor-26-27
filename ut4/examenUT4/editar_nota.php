<?php
session_start();
if(!isset($_SESSION["nota"])){
    $_SESSION["error"] = "El id de la nota no se ha enviado";
    header("Location: notas.php");
    exit;
}
$id = $_SESSION["nota"];
$notas = [];
if(!isset($_COOKIE["notas"])){
    $_SESSION["error"] = "No existe la cookie";
    header("Location: notas.php");
    exit;
}
$notas = json_decode($_COOKIE["notas"], true);
if(!isset($notas[$id])){
    $_SESSION["error"] = "No se puede editar una nota que no existe";
    header("Location: notas.php");
    exit;
}

$nota = $notas[$id];

?>

<form action="proc_editar_nota_2.php" method="post">
    <p>
        ID:<input type="text" name="id" value="<?=$id?>" disabled>
        <input type="hidden" name="id" value="<?=$id?>">
    </p>
    <p>
        Título:<input type="text" name="titulo" value="<?=$nota["titulo"]?>">
    </p>
    <p>
        Fecha:<input type="text" name="fecha" value="<?=$nota["fecha"]?>" disabled>
    </p>
    <input type="submit" name="editar" value="editar">
</form>
