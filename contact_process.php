<?php
require_once 'layout/header.php';
require_once 'include/email_functions.php';

if (
  empty($_POST['name']) ||
  empty($_POST['firstname']) ||
  empty($_POST['email']) ||
  empty($_POST['gpdr']) ||
  empty($_POST['subject']) ||
  empty($_POST['message'])
) {
  echo "Vous n'avez pas renseigné toutes les données requises";
  exit;
}

try {
  if (isEmailSpam($_POST['email'])) {
    echo "L'email entré est considéré comme indésirable";
    exit;
  }
} catch (InvalidArgumentException $ex) {
  echo "L'email entré est incorrect";
  exit;
}

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$gpdr = $_POST['gpdr'];
$subject = $_POST['subject'];
$message = $_POST['message'];

?>

<div class="container">
  <div class="alert alert-success" role="alert">
    Merci ! Votre demande a été enregistrée
  </div>

  Informations réceptionnées :

  <div>
    <p>
      Nom : <?php echo $name; ?>
    </p>
    <p>
      Prénom : <?php echo $firstname; ?>
    </p>
    <p>
      Email : <?php echo $email; ?>
    </p>
    <p>
      Vous êtes <?php echo (!empty($_POST['major'])) ? "majeur" : "mineur"; ?>
    </p>
    <p>
      <?php if ($gpdr === "Oui") {
        echo "Vous avez lu le texte sur la protection des données";
      } else {
        echo "Vous n'avez pas lu le texte sur la protection des données";
      } ?>
    </p>
    <p>
      <?php
      // if ($subject === "information") {
      //   echo "Vous avez effectué une demande d'informations";
      // } elseif ($subject === "devis") {
      //   echo "Vous voulez un devis";
      // } elseif ($subject === "bug") {
      //   echo "Vous avez trouvé un bug sur notre site";
      // } else {
      //   echo "Vous n'avez pas renseigné de motif";
      // }

      switch ($subject) {
        case "information":
          echo "Vous avez effectué une demande d'informations";
          break;
        case "devis":
          echo "Vous voulez un devis";
          break;
        case "bug":
          echo "Vous avez trouvé un bug sur notre site";
          break;
        default:
          echo "Vous n'avez pas renseigné de motif";
      }
      ?>
    </p>
    <p>
      Votre message : <?php echo $message; ?>
    </p>
  </div>
</div>

<?php
require_once 'layout/footer.php';
