<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css"/>
        <style>
            #productos{
                display: flex;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <form id="productos" action="proc_add_carrito.php" method="post">
            <?php for($i = 0; $i < 10; $i++):?>
            <div class="card" style="width: 18rem;">
                <img src="https://disfracestorrente.com/151506-large_default/pelota-de-playa-hinchable-multicolor-51-cm.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pelota de playa</h5>
                  <button class="btn btn-primary" type="submit" name="producto" value="producto_<?=$i?>">Añadir al carrito</button>
                </div>
            </div>
            <?php endfor;?>
        </form>
            
        <script url="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js">
    </body>
</html>
