<?php

abstract class Stats {

  protected $nom = "test";
  protected $pdv = 0;
  protected $atk = 0;
  protected $def = 0;


    public function getNom(){
      return $this->nom;
    }

    public function setNom($nom){
      $this->nom = $nom;
    }
}
