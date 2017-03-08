<?php

class Personnage extends Stats{

  public $race = null;
  public $classe = null;

  public function __construct($nom, $race, $classe) {
    $this->nom = $nom;
    $this->race = $race;
    $this->classe = $classe;
  }

  public function attaquer() {
    $this->classe->attaquer();
  }

  public function seDeplacer() {
    $this->race->seDeplacer(2);
  }

  public function attendre() {

  }

  public function mourir() {

  }



}
