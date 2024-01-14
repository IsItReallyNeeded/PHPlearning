<?php

$dataString = '12-08-2004';
$formatDaty = 'd-m-Y';
$dateTime = DateTime::createFromFormat($formatDaty, $dataString);

if ($dateTime) {
    $wynik = $dateTime->format('Y-m-d');
    echo "Oryginalna data: $dataString\n";
    echo "Przekształcona data: $wynik\n";
} else {
    echo "Błąd podczas przetwarzania daty.\n";
}

?>
