<?php
// 1ère exécution : création d'un identifiant de session
// exécutions suivantes : lecture du cookie PHPSESSID et restitution de la session
// Attention : si on n'utilise pas session_start(), le tableau $_SESSION n'est pas défini !
session_start();

echo "Coucou";

var_dump($_SESSION);

$_SESSION['connected'] = true;

var_dump($_SESSION);
