<?php

class SortowanieTablicy {
    public static function sortujTablice(array &$tablica) {
        sort($tablica);
    }
}

$tablicaLiczb = array(11, -2, 4, 35, 0, 8, -9);

echo "Tablica przed sortowaniem:\n";
print_r($tablicaLiczb);

SortowanieTablicy::sortujTablice($tablicaLiczb);

echo "Tablica po sortowaniu:\n";
print_r($tablicaLiczb);

?>
