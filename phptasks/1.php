<?php

class Prostokat {
    
    private $dlugosc;
    private $szerokosc;

    
    public function __construct($dlugosc, $szerokosc) {
        $this->ustawDlugosc($dlugosc);
        $this->ustawSzerokosc($szerokosc);
    }

    
    public function ustawDlugosc($dlugosc) {
        if ($dlugosc > 0) {
            $this->dlugosc = $dlugosc;
        } else {
            echo "Długość musi być większa od zera.";
        }
    }

    
    public function ustawSzerokosc($szerokosc) {
        if ($szerokosc > 0) {
            $this->szerokosc = $szerokosc;
        } else {
            echo "Szerokość musi być większa od zera.";
        }
    }

    
    public function obliczPowierzchnie() {
        return $this->dlugosc * $this->szerokosc;
    }

    
    public function obliczObwod() {
        return 2 * ($this->dlugosc + $this->szerokosc);
    }
}


$prostokat = new Prostokat(5, 10);

echo "Powierzchnia prostokąta: " . $prostokat->obliczPowierzchnie() . "\n";
echo "Obwód prostokąta: " . $prostokat->obliczObwod() . "\n";

?>