<?php

class RoznicaDat {
    private $dataPoczatkowa;
    private $dataKoncowa;

    public function __construct($dataPoczatkowa, $dataKoncowa) {
        $this->dataPoczatkowa = new DateTime($dataPoczatkowa);
        $this->dataKoncowa = new DateTime($dataKoncowa);
    }

    public function obliczRoznice() {
        $roznica = $this->dataPoczatkowa->diff($this->dataKoncowa);

        $lat = $roznica->y;
        $miesiecy = $roznica->m;
        $dni = $roznica->d;

        return "Różnica: $lat lat, $miesiecy miesięcy, $dni dni";
    }
}

$dataPoczatkowa = '1981-11-03';
$dataKoncowa = '2013-09-04';

$roznicaDat = new RoznicaDat($dataPoczatkowa, $dataKoncowa);

echo $roznicaDat->obliczRoznice();

?>
