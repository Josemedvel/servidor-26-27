<?php
header("Content-Type: application/json");
srand(0);
if(isset($_GET["dardos"])){
    $dardos = $_GET["dardos"];
}else{
    $dardos = 10;
}
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
    public function obtenerCoord(): array{
        return ["x" => $this->x, "y" => $this->y];
    }
}
class Cuadrado{
    private ?Punto $centro = null;
    private int $numAciertos = 0;
    private int $numIntentos = 0;
    private float $radio = 1;
    public function __construct() {
        $this->centro = new Punto(0, 0);
    }
    public function aproximaPi(): float{
        return 4 * $this->numAciertos/$this->numIntentos;
    }
    public function recibeDardo(): Punto{
        $escala = $this->radio * 1000;
        $nuevoDardo = new Punto((rand() % 2001 - 1000) / $escala, (rand() % 2001 - 1000) / $escala);
        $distancia = $nuevoDardo->distanciaA($this->centro);
        if($distancia <= $this->radio){ // acierto
            $this->numAciertos++;
        }
        $this->numIntentos++; 
        return $nuevoDardo;
    }
}
$objeto = [];
$diana = new Cuadrado();
for($i = 0; $i < $dardos; $i++){
    $punto = $diana->recibeDardo();
    $objeto["dardos"][] = $punto->obtenerCoord();
}
$objeto["resultado"] = $diana->aproximaPi();

echo json_encode($objeto);