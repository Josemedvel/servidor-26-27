<html>
    <head>
        <title>Calculadora 01</title>
    </head>
    <body>
        <form action="#" method="get">
            <input type="text" name="operando1">
            <select name="operador">
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="operando2">
            <br>
            <input type="submit" value="Enviar">
        </form>
        <?php
        if(isset($_GET["operando1"], $_GET["operando2"], $_GET["operador"])
                && is_numeric(htmlspecialchars(trim($_GET["operando1"])))
                && is_numeric(htmlspecialchars(trim($_GET["operando2"])))
                && htmlspecialchars(trim($_GET["operando1"])) != ""){
            
            $operador = htmlspecialchars(trim($_GET["operador"]));
            $op1 = (float)htmlspecialchars(trim($_GET["operando1"]));
            $op2 = (float)htmlspecialchars(trim($_GET["operando2"]));
            
            switch($operador){
                case "plus":
                    echo $op1 + $op2;
                    break;
                default:
                    echo "NO LO SÉ";
            }
        }
        ?>
    </body>
</html>


