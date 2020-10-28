<?php
echo "Hello World<br />"; // Instruction echo affiche quelque chose à l'écran
$numero = 1;

/*
Utilisation de guillemets doubles = variables interprétées
Guillemets simples : variables non interprétées, utilisation de l'opérateur de concaténation
*/
echo "Numéro : $numero<br />";
echo '$numero<br />';
echo 'Numéro : ' . $numero . '<br />';
?>