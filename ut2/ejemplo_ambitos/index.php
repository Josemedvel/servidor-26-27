<?php
$a = 5;
include "variables.php";
echo $a;
$GLOBALS["a"] = 30;
echo "<br>";
echo $b;
function llamarA(){
    global $a;
    $a = 4;
    echo $GLOBALS["a"];
    echo "<br>";
    echo $a;
}
llamarA();
print_r($GLOBALS);