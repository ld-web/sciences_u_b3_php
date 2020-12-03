<?php
require_once 'layout/header.php';
// $email = $_GET['email'];
$email = $_POST['email'];
?>

<div class="container">
  <div class="alert alert-success" role="alert">
    Merci ! L'adresse <?php echo $email; ?> a été enregistrée dans notre liste de diffusion
  </div>
</div>

<?php
require_once 'layout/footer.php';
