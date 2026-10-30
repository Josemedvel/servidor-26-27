<?php
session_start();
?>
<html>
    <head>
        <title>Carrito</title>
        <style>
            td, th{
                margin: 10px 0px 10px 0px;
                padding: 5px;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        if(isset($_COOKIE["carrito"])){
            $carrito = json_decode($_COOKIE["carrito"], true);
        }else{
            $carrito = [];
        }

        srand(0);
        $precios = [];
        $total = 0;
        for($i = 0; $i < 10; $i++){
            $precios["producto_".$i] = rand() % 6 + 5;
        }
        $_SESSION["precios"] = $precios;

        echo "<h1>Carrito de la compra</h1>";
        if(count($carrito) == 0){
            echo "<h2>Añade productos al carrito para continuar<h2>";
        }else{
            echo <<<FORM
            <table>
            <thead>
            <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            FORM;
            foreach($carrito as $id => $numElem){
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$numElem</td>";
                echo "<td>$precios[$id]€</td>";
                $total += $numElem * $precios[$id];
                echo "<td>". $numElem * $precios[$id] ."€</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
        <br>
        <h2>Total: <?=$total?>€</h2>
        <form action="comprar.php" method="post">
            <input type="submit" name="compra" value="Comprar">
        </form>
        <a href="productos.php"><button>Seguir comprando</button></a>
        <br>
    </body>
</html>

