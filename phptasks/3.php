<?php


abstract class Ksztalt {
    
    abstract public function calculateArea();
}


class Trojkat extends Ksztalt {
    private $podstawa;
    private $wysokosc;

    public function __construct($podstawa, $wysokosc) {
        $this->podstawa = $podstawa;
        $this->wysokosc = $wysokosc;
    }

    
    public function calculateArea() {
        return 0.5 * $this->podstawa * $this->wysokosc;
    }
}


class Prostokat extends Ksztalt {
    private $dlugosc;
    private $szerokosc;

    public function __construct($dlugosc, $szerokosc) {
        $this->dlugosc = $dlugosc;
        $this->szerokosc = $szerokosc;
    }

    
    public function calculateArea() {
        return $this->dlugosc * $this->szerokosc;
    }
}


$trojkat = new Trojkat(4, 6);
$prostokat = new Prostokat(5, 8);

echo "Powierzchnia trójkąta: " . $trojkat->calculateArea() . "\n";
echo "Powierzchnia prostokąta: " . $prostokat->calculateArea() . "\n";

?>