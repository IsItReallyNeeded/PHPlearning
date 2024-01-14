<?php

class Powitanie {
    private $imie;

    public function __construct($imie) {
        $this->imie = $imie;
    }

    public function wyswietlWiadomosc() {
        echo "Witajcie wszyscy, jestem {$this->imie}.\n";
    }
}

$powitanie = new Powitanie("Scott");
$powitanie->wyswietlWiadomosc();

?>
