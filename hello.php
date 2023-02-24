<?php
// Déclaration de la classe
class Personne {
  // Propriétés
  public $nom;
  public $age;

  // Constructeur
  public function __construct($nom, $age) {
    $this->nom = $nom;
    $this->age = $age;
  }

  // Méthodes
  public function sePresenter() {
    echo "Je m'appelle " . $this->nom . " et j'ai " . $this->age . " ans.";
  }
}

// Instanciation de l'objet
$personne1 = new Personne("SSSSS", 30);

// Appel de la méthode sePresenter()
$personne1->sePresenter();
?>
