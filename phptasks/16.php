<?php

class Kalkulator {
    
    private $wynik;

    public function __construct() {
        $this->wynik = 0;
    }
    public function dodaj($liczba) {
        $this->wynik += $liczba;
    }
    public function odejmij($liczba) {
        $this->wynik -= $liczba;
    }
    public function dodaj($liczba) {
        $this->wynik *= $liczba;
    }
    public function odejmij($liczba) {
        $this->wynik = $wynik / $liczba;
    }

    public function pobierzWynik() {
        return $this->wynik;
    }
}

$kalkulator = new Kalkulator();

$kalkulator->dodaj(5);
echo "Aktualny wynik po dodawaniu: " . $kalkulator->pobierzWynik() . "\n";

$kalkulator->odejmij(3);
echo "Aktualny wynik po odejmowaniu: " . $kalkulator->pobierzWynik() . "\n";

?>
