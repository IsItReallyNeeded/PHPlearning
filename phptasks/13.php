<?php

class Logger {

    private static $logCount = 0;

    public static function logMessage($message) {
        echo "Log: $message\n";
        self::$logCount++;
    }

    public static function getLogCount() {
        return self::$logCount;
    }
}

Logger::logMessage("Błąd krytyczny: Brak dostępu do bazy danych.");
Logger::logMessage("Informacja: Pomyślnie zalogowano użytkownika.");

echo "Liczba zarejestrowanych wiadomości: " . Logger::getLogCount() . "\n";

?>