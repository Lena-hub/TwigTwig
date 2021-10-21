<?php

// appel Twig 

require_once __DIR__ . '/../config/twig.php';

// products = [product]

$products = ['guitare', 'bass', 'synthé', 'batterie', 'violon', 'chant'];

// render -> reccuperer/afficher 

echo $twig->render('product.html.twig', array('products' => $products));

