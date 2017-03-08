<?php

class Guerrier extends Stats implements iClasse {

  public function __construct() {
    $this->nom = "Guerrier";
  }

  public function attaquer() {
    echo " attaque";
  }

}
