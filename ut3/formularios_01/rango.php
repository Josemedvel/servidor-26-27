<html>
    <head>
        <title>Valor slider</title>
    </head>
    <body>
        <form action="#" method="post">
            <label for="deslizador">Número:</label>
            <input type="range" name="valor" id="deslizador" min="0" max="100">
            <span id="valor_des"></span>
            <input type="submit" value="Enviar">
        </form>
        <script>
            let des = document.querySelector("#deslizador");
            console.log(des.value);
            let span = document.querySelector("#valor_des");
            span.innerHTML = des.value;
            
            des.addEventListener("change", () => span.innerHTML = des.value);
        </script>
    </body>
</html>



<?php
    print_r($_POST);
?>