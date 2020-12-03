<?php
require_once 'layout/header.php';
if (isset($_POST['email'])) {
  echo "Formulaire validé";
}
?>

<div class="container">
  <h1>Inscrivez-vous à notre newsletter !</h1>
  <form method="POST">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" />
    <input type="submit" value="S'inscrire" />
  </form>
</div>

<?php
require_once 'layout/footer.php';
