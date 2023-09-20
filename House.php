<?php
declare (strict_types = 1 );

class House {
    private $kitchen;
    private $bath;
    private $mailbox;
    private array $bedrooms;

// Constructor pour avoir des chambres incrémentées tout de suite 
// dans la création de house
public function __construct($k, $ba, $mb, $leschambres) 
  { $this->kitchen = $k ;
    $this->bath = $ba ;
    $this->mailbox = $mb ;
    $this->bedrooms = $leschambres; }

public function setKitchen(string $k): House 
{ $this->kitchen = $k ; return $this ; }
public function getKitchen(): Kitchen 
{ return $this->kitchen; }

public function setBath(string $ba): House 
{ $this->bath = $ba ; return $this ; }
public function getBath(): Bath 
{ return $this->bath; }

public function setMailbox(string $mb):House 
{ $this->mailbox = $mb ; return $this; }
public function getMailbox(): string 
{ return $this->mailbox; }

public function addBedrooms(Bedroom $be) : House {
    $this->bedrooms[]=$be ;
    return $this;
}

}

?>