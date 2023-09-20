<?php
declare (strict_types = 1 );
require_once ('room.php');

class Bath extends Room {
    private string $soap;
    private string $towel;
    
public function __construct($width, $length, $soap, $towel) 
{ parent::__construct($width, $length);
    $this->soap = $soap; $this->towel = $towel; }   

public function setSoap(string $so): void 
{ $this->soap= $so; }
public function getSoap ():string 
{ return $this->soap; }

public function setTowel(string $t): void 
{ $this->Towel= $t; }
public function getTowel ():string 
{ return $this->Towel; }

}

?>