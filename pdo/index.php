<?php

$dsn = 'mysql:dbname=sciences_u_users;host=127.0.0.1;charset=utf8mb4';
$user = 'sciences_u_users';
$password = 'JqDVl3OsCjYW70jv';

try {
  $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}

// $query = "SELECT * FROM users";
// $stmt = $pdo->query($query);

// $row = $stmt->fetch();
// var_dump($row);

// $insertQuery = "INSERT INTO users (pseudo, email, `password`) VALUES ('Nouveau bob', 'newbob@bob.com', 'autre mdp')";
// $stmt = $pdo->query($insertQuery);

// if (!$stmt) {
//   echo "Une erreur est survenue";
// } else {
//   echo "Utilisateur enregistré";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription utilisateur</title>
</head>

<body>
  <h1>Inscription</h1>
  <form action="register_process.php" method="post">
    <div>
      <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo..." />
    </div>

    <div>
      <input type="email" name="email" id="email" placeholder="Email..." />
    </div>

    <div>
      <input type="password" name="password" id="password" placeholder="Mot de passe..." />
    </div>

    <div>
      <input type="submit" value="Valider" />
    </div>
  </form>
</body>

</html>