<?php

class Pojazd {
    
    private $marka;
    private $model;
    private $rok;

    
    public function __construct($marka, $model, $rok) {
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
    }

    
    public function wyswietlSzczegoly() {
        echo "Marka: " . $this->marka . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Rok produkcji: " . $this->rok . "\n";
    }
}


$mojPojazd = new Pojazd("Toyota", "Camry", 2020);


$mojPojazd->wyswietlSzczegoly();

?>
