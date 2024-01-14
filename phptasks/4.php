<?php


interface Resizable {
    public function resize($factor);
}


class Kwadrat implements Resizable {
    private $bok;

    public function __construct($bok) {
        $this->bok = $bok;
    }

    
    public function resize($factor) {
        if ($factor > 0) {
            $this->bok *= $factor;
        } else {
            echo "Faktor musi być większy od zera.";
        }
    }

    
    public function getBok() {
        return $this->bok;
    }
}


$kwadrat = new Kwadrat(4);

echo "Początkowy bok kwadratu: " . $kwadrat->getBok() . "\n";


$kwadrat->resize(1.5);

echo "Nowy bok kwadratu po zmianie rozmiaru: " . $kwadrat->getBok() . "\n";

?>