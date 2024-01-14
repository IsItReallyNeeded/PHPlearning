<?php

class Silnia {
    public static function obliczSilnie($liczba) {
        if ($liczba < 0) {
            throw new InvalidArgumentException("Silnia nie jest zdefiniowana dla liczb ujemnych.");
        }
        if ($liczba === 0 || $liczba === 1) {
            return 1;
        } else {

            return $liczba * self::obliczSilnie($liczba - 1);
        }
    }
}

$liczba = 5;
$wynik = Silnia::obliczSilnie($liczba);

echo "Silnia z $liczba wynosi $wynik.\n";

?>
