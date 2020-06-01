<?php
$mostrarMapa = false; //para hacerme una idea de los colores
$colorAMostrar = 0; //si vale -1 muestra todos.
$nombreDelFichero = 'lanzadera.min.gif';
$dimensiones = getimagesize($nombreDelFichero);
$ancho = $dimensiones[0];
$alto = $dimensiones[1];
$contador = 0;
$imagen = imagecreatefromgif($nombreDelFichero);
$handle = fopen("php://stdin", "r");

for ($y=0; $y < $alto; $y++) {
    $texto = "Línea " . ($y+1) . ": ";
    echo $texto;
    if (!$mostrarMapa) {
        shell_exec('say "' . $texto . '"');
        fgets($handle);
    }

    for ($x=0; $x < $ancho; $x++) {
        $color = imagecolorat($imagen, $x, $y);

        if ($mostrarMapa) {
            echo $color;
        } else {
            if ($x == 0) {
                $contador = 0;
            }
            if ($x == ($ancho - 1)) {
                $colorSiguiente = -1;
            } else {
                $colorSiguiente = imagecolorat($imagen, $x + 1, $y);
            }

            if ($color == $colorSiguiente) {
                $contador++;
            } else {
                //echo $color . 'x' . ($contador+1) . ' ';
                if ($colorAMostrar == -1) {
                    echo $color . 'x' . ($x-$contador+1) . ' al ' . ($x+1) . ' ';
                } else {
                    if ($color == $colorAMostrar) {
                        $texto = ($x-$contador+1) . ' al ' . ($x) . '. ';
                        echo $texto;
                        shell_exec('say "' . $texto . '"');
                        fgets($handle);
                    }
                }
                $contador = 0;
            }
        }
    }
    echo "\n";
}