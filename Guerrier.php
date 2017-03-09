<?php
// hérite les propriété de Stats et implémente l'interface iClasse
class Guerrier extends Stats implements iClasse {
// définit le nom de la classe lors de la création de la nouvelle instance
  public function __construct() {
    $this->nom = "Guerrier";
  }
// l'implementation de l'interface iClass nous permet d'appeler notre methode attaquer
  public function attaquer() {
    echo " attaque";
  }

}
