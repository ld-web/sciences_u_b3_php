<?php

// Classe
// Nouveau type complexe, définition de la classe
class Produit
{
  // Structure de classe
  // Attributs et portée : public, protected, private
  protected $nom;
  private $prix;

  // Structure de classe
  // Méthodes

  // Constructeur : méthode qui se lancera automatiquement à la construction d'un objet de cette classe
  // Pas nécessaire, seulement si on a besoin d'effectuer des traitements à l'instanciation d'un objet de cette classe
  public function __construct(string $nom = "Téléviseur")
  {
    $this->nom = $nom;
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
}

class ProduitRect extends Produit
{
  private $largeur;
  private $hauteur;
  
  public function __construct(int $l, int $h)
  {
    parent::__construct();
    $this->largeur = $l;
    $this->hauteur = $h;
  }

  public function displayInfos()
  {
    echo $this->nom . ", rectangulaire : L" . $this->largeur . ", H" . $this->hauteur;
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

// Instanciation d'un objet
$produit = new Produit();
var_dump($produit);

echo $produit->getNom();
var_dump($produit->getNom());

$produit->setNom("Dictionnaire");

echo $produit->getNom();
var_dump($produit->getNom());

$telephone = new Produit("Téléphone");
$telephone->setNom("iPhone");
var_dump($telephone);

$produits = [$produit, $telephone];

var_dump($produits);

$telephone->setPrix(800);
echo $telephone->getPrixTtc(0.2);

$produitRect = new ProduitRect(600, 800);
var_dump($produitRect);
$produitRect->displayInfos();
