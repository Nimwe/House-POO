<?php
declare (strict_types = 1 );

class Room {
    private $width;
    private $length;

public function __construct($width, $length) 
{ $this->width = $width; $this->length = $length; }

public function surface()
{ return $this->width * $this->length; }

}

/*Room sert a definir des fonctions qui 
seront reutilisées dans les autres pieces afin de ne pas 
avoir à les refaire ou avoir à faire 50 modifs quand c'est 
necessaire.
Elle ne sert pas à appeler les class dans House.
*/
?>