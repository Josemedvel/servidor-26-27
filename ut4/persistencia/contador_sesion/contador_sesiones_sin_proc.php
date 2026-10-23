<?php
require_once "carga_sesion_cont.php";
?>
<html>
    <head>
        <title>Contador sesiones</title>
    </head>
    <body>
        <form action="proc_cont_sesion.php" method="post">
            <input type="submit" value="+" name="add">
            <h1><?=$contador?></h1>
            <input type="submit" value="-" name="sub">
        </form>
    </body>
</html>