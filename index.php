<?php

//L'e-commerce vende prodotti per gli animali.
//I prodotti saranno:
//cibo
//giochi
//accessori (cucce, guinzagli, lettiere, acquari, etc).
//I prodotti possono appartenere a una tra queste categorie:
//Cane,
//Gatto,
//Uccelli,
//Pesci
//Una volta create le classi che descrivono il nostro sistema:
//- instanziate prima tutte le categorie che ci serviranno,
//- poi create alcuni prodotti appartenenti a differenti categorie 
//- e stampate delle card contenenti i dettagli dei prodotti, 
//come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
//(prodotto, cibo, gioco, accessorio).

require_once __DIR__ . '/classes/products.php';
require_once __DIR__ . '/classes/category.php';
require_once __DIR__ . '/classes/food.php';
require_once __DIR__ . '/classes/games.php';
require_once __DIR__ . '/classes/accessories.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">


</head>
<body>

    <main class="container">
        <div class="row">
            <?php foreach ( $products as $product ){?>
                <article class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->getName()?>
                            </h5>
                            <p class="card-text"><?php echo $product->getCategory()?></p>
                        </div>
                    </div>
                </article>
            <?php } ?>    
        </div>
    </main>
    
</body>
</html>