<?php
declare (strict_types = 1 );
require_once ('room.php');

class Kitchen extends Room {
    private string $color;
    private string $sol;

public function __construct($width, $length, $color, $sol) 
{ parent::__construct($width, $length);
    $this->Color = $color; $this->Sol = $sol; }  

public function setColor(string $co): void 
{ $this->Color= $co; }
public function getColor ():string 
{ return $this->Color; }

public function setSol(string $so): void 
{ $this->Sol= $so; }
public function getSol ():string 
{ return $this->Sol; }

}

?>