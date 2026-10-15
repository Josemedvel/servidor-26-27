<?php
declare(strict_types = 1);
/*if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["fields"]) && htmlspecialchars(trim($_POST["fields"])) != ""){
        $numCampos = htmlspecialchars(trim($_POST["fields"]));
        if(!is_numeric($numCampos)){
            header("Location: /serv-26-27/ut1/formularios_01/form_numero_numeros.php");
            exit;
        }
        $numCamposEntero = (int)$numCampos;
    }else{
        header("Location: /serv-26-27/ut1/formularios_01/form_numero_numeros.php");
        exit;
    }
}else{
    http_response_code(405);
    header("Allow: POST");
    exit;
}*/

// la petición no es POST
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    http_response_code(405);
    header("Allow: POST");
    exit;
}
// el campo no existe o es "" o no es una cadena numérica
if(!isset($_POST["fields"]) || htmlspecialchars(trim($_POST["fields"])) == "" || !is_numeric(htmlspecialchars(trim($_POST["fields"])))){
    header("Location: /serv-26-27/ut3/formularios_01/form_numero_numeros.php");
    exit;
}
$numCampos = htmlspecialchars(trim($_POST["fields"]));
$numCamposEntero = (int)$numCampos;
if($numCamposEntero <= 0){
    header("Location: /serv-26-27/ut3/formularios_01/form_numero_numeros.php");
    exit;
}
?>
<html>
    <head>
        <title>Números para media</title>
    </head>
    <body>
        <form action="sort.php" method="post">
            <?php for($i = 0; $i < $numCamposEntero; $i++):?>
            <label for="num_<?=$i?>">Número <?=$i?>:</label>
            <input type="number" id="num_<?=$i?>" name="numeros[]">
            <br>
            <?php endfor;?>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
