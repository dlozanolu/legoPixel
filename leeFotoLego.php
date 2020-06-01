<?php
$nombreDelFichero = 'lanzadera.min.gif';
$dimensiones = getimagesize($nombreDelFichero);
$ancho = $dimensiones[0];
$alto = $dimensiones[1];
$contador = 0;
$totalColores = [];
$imagen = imagecreatefromgif($nombreDelFichero);

for ($y=0; $y < $alto; $y++) {
    echo "Línea $y: ";

    for ($x=0; $x < $ancho; $x++) {
        if ($x == 0) {
            $contador = 0;
        }
        $colorIndice = imagecolorat($imagen, $x, $y);
        if (!array_key_exists($color, $totalColores)) {
            array_push($totalColores, $colorIndice);
        }
        $color = array_search($colorIndice, $totalColores);
        if ($x == ($ancho - 1)) {
            $colorSiguiente = -1;
        } else {
            $colorIndiceSiguiente = imagecolorat($imagen, $x + 1, $y);
            $colorSiguiente = array_search($colorIndiceSiguiente, $totalColores);
        }
    
        if ($color == $colorSiguiente) {
            $contador++;
        } else {
            //echo $color . 'x' . ($contador+1) . ' ';
            echo $color . 'x' . ($contador-$x) . ' al ' . ($x) . ' ';
            $contador = 0;
        }
    }
    echo "\n";
}