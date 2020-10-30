<?php
require_once 'data/products.php';
require_once 'layout/header.php';
?>

<?php $title = "Nos produits"; ?>
<h1><?php echo $title; ?></h1>

<div>
  <?php
  foreach ($products as $product) {
    require 'product_card.php';
  }
  ?>
</div>

<?php require_once 'layout/footer.php'; ?>