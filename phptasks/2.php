<?php

class Kolo {
    
    private $promien;

    
    public function __construct($promien) {
        $this->ustawPromien($promien);
    }

    
    public function ustawPromien($promien) {
        if ($promien > 0) {
            $this->promien = $promien;
        } else {
            echo "Promień musi być większy od zera.";
        }
    }

    
    public function obliczPowierzchnie() {
        return pi() * pow($this->promien, 2);
    }

    
    public function obliczObwod() {
        return 2 * pi() * $this->promien;
    }
}


$kolo = new Kolo(5);

echo "Powierzchnia koła: " . $kolo->obliczPowierzchnie() . "\n";
echo "Obwód koła: " . $kolo->obliczObwod() . "\n";

?>
