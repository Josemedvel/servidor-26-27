<?php
class Persona{
    public static int $numeroPersonas = 0;
    public string $nombre = "";
    public int $edad = 0;
    public function __construct(string $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        self::$numeroPersonas++;
    }
    public function __destruct() {
        self::$numeroPersonas--;
    }
}
class Alumno extends Persona{
    public final string $NIA;
    public string $id = 10;
    public function __construct(string $nombre, int $edad, string $NIA) {
        parent::__construct($nombre, $edad);
        $this->NIA = $NIA;
    }
}

$p1 = new Persona("Julio", 30);
$p2 = new Persona("Ana María", 48);
$p1 = "hola";
echo Persona::$numeroPersonas;
echo "<br>";
$a1 = new Alumno("Pedro", 16, "718234634");
echo Alumno::$numeroPersonas;