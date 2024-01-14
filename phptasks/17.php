<?php

class KoszykZakupowy {
    private $przedmioty;
    private $suma;

    public function __construct() {
        $this->przedmioty = [];
        $this->suma = 0;
    }

    public function dodajPrzedmiot($nazwa, $cena) {
        $this->przedmioty[] = ['nazwa' => $nazwa, 'cena' => $cena];
        $this->suma += $cena;
    }

    public function obliczCalkowityKoszt() {
        return $this->suma;
    }

    public function wyswietlZawartosc() {
        echo "Zawartość koszyka:\n";
        foreach ($this->przedmioty as $przedmiot) {
            echo "- {$przedmiot['nazwa']}: {$przedmiot['cena']} PLN\n";
        }
        echo "Całkowity koszt: {$this->suma} PLN\n";
    }
}

$koszyk = new KoszykZakupowy();

$koszyk->dodajPrzedmiot("Laptop", 2500);
$koszyk->dodajPrzedmiot("Smartfon", 1200);
$koszyk->dodajPrzedmiot("Kamera", 800);

$koszyk->wyswietlZawartosc();

?>
