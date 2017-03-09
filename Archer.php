<?php
// implements iClasse nous permet d'appeler notre méthode attaquer
  class Archer extends Stats implements iClasse {
// définit le nom de la classe lors de la création de la nouvelle instance
    public function __construct() {
      $this->nom = "Archer";
    }

    public function attaquer() {
      echo " tire une flèche";
    }

  }
