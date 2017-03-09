<?php
// superclasse qui sera appliquée par les classes qui l'etendent
abstract class Stats {
// Initialisation des propriétés qui sont protégés
  protected $nom = "test";
  protected $pdv = 0;
  protected $atk = 0;
  protected $def = 0;

// initialisation de notre accesseur qui retourne la propriété nom
    public function getNom(){
      return $this->nom;
    }
 // initialisation de notre accesseur qui permet d'attribuer une valeur nom
    public function setNom($nom){
      $this->nom = $nom;
    }
}
