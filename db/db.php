<?php
require_once __DIR__ . '/../classes/products.php';
require_once __DIR__ . '/../classes/category.php';
require_once __DIR__ . '/../classes/food.php';
require_once __DIR__ . '/../classes/games.php';
require_once __DIR__ . '/../classes/accessories.php';

$dog = new Category('Cane', './img/pet.png');
$fish = new Category('Pesce', './img/fish.png');
$cat = new Category('Gatto', './img/animal.png');
$bird = new Category('Uccello', './img/dove.png');


$product = [
    /** food */
    new Food('Royal Canin Mini Adult', 43.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg',
    true, $dog, 545, 'Prosciutto, Riso' ),

    new Food('Almo Nature Holistic Maintenance Medium Large  Tonno e Riso', 44.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg',
    true, $dog, 600, 'manzo, cereali' ),

    new Food('Almo Nature Cat Daily Lattina', 34.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
    true, $cat, 400, 'tonno, pollo, prosciutto' ),

    new Food('Mangime per Pesci Guppy in Fiocchi', 2.95,
    'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
    true, $fish, 30, 'pesci e sottoprodotti dei pesci, cereali, lieviti, alghe' ),

    /** accesories */
    new Accessories('Voliera Wilma in Legno', 184.99, 
    'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 
    false, $bird,'M: L 83 x P 67 x H 153', 'Legno'),

    new Accessories('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 
    'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 
    false, $fish,'ND', 'Materiale Espanso'),

    /** games */
    new Games('Kong Classic', 13.49, 
    'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
    true, $dog, 'Galleggia e rimbalza', '8,5 cm x 10 cm'),

    new Games('Topini di peluche Trixie', 4.99, 
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    false, $cat, 'Morbido con codina in corda', '8,5 cm x 10 cm'),
    
];










