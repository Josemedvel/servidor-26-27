<?php
class Integer{
	private string $hola = "hola";
	public int $value = 0;
	public function __construct(int $value){
		$this->value = $value;
	}
	public function equals(Integer $other){
		return $this->value === $other->value;
	}
	public function __serialize(){
		return [
                        "hola" => $this->hola,
			"value" => $this->value,
			];
	}
}
$int_1 = new Integer(3);
$int_2 = new Integer(5);
echo $int_1->equals($int_2) ? "V" : "F";
echo "<br>";
print_r($int_1);
$serial = serialize($int_1);
$int_reconstruido = unserialize($serial);
var_dump($int_reconstruido);
echo $int_reconstruido->value;
$codificacion = json_encode($int_1);
echo "<br>";
echo $codificacion;