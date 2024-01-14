<?php


class Osoba {
    
    protected $imie;
    protected $wiek;

    
    public function __construct($imie, $wiek) {
        $this->imie = $imie;
        $this->wiek = $wiek;
    }

    
    public function __toString() {
        return "Osoba: Imię - {$this->imie}, Wiek - {$this->wiek} lat";
    }
}


class Pracownik extends Osoba {
    
    private $pensja;
    private $stanowisko;

    
    public function __construct($imie, $wiek, $pensja, $stanowisko) {
        parent::__construct($imie, $wiek);
        $this->pensja = $pensja;
        $this->stanowisko = $stanowisko;
    }

    
    public function wyswietlSzczegoly() {
        echo parent::__toString() . "\n";
        echo "Pensja: {$this->pensja} zł\n";
        echo "Stanowisko: {$this->stanowisko}\n";
    }
}


$pracownik = new Pracownik("Jan Kowalski", 30, 5000, "Programista");


$pracownik->wyswietlSzczegoly();

?>
