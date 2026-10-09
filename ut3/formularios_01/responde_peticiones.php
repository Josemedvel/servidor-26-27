<?php
if($_SERVER["REQUEST_METHOD"] === "GET"){ // mostramos un formulario
    echo <<<FORM
    <form method="post" action="http://127.0.0.1/serv-26-27/ut3/formularios_01/responde_peticiones.php">
    <p><input type="text" name="texto"/></p>
    <p><input type="submit" name="enviar" value="Enviar"/></p>
    </form>
    FORM;
}else if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(!isset($_POST["texto"])){
        header("location: #");
        exit;
    }else{
        $texto = $_POST["texto"];
        if(trim(htmlspecialchars($texto)) != ""){
            $texto = trim(htmlspecialchars($texto));
            echo $texto;
        }
        else{
            header("location: #");
            exit;
        }
    }
}else if($_SERVER["REQUEST_METHOD"] === "DELETE"){
    echo "Borrando información";
}else if($_SERVER["REQUEST_METHOD"] === "PUT"){
    echo "Actualizando información";
}else{
    http_response_code(405);
    header("Allow: GET, POST, DELETE, PUT");
    exit;
}