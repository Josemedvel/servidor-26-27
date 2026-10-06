<html>
    <head>
        <title>Formulario standalone</title>
    </head>
    <body>
        <?php
        function cadenaValida($cadena){
            $cadenaSinComillas = str_replace('"', "", $cadena);
            if($cadena !== $cadenaSinComillas){
                return False;
            }
            if(trim($cadenaSinComillas) != ""){
                return True;
            }
            return False;
        }
        if(isset($_POST["nombre"]) && cadenaValida($_POST["nombre"])){
            echo "Buenas " . htmlspecialchars($_POST["nombre"]);
        }else {
            echo <<<FORM
            <form action="#" method="POST">
            <p> Nombre: <input type="text" name="nombre"></p>
            <input type="submit">
            </form>
            FORM;
        }
        ?>
    </body>
</html>
