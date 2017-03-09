<?php
// l'objet personnage hérite des propriétés de la classe abstraite Stats
class Personnage extends Stats{
// Initialisation de nos variable public pour y avoir acces n'importe ou
  public $race = null;
  public $classe = null;
// Methode qui sera appelé lors de la création d'une nouvelle instance de personnage
// On met en paramètre : le nom, la race, la classe
// Ces paramètre seront à remplir lors de la création 
  public function __construct($nom, $race, $classe) {
    $this->nom = $nom;
    $this->race = $race;
    $this->classe = $classe;
  }
// implementation de la methode attaquer venant de l'interface iClasse.php
  public function attaquer() {
    $this->classe->attaquer();
  }
 // implementation de la methode seDeplacer venant de l'interface iRace.php
  public function seDeplacer() {
    $this->race->seDeplacer(2);
  }

  public function attendre() {

  }

  public function mourir() {

  }



}
