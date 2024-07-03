<?php

require_once __DIR__ . '/classes/products.php';
require_once __DIR__ . '/classes/category.php';
require_once __DIR__ . '/classes/food.php';
require_once __DIR__ . '/classes/games.php';
require_once __DIR__ . '/classes/accessories.php';

$products = new Products(new Category('dog', 'cat', 'fish', 'bird'));

var_dump($products);

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