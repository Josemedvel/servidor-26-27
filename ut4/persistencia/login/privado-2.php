<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css"/>
    </head>
    <body>
    <?php
            require_once 'comprobarAutenticacion.php';
            $nombres = ["Amaya", "Javier", "Carlos", "Silvia", "Pedro", "John", "Jane"];
            
            for($i = 0; $i < 10; $i++):?>
            <div class="card" style="width: 18rem;">
                <img src="https://thispersondoesnotexist.com/random-person.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $nombres[rand() % count($nombres)]?></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <?php endfor;?>
        <script url="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js">
    </body>
</html>


