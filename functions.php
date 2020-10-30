<?php
function direBonjour(string $nom = "Sam") // signature de la fonction
{
  echo "BONJOUR $nom !!!";
}

/**
 * Passe une valeur sous forme de paragraphe en majuscules
 *
 * @param string $val La valeur à passer en paragraphe
 * @return string Le paragraphe en majuscules
 */
function paragraphMajuscules(string $val): string
{
  $output = "<p>" . strtoupper($val) . "</p>";
  return $output;
}
