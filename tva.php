<?php
require_once 'constants.php';

/**
 * Retourne le prix augmenté d'un certain taux
 *
 * @param float $prix Prix de base
 * @param float $taux Taux à appliquer
 * @return float Prix avec le taux appliqué
 */
function calculTtc(float $prix, float $taux = BASE_TVA): float
{
  return $prix * $taux;
}
