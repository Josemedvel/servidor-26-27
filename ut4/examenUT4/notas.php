<?php
session_start();
$error = "";
if(isset($_SESSION["error"])){
    $error = $_SESSION["error"];
    unset($_SESSION["error"]);
}
if($error){
    echo "<h2 style='color:red;'>$error</h2>";
}
if(isset($_SESSION["alert"])){
    echo "<script> alert('"   .  $_SESSION["alert"]  .  "')</script>";
    unset($_SESSION["alert"]);
}
?>

<form action="proc_crear_nota.php" method="post">
    <p>Ingresa el título de la nota: <input type="text" name="titulo"></p>
    <input type="submit" name="crear" value="crear">
</form>
<form action="proc_borrar_cookie.php" method="post">
    <input type="submit" name="borrarCookie" value="Limpiar Tareas">
</form>
<?php
$arrayNotas = [];
if(isset($_COOKIE["notas"])){
    $arrayNotas = json_decode($_COOKIE["notas"], true);
}
?>
<br>

<?php if(count($arrayNotas) == 0):?>
        <p>Añade alguna nota primero</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($arrayNotas as $nota):?>
        <tr>
            <td><?=$nota["titulo"]?></td>
            <td><?=$nota["fecha"]?></td>
            <td><form action="proc_borrar_nota.php" method="post">
                    <input type="submit" name="borrar" value="borrar">
                    <input type="hidden" name="id" value="<?=$nota["id"]?>">
                </form>
            </td>
            <td><form action="proc_editar_nota_1.php" method="post">
                    <input type="submit" name="editar" value="editar">
                    <input type="hidden" name="id" value="<?=$nota["id"]?>">
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php endif;?>