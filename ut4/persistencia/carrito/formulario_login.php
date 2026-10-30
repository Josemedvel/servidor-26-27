<?php
session_start();
?>

<html>
    <head>
        <title>Formulario login</title>
    </head>
    <body>
        <form action="proc_login.php" method="post">
            <p><label for="email">Correo electrónico:</label> <input type="email" name="email" id="email" placeholder="usuario@dominio.xyz"></p>
            <p><label for="password">Contraseña:</label> <input type="password" name="password" id="password" placeholder="Mínimo 8 caracteres"></p>
            <input type="submit" value="Enviar">
        </form>
        <?php
        if(isset($_SESSION["error"])){
            echo "<span style='color:red;font-weight:bold;'>" . $_SESSION["error"] . "</span>";
            unset($_SESSION["error"]);
        }
        ?>
    </body>
</html>
