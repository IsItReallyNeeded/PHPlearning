<?php

class KontoBankowe {
    
    private $numerKonta;
    private $saldo;

    
    public function __construct($numerKonta, $saldo = 0) {
        $this->numerKonta = $numerKonta;
        $this->saldo = $saldo;
    }

    
    public function wplacPieniadze($kwota) {
        if ($kwota > 0) {
            $this->saldo += $kwota;
            echo "Wpłacono $kwota PLN na konto. Aktualne saldo: {$this->saldo} PLN\n";
        } else {
            echo "Kwota wpłaty musi być większa od zera.\n";
        }
    }

    
    public function wyplacPieniadze($kwota) {
        if ($kwota > 0 && $kwota <= $this->saldo) {
            $this->saldo -= $kwota;
            echo "Wypłacono $kwota PLN z konta. Aktualne saldo: {$this->saldo} PLN\n";
        } elseif ($kwota > $this->saldo) {
            echo "Brak wystarczających środków na koncie.\n";
        } else {
            echo "Kwota wypłaty musi być większa od zera.\n";
        }
    }

    
    public function wyswietlInformacje() {
        echo "Numer konta: {$this->numerKonta}\n";
        echo "Saldo: {$this->saldo} PLN\n";
    }
}


$konto = new KontoBankowe("123456789");


$konto->wyswietlInformacje();


$konto->wplacPieniadze(1000);
$konto->wyplacPieniadze(500);


$konto->wyswietlInformacje();

?>