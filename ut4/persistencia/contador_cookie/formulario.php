<?php
if(isset($_COOKIE["contador"])){
    $contador = $_COOKIE["contador"];
}else{
    $contador = 0;
    setcookie("contador",$contador, time() + 30 * 60);
}
?>
<html>
    <head>
        <title>Contador Cookies</title>
    </head>
    <body>
        <form action="proc_cont_cookie.php" method="post">
            <input type="submit" name="add" value="+">
            <span><?= $contador ?></span>
            <input type="submit" name="sub" value="-">
            <input type="submit" name="clear" value="Limpiar cookie">
        </form>
    </body>
</html>
