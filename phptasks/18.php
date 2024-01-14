<?php

class Logger {
    private static $instance;

    private function __construct() {
        echo "Logger został zainicjalizowany.\n";
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function logMessage($message) {
        echo "Log: $message\n";
    }
}

$logger1 = Logger::getInstance();
$logger1->logMessage("Pierwsza wiadomość");

$logger2 = Logger::getInstance();
$logger2->logMessage("Druga wiadomość");

if ($logger1 === $logger2) {
    echo "Obiekty logger1 i logger2 są tą samą instancją.\n";
} else {
    echo "Obiekty logger1 i logger2 są różnymi instancjami.\n";
}

// Proba bezpośredniego utworzenia nowej instancji (nie powinno zadziałać)
// $newLogger = new Logger(); // To spowoduje błąd prywatności
