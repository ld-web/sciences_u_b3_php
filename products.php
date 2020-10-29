<?php
const IMG = 'https://source.unsplash.com/random/320x200';
$products = [
  [
    'nom' => 'Mon produit',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius odio explicabo distinctio minima hic ut dolor, quo cumque.',
    'prix' => 24.95,
    'image' => IMG,
    'promo' => false
  ],
  [
    'nom' => 'iPad 47',
    'description' => 'Rerum dolores et, laudantium nobis libero expedita praesentium tempora odit quam',
    'prix' => 750,
    'image' => IMG,
    'promo' => true
  ],
  [
    'nom' => 'Livre de chevet',
    'description' => 'Rerum dolores et, laudantium nobis libero expedita praesentium tempora odit quam soluta facilis accusantium magni vitae sint autem',
    'prix' => 20.50,
    'image' => IMG,
    'promo' => true
  ],
  [
    'nom' => 'Yoyo',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eius odio explicabo distinctio minima hic ut dolor, quo cumque.',
    'prix' => 5.99,
    'image' => IMG,
    'promo' => false
  ],
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <title>Liste des produits</title>
</head>

<body>
  <?php $title = "Nos produits"; ?>
  <h1><?php echo $title; ?></h1>

  <div>
    <?php foreach ($products as $product) { ?>
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['nom']; ?>" />
        <div class="card-body">
          <h5 class="card-title"><?php echo $product['nom']; ?></h5>
          <p><?php echo $product['prix']; ?> €</p>
          <?php if ($product['promo']) { ?>
            <span class="badge badge-success">Promotion</span>
          <?php } ?>
          <p class="card-text"><?php echo $product['description']; ?></p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

</html>