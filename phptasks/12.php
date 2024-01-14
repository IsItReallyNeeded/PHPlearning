<?php


interface Comparable {
    public function compareTo($other);
}

class Produkt implements Comparable {
    
    private $nazwa;
    private $cena;

    public function __construct($nazwa, $cena) {
        $this->nazwa = $nazwa;
        $this->cena = $cena;
    }

    public function compareTo($other) {
        if ($other instanceof Produkt) {
            return $this->cena - $other->getCena();
        } else {
            throw new InvalidArgumentException("Porównywany obiekt nie jest instancją klasy Produkt.");
        }
    }

    public function getNazwa() {
        return $this->nazwa;
    }

    public function getCena() {
        return $this->cena;
    }
}

$produkt1 = new Produkt("Laptop", 2500);
$produkt2 = new Produkt("Smartfon", 1200);

$result = $produkt1->compareTo($produkt2);

if ($result > 0) {
    echo "{$produkt1->getNazwa()} jest droższy od {$produkt2->getNazwa()}\n";
} elseif ($result < 0) {
    echo "{$produkt1->getNazwa()} jest tańszy od {$produkt2->getNazwa()}\n";
} else {
    echo "{$produkt1->getNazwa()} ma taką samą cenę jak {$produkt2->getNazwa()}\n";
}

?>
