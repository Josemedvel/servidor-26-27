<html>
    <head>
        <title>title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"><!-- comment -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body>

        <?php
$edad = 16;
if($edad >= 18):?>
<p>Puedes salir, eres mayor de edad</p>
<?php elseif($edad >= 16):?>
<p>Puedes salir, pero eres menor</p>
<?php else: ?>
<p>Eres menor de edad, no puedes salir</p>
<?php endif; ?>

<?php
echo "<br>";
$diaSemana = "Sábado";

switch ($diaSemana) {
    case "Lunes":
    case "Martes":
    case "Miércoles":
    case "Jueves":
    case "Viernes":
        echo "Es un día laborable";
        break;
    case "Sábado":
        echo "Es un día festivo";
        break;
    case "Domingo":
        echo "Es un día festivo";
        break;
    default:
        echo "No es un día válido";
        break;
}

echo "<br>";

switch ($diaSemana) {
    case "Lunes" || "Martes" || "Miércoles" || "Jueves" || "Viernes":
        echo "Es un día laborable";
        break;
    case "Sábado" || "Domingo":
        echo "Es un día festivo";
        break;
    default:
        echo "No es un día válido";
        break;
}

echo "<br>";

switch ($diaSemana): ?>
<?php case "Lunes": ?>
<h1>Oh no, es Lunes</h1>
<?php break;?>
<?php case "Martes": ?>
<h1>Oh no, es Martes</h1>
<?php break;?>
<?php default: ?>
<h1>No sé qué día es, solo conozco el Lunes</h1>
<?php endswitch; ?>

<?php
$esFestivo = match($diaSemana){
    "Lunes", "Martes", "Miércoles", "Jueves", "Viernes" => false,
    default => true,
};
echo $esFestivo ? "El día $diaSemana es festivo" : "No, triste, pero no";
echo "<br>";
$logica = false;
echo $logica ? "TRUE": "FALSE";
echo "<br>";
$i = 0;
/*while($i < 100){
    echo $i++ ."<br>";
}*/
?>
<!--   <div class="carousel-item active">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHEjz10TYGcCez0Qd6b7NNwbMLqWrhD9EJ4aWgrtqem3JYNQ6k7eZYdAE&s=10" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHEjz10TYGcCez0Qd6b7NNwbMLqWrhD9EJ4aWgrtqem3JYNQ6k7eZYdAE&s=10" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHEjz10TYGcCez0Qd6b7NNwbMLqWrhD9EJ4aWgrtqem3JYNQ6k7eZYdAE&s=10" class="d-block w-100" alt="...">
    </div> -->

<?php
$fotos = ["https://media.istockphoto.com/id/525982128/es/foto/la-gato-agresividad.jpg?s=612x612&w=0&k=20&c=6cKX9NUV8o7BD13pjRgT3-CQgpoHYLVGOEH2-DOSjj0=",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPZszdqu8tUAMFREKt6N-BnMYGH4_ps80HRMvOc-FB87GCPsGBEgBD77w&s=10"
    ];
?>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
      <?php
        $i = 0;
        while($i < count($fotos)){
            echo "<div class=\"carousel-item\" \"active\">";
            echo "<img src=\"" . $fotos[$i] . "\" class=\"d-block w-100\">";
            echo "</div>";
            $i++;
        }
      ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </body>
</html>




