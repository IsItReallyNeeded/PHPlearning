<?php

class Walidacja {
    public static function walidujEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function walidujHaslo($haslo) {
        return strlen($haslo) >= 8;
    }

    public static function walidujTekst($tekst) {
        return !empty($tekst);
    }
}

$email = "jan@example.com";
$haslo = "silne_haslo";
$imie = "Jan";

if (Walidacja::walidujEmail($email)) {
    echo "Adres e-mail jest poprawny.\n";
} else {
    echo "Błąd: Nieprawidłowy adres e-mail.\n";
}

if (Walidacja::walidujHaslo($haslo)) {
    echo "Hasło jest poprawne.\n";
} else {
    echo "Błąd: Nieprawidłowe hasło.\n";
}

if (Walidacja::walidujTekst($imie)) {
    echo "Imię jest poprawne.\n";
} else {
    echo "Błąd: Nieprawidłowe imię.\n";
}

?>
