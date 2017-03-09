<?php
// Importe les defférents fichiers
require("iClasse.php");
require("iRace.php");
require("Stats.php");
require("Orc.php");
require("Guerrier.php");
require("Archer.php");
require("Personnage.php");
// Création d'une nouvelle instance de l'objet Personnage()
// Qui prend en paramètre
// Une nouvelle instance des objets Orc() et Guerrier()
$perso1 = new Personnage("Bob", new Orc(), new Guerrier());
// On passe par les accesseurs pour recuperer les proprietés
// Du nouveau personnage

echo $perso1->getNom();
echo $perso1->race->getNom();
echo $perso1->classe->getNom();
// Appel des méthode de nos interfaces qui sont implementé dans la classe et la race
$perso1->attaquer();
$perso1->seDeplacer();

$perso2 = new Personnage("Bill", new Orc(), new Archer());

$perso2->attaquer();
