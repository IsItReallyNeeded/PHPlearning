<?php

class Plik {

    private $nazwa;
    private $rozmiar;

    public function __construct($nazwa, $rozmiar) {
        $this->nazwa = $nazwa;
        $this->rozmiar = $rozmiar;
    }

    public static function obliczCalkowityRozmiar(array $pliki) {
        $calkowityRozmiar = 0;

        foreach ($pliki as $plik) {
            if ($plik instanceof Plik) {
                $calkowityRozmiar += $plik->getRozmiar();
            } else {
                throw new InvalidArgumentException("Element nie jest instancją klasy Plik.");
            }
        }

        return $calkowityRozmiar;
    }

    public function getNazwa() {
        return $this->nazwa;
    }

    public function getRozmiar() {
        return $this->rozmiar;
    }
}

$plik1 = new Plik("plik1.txt", 1024);
$plik2 = new Plik("plik2.txt", 2048);
$plik3 = new Plik("plik3.txt", 1536);

$pliki = [$plik1, $plik2, $plik3];

$calkowityRozmiar = Plik::obliczCalkowityRozmiar($pliki);

echo "Całkowity rozmiar plików: $calkowityRozmiar bajtów\n";

?>
