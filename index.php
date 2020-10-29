<?php
echo "Hello World<br />"; // Instruction echo affiche quelque chose à l'écran
$numero = 1;

// Constante : valeur non modifiable
const MA_CONSTANTE = 4;

/*
Utilisation de guillemets doubles = variables interprétées
Guillemets simples : variables non interprétées, utilisation de l'opérateur de concaténation
*/
echo "Numéro : $numero<br />";
echo '$numero<br />';
echo 'Numéro : ' . $numero . '<br />';
echo "Valeur de ma constante : " . MA_CONSTANTE . "<br />";

$float = 9.23;
echo $float . "<br />";

$bool = false;
echo "Valeur de mon booléen : " . $bool;
// var_dump permet d'afficher le contenu d'une variable à l'écran
// Différent de la fonction "echo", elle est davantage utilisée pour du débuggage
var_dump($bool);
