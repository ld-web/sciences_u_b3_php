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