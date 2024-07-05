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

<!--fontawesome-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />


</head>
<body>
    <header class="conainer py-4 px-5 mx-5 my-3">
        <div class="row">
            <div class="col-12">
                <h1 >Boolshop</h1>
            </div>
        </div>
    </header>

    <main class="container">
    <div class="row">
            <div class="col-12 text-body-tertiary">
                <h2>I nostri prodotti</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ( $products as $product ){?>
                <article class="col-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-img">
                                <img src="<?php echo $product->getImage()?>" alt="" class="img-fluid">
                            </div>
                            <h5 class="card-title">
                                <?php echo $product->getName()?>
                            </h5>
                            <p class="card-text"><?php echo $product->getCategory()->getName() ?></p>
                            <p class="card-text">Prezzo: &euro; <?php echo $product->getPrice() ?></p>
                            <?php if(get_class($product)=== "Food"){?>
                                <p class="card-text">Peso netto:  <?php echo $product->getWeight() ?> g</p>
                                <p class="card-text">Ingredienti:  <?php echo $product->getIngredients()?></p>
                            <?php } elseif(get_class($product)=== "Accessories"){?>
                                <p class="card-text">Materiale:  <?php echo $product->getMaterial() ?></p>
                                <p class="card-text">Dimensioni:  <?php echo $product->getSize()?></p>
                            <?php } elseif(get_class($product)=== "Games"){?>
                                <p class="card-text">Caratteristiche:  <?php echo $product->getCharacteristics() ?></p>
                                <p class="card-text">Dimensioni:  <?php echo $product->getSize()?></p>
                            <?php } ?>
                        </div>
                    </div>
                </article>
            <?php } ?>    
        </div>
    </main>
    
</body>
</html>