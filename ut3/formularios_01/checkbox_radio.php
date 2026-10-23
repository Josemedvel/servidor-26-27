<html>
    <head>
        <title>Checkbox y Radio</title>
    </head>
    <body>
        <form action="#" method="post">
            <input type="radio" name="work" value="employed">Empleado
            <br>
            <input type="radio" name="work" value="unemployed">Desempleado
            <br>
            <input type="radio"name="work" value="freelance">Autónomo
            <br>
            <input type="checkbox" name="pet[]" value="dog">Perro
            <br>
            <input type="checkbox" name="pet[]" value="cat">Gato
            <br>
            <input type="checkbox" name="pet[]" value="turtle">Tortuga
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>



<?php
print_r($_POST);
?>