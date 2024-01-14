<?php


abstract class Zwierze {
    
    abstract public function jeść();
    abstract public function wydawaćDźwięk();
}


class Pies extends Zwierze {
    public function jeść() {
        echo "Pies je karmę.\n";
    }

    public function wydawaćDźwięk() {
        echo "Pies wydaje dźwięk: Hau! Hau!\n";
    }
}


class Kot extends Zwierze {
    public function jeść() {
        echo "Kot je karmę.\n";
    }

    public function wydawaćDźwięk() {
        echo "Kot wydaje dźwięk: Miau!\n";
    }
}


class Ptak extends Zwierze {
    public function jeść() {
        echo "Ptak je ziarna.\n";
    }

    public function wydawaćDźwięk() {
        echo "Ptak wydaje dźwięk: Ćwir, ćwir!\n";
    }
}


$pies = new Pies();
$kot = new Kot();
$ptak = new Ptak();

$pies->jeść();
$pies->wydawaćDźwięk();

$kot->jeść();
$kot->wydawaćDźwięk();

$ptak->jeść();
$ptak->wydawaćDźwięk();

?>
