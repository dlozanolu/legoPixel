<?php
$contador = 0;

$imagen = imagecreatefromgif('imagen.min.gif');
for ($x=0; $x < 32; $x++) {
    echo "Línea $x: ";
    for ($y=0; $y < 32; $y++) {
        if ($y == 0) {
            $contador = 0;
        }

        $color = imagecolorat($imagen, $x, $y);
        if ($y == 31) {
            $colorSiguiente = -1;
        } else {
            $colorSiguiente = imagecolorat($imagen, $x, $y+1);
        }

        if ($color == $colorSiguiente) {
            $contador++;
        } else {
            echo $color . 'x' . ($contador+1) . ' ';
            $contador = 0;
        }
    }
    echo "\n";
}
