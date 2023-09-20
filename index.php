<?php

function chargerClasse($nomDeClasse) {
    require_once($nomDeClasse.'.php');
}
spl_autoload_register('chargerClasse');

$ki = new Kitchen (3,4,'Lavande','Carrelage');
$ba = new Bath (3,2,'au miel','de toutes les tailles');
$mb = new Mailbox ('grise','rectangle');
// création de toutes les chambres en une seule fois 
$be[] = new Bedroom (3,3,'Enfants','Jouets');
$be[] = new Bedroom (5,4,'Parents','TV');

$h = new House ($ki,$ba,$mb,$be);
//Ajout d'une chambre en plus dans le tableau des chambres
//déjà existant
$be1 = new Bedroom (3,4,'Amis','Livres');
$h->addBedrooms($be1);

echo "<pre>";
print_r($h);

?> 
