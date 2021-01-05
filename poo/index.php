<?php

// Constructeurs, héritage, accesseurs, interfaces, classes, exceptions, instance, polymorphisme, encapsulation

interface ISurface
{
  public function getSurface(): float;
}

// Interface = contrat d'implémentation
// Contient une ou plusieurs méthodes, publiques, qui doivent être implémentées par toute classe implémentant cette interface
// Une classe implémente une interface avec le mot-clé "implements"
interface IDisplayable
{
  public function display();
}

// Classe
// Nouveau type complexe, définition de la classe
abstract class AbstractProduit
{
  // Structure de classe
  // Attributs et portée : public, protected, private
  protected $nom;
  private $prix;
  protected const DEFAULT_NAME = "Produit de base";

  // Structure de classe
  // Méthodes

  // Constructeur : méthode qui se lancera automatiquement à la construction d'un objet de cette classe
  // Pas nécessaire, seulement si on a besoin d'effectuer des traitements à l'instanciation d'un objet de cette classe
  public function __construct(string $nom = self::DEFAULT_NAME)
  {
    $this->nom = $nom;
    $this->prix = 0;
  }

  // Getter / Accesseur, pour l'encapsulation de notre attribut $nom
  public function getNom(): ?string
  {
    return strtoupper($this->nom);
  }

  // Setter / Modificateur, toujours pour l'encapsulation
  public function setNom(string $nom): void
  {
    $this->nom = $nom;
  }

  public function getPrix(): float
  {
    return $this->prix;
  }

  public function setPrix(float $prix)
  {
    $this->prix = $prix;
  }

  public function getPrixTtc(float $taux): float
  {
    return $this->prix + $this->prix * $taux;
  }

  // Méthode abstraite : définition de prototype
  // Les classes enfants doivent obligatoirement fournir une implémentation concrète (donc avec un corps de méthode)
  // de cette méthode
  // Une méthode abstraite ne peut exister que dans une classe abstraite
  // -----------------------------------------
  // abstract public function displayInfos();
}

class ProduitRect extends AbstractProduit implements ISurface, IDisplayable
{
  private $largeur;
  private $hauteur;

  public function __construct(int $l, int $h, string $nom = "Rectangulaire")
  {
    parent::__construct($nom);
    $this->largeur = $l;
    $this->hauteur = $h;
  }

  public function display()
  {
    echo "Rectangulaire, L:" . $this->largeur . ", H:" . $this->hauteur . "<br />";
  }

  public function getSurface(): float
  {
    return $this->hauteur * $this->largeur;
  }

  /**
   * Get the value of largeur
   */
  public function getLargeur()
  {
    return $this->largeur;
  }

  /**
   * Set the value of largeur
   *
   * @return  self
   */
  public function setLargeur($largeur)
  {
    $this->largeur = $largeur;

    return $this;
  }

  /**
   * Get the value of hauteur
   */
  public function getHauteur()
  {
    return $this->hauteur;
  }

  /**
   * Set the value of hauteur
   *
   * @return  self
   */
  public function setHauteur($hauteur)
  {
    $this->hauteur = $hauteur;

    return $this;
  }
}

class ProduitCirc extends AbstractProduit implements ISurface
{
  private $diametre = 15;

  // public function display()
  // {
  //   echo $this->nom . ", circulaire : D" . $this->diametre . ", prix : " . $this->getPrix() . "<br />";
  // }

  public function getSurface(): float
  {
    return M_PI * ($this->diametre ** 2) / 4;
  }

  /**
   * Get the value of diametre
   */
  public function getDiametre()
  {
    return $this->diametre;
  }

  /**
   * Set the value of diametre
   *
   * @return  self
   */
  public function setDiametre($diametre)
  {
    $this->diametre = $diametre;

    return $this;
  }
}

/**
 * Gets all products
 *
 * @return AbstractProduit[]
 */
function getProduits(): array
{
  $produitRect = new ProduitRect(600, 800);
  $produitCirc = new ProduitCirc();

  return [$produitRect, $produitCirc];
}

// Instanciation d'un objet
// $produit = new Produit();
// var_dump($produit);

// echo $produit->getNom();
// var_dump($produit->getNom());

// $produit->setNom("Dictionnaire");

// echo $produit->getNom();
// var_dump($produit->getNom());

// $telephone = new Produit("Téléphone");
// $telephone->setNom("iPhone");
// var_dump($telephone);

// $produits = [$produit, $telephone];

// var_dump($produits);

// $telephone->setPrix(800);
// echo $telephone->getPrixTtc(0.2);

// $produitRect = new ProduitRect(600, 800);
// var_dump($produitRect);
// $produitRect->displayInfos();

// $produitCirc = new ProduitCirc();
// var_dump($produitCirc);
// $produitCirc->displayInfos();

$mesProduits = getProduits();

echo "<h2>Mes produits</h2>";

foreach ($mesProduits as $monProduit) {
  if ($monProduit instanceof IDisplayable) {
    $monProduit->display();
  }
}
