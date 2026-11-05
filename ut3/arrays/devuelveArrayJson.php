<?php
header("Content-Type: application/json");
$arr = [];
for($i = 0; $i < 100; $i++){
    $x = random_int(-1000,1000)/1000;
    $y = random_int(-1000,1000)/1000;
    $arr["points"][] = [$x, $y];
}
$arr["res"] = 3.14;
echo json_encode($arr);
exit;