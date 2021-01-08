<?php

if (empty($_POST['pseudo']) || empty($_POST['email']) || empty($_POST['password'])) {
  echo "Tous les champs sont obligatoires";
  exit;
}

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$dsn = 'mysql:dbname=sciences_u_users;host=127.0.0.1;charset=utf8mb4';
$user = 'sciences_u_users';
$dbPassword = 'JqDVl3OsCjYW70jv';

try {
  $pdo = new PDO($dsn, $user, $dbPassword);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}

// Requête non préparée
// 1 - Requête dans une chaîne de caractère
//$insertQuery = "INSERT INTO users (pseudo, email, `password`) VALUES ('$pseudo','$email', '$password')";
// 2 - Exécution de la requête
//$stmt = $pdo->query($insertQuery);

// Requête préparée avec des paramètres non nommés
// 1 - Préparation de la requête 
// $stmt = $pdo->prepare("INSERT INTO users (pseudo, email, `password`) VALUES (?, ?, ?)");
// 2 - Exécution de la requête préparée, avec des valeurs
// $stmt->execute([$pseudo, $email, $password]);

// Requête préparée avec des paramètres nommés
// 1 - Préparation de la requête 
$stmt = $pdo->prepare("INSERT INTO users (pseudo, email, `password`) VALUES (:pseudo, :email, :pass)");
// 2 - Exécution de la requête préparée, avec des valeurs
$stmt->execute([
  'pseudo' => $pseudo,
  'email' => $email,
  'pass' => $password
]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
</head>

<body>
  <?php
  if (!$stmt) {
    echo "Une erreur est survenue lors de l'enregistrement";
  } else {
    echo "Merci pour votre inscription !";
  }
  ?>

  <h3>
    <a href="index.php">Retour à la page d'accueil</a>
  </h3>
</body>

</html>