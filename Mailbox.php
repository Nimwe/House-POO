<?php
declare (strict_types = 1 );

class Mailbox {
    private string $color ;
    private string $forme ;
   
    public function __construct(string $color, string $forme) 
    { $this->color = $color; $this->forme = $forme; }
    
    public function setColor(string $color): void 
    { $this->color= $color; }
    public function getColor():string 
    { return $this->color; }

    public function setForme(string $forme): void 
    { $this->forme= $forme; }
    public function getForme():string 
    { return $this->forme;}
}

?>