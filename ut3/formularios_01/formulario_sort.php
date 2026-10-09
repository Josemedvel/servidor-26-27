<form method="post" action="sort.php">
<?php
for($i = 0; $i < 3; $i++){
    echo "<label for='inp_$i'>Número $i:</label>";
    echo "<input type='number' id='inp_$i' name='numeros[]'>";
    echo "<br>";
}
?>
    <input type="submit" value="Enviar">
</form>