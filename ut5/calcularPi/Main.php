<?php
class Punto{
    private float $x = 0;
    private float $y = 0;
    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function imprimirPunto(){
        echo "Punto: [". $this->x . ", " . $this->y . "]";
    }
    public function distanciaA(Punto $otro):float{
        return sqrt(($this->x-$otro->x)**2 + ($this->y-$otro->y)**2);
    }
}
class Cuadrado{
    private ?Punto $centro = null;
    private int $numAciertos = 0;
    private int $numIntentos = 0;
    private float $radio = 1;
    public function __construct() {
        $centro = new Punto(0, 0);
    }
    public function aproximaPi(): float{
        return 4 * $this->numAciertos/$this->numIntentos;
    }
    public function recibeDardo(){
        $escala = $this->radio * 1000;
        $nuevoDardo = new Punto(random_int(-$escala, $escala) / 1000, random_int(-$escala, $escala) / 1000);
    }
    
    
}
$centroDiana = new Punto(0,0);

echo "<br>";
echo $puntoB->distanciaA($puntoA);
echo "<br>";
echo $puntoA->distanciaA($puntoB);
