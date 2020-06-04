<?php
$mostrarMapa = false; //para hacerme una idea de los colores
$colorAMostrar = 0; //si vale -1 muestra todos.
$ultimaLineaHecha = 200; //para seguir por la línea que me quedé
$nombreDelFichero = 'lanzadera.min.gif';
$dimensiones = getimagesize($nombreDelFichero);
$ancho = $dimensiones[0];
$alto = $dimensiones[1];
$contador = 0;
$imagen = imagecreatefromgif($nombreDelFichero);
$handle = fopen("php://stdin", "r");

if ($colorAMostrar > -1) {
    echo "Instrucciones para el color 0.\n\n";
}
for ($y=0; $y < $alto; $y++) {
    $texto = "Línea " . ($y+1) . ": ";
    echo $texto;
    if (!$mostrarMapa) {
        if ($y >= $ultimaLineaHecha) {
            shell_exec('say "' . $texto . '"');
            fgets($handle);
        }
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
                $pixelDesde = $x-$contador+1;
                $pixelHasta = $x+1;
                //echo $color . 'x' . ($contador+1) . ' ';
                if ($colorAMostrar == -1) {
                    echo $color . 'x' . $pixelDesde . ' al ' . $pixelHasta . ' ';
                } else {
                    if ($color == $colorAMostrar) {
                        if ($pixelDesde == $pixelHasta) {
                            $texto = "$pixelDesde. ";
                        } else {
                            $texto = "$pixelDesde al $pixelHasta. ";
                        }
                        echo $texto;
                        if ($y >= $ultimaLineaHecha) {
                            shell_exec('say "' . $texto . '"');
                            fgets($handle);
                        }
                    }
                }
                $contador = 0;
            }
        }
    }
    echo "\n";
}
