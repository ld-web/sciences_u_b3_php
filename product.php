<?php
require_once 'data/products.php';
require_once 'tva.php';
require_once 'layout/header.php';
require_once 'functions.php';

// $id = (int)$_GET['id']; cast
$id = intval($_GET['id']);

// 1ère solution
// foreach ($products as $product) {
//   if ($product['id'] === $id) {
//     require 'product_card.php';
//   }
// }

// 2ème solution avec l'utilisation d'une fonction
$product = getProductById($products, $id);

if ($product !== null) {
  require 'product_card.php';
} else {
  echo "Produit non trouvé";
}

require_once 'layout/footer.php';
