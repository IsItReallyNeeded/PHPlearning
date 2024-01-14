<?php

class Osoba {
    
    private $imie;
    private $wiek;

    
    public function __construct($imie, $wiek) {
        $this->imie = $imie;
        $this->wiek = $wiek;
    }

    
    public function __toString() {
        return "Osoba: Imię - {$this->imie}, Wiek - {$this->wiek} lat";
    }
}


$osoba = new Osoba("Jan Kowalski", 30);


echo $osoba;

?>
