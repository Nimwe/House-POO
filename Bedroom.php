<?php
declare (strict_types = 1 );
require_once ('room.php');

class Bedroom extends Room {
    private string $Whos;
    private string $Deco;
public function __construct($width, $length, $Whos, $Deco) 
{ parent::__construct($width, $length);
    $this->Whos = $Whos; $this->Deco = $Deco; }   

public function setWhos(string $wh): void 
{ $this->Whos= $wh; }
public function getWhos ():string 
{ return $this->Whos; }

public function setDeco(string $de): void 
{ $this->Deco= $de; }
public function getDeco ():string 
{ return $this->Deco; }

}

// $bedroom1 =new Bedroom (4,4,'Kevin et Sarah','Arbre magique');
// echo '<pre>';
// print_r($bedroom1);
// echo "La surface de la chambre est " . $bedroom1->surface() . ' m2';


?>