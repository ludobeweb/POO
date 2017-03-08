<?php

require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");

$perso1 = new Personnage("Bob", new Orc(), new Guerrier());

echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();

$perso1->attaquer();
$perso1->seDeplacer();

$perso2 = new Personnage("Bill", new Orc(), new Archer());

$perso2->attaquer();
