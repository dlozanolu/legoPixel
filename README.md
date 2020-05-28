
# legoPixel (v.0.0.1)

Aplicación para convertir imágenes gif en cuadros pixelart.

Convierte una imagen gif en instrucciones en texto plano para fabricar un pixelart con piezas de Lego de 1x1 que puedas enmarcar o regalar.

El resultado final es muy bueno.

  

Instrucciones.

1. Elige una foto o genera una cara aquí: https://thispersondoesnotexist.com/
![enter image description here](https://i.imgur.com/fdawUIu.jpg)
2. He utilizado un tablero de Lego de 32x32. Cambia el tamaño a 32x32 y guarda el fichero como Gif. Esta aplicación te puede servir: https://www.photopea.com/. En caso de querer hacer el cuadro más grande, por ejemplo de 64x64, tendrás que cortar la imagen en 4 cuadros de 32x32.
![enter image description here](https://i.imgur.com/ixYKVm2.gif)
3. Para este ejemplo, yo tenía fichas de 1x1 en tonos de gris, en concreto: blancas, grises claras, grises ocuras, negras; por lo que convertí la imagen a blanco y negro, y reduje la calidad a 4 colores. Guarda la imagen como imagen.min.gif
![enter image description here](https://i.imgur.com/E5GjWQ9.gif)
4. Ejecuta "php leeFotoLego.php". Y obtendrás el número de piezas de cada color y el orden en el que debes colocar cada pieza de Lego de 1x1 en el tablero. Con habilidad, en 30 minutos tienes el cuadro hecho.

    Línea 0: 1x17 0x3 1x8 0x4 
    Línea 1: 1x17 0x2 1x9 0x3 1x1 
    Línea 2: 1x13 0x3 1x16 
    Línea 3: 1x5 0x13 1x14 
    Línea 4: 1x3 0x11 2x2 0x4 1x12 
    Línea 5: 1x2 0x11 2x4 0x6 1x9 
    Línea 6: 1x1 0x9 1x2 0x2 2x5 0x6 1x7 
    Línea 7: 1x1 0x5 2x1 0x3 1x2 0x2 2x6 0x6 1x6 
    Línea 8: 1x1 0x4 2x2 0x3 1x2 0x2 2x6 0x12 
    Línea 9: 0x4 2x3 0x1 1x1 0x1 1x3 0x1 2x2 3x2 2x2 0x12 
    Línea 10: 0x1 2x6 0x1 1x1 0x1 1x2 0x2 2x2 3x1 2x2 0x13 
    Línea 11: 2x8 0x1 1x2 0x3 2x4 0x14 
    Línea 12: 2x8 0x1 1x1 0x1 1x1 0x2 2x3 0x15 
    Línea 13: 2x8 0x6 2x3 0x1 2x2 0x8 2x1 0x3 
    Línea 14: 2x9 0x5 2x3 0x1 2x2 0x8 2x2 0x2 
    Línea 15: 2x9 0x3 2x8 0x8 2x2 0x2 
    Línea 16: 2x10 0x1 2x5 3x3 2x1 0x8 2x2 0x2 
    Línea 17: 2x9 0x2 2x3 3x5 2x1 0x2 2x1 0x2 2x1 0x2 2x3 0x1 
    Línea 18: 2x9 0x3 2x3 3x4 2x1 0x2 2x1 0x2 2x1 0x2 2x3 0x1 
    Línea 19: 2x8 0x5 2x5 3x1 2x1 0x1 2x2 0x4 2x3 0x2 
    Línea 20: 2x8 0x3 1x1 0x2 2x9 0x4 2x3 0x2 
    Línea 21: 2x6 3x1 2x1 0x2 1x1 0x3 2x1 3x2 2x1 0x2 2x3 0x2 2x4 0x3 
    Línea 22: 2x6 3x1 2x1 1x1 0x1 1x2 0x2 2x1 3x3 2x1 0x8 2x1 0x4 
    Línea 23: 0x1 2x5 3x1 2x1 0x2 1x2 0x2 2x1 3x3 2x2 0x12 
    Línea 24: 0x1 2x6 0x3 1x1 0x3 2x1 3x3 2x2 0x11 1x1 
    Línea 25: 0x2 2x5 0x1 2x1 0x1 1x2 0x1 2x2 3x3 2x2 0x7 1x5 
    Línea 26: 1x1 0x3 2x3 0x3 1x1 0x1 2x2 3x4 2x2 0x5 1x7 
    Línea 27: 1x2 0x10 2x2 3x2 2x4 0x4 1x8 
    Línea 28: 1x4 0x7 2x7 0x2 1x12 
    Línea 29: 1x7 0x10 2x1 1x14 
    Línea 30: 1x13 0x3 1x16 
    Línea 31: 1x10 0x5 1x17 

**Aclaraciones.**

Al código le he dedicado 30 minutos y a este readme 15. Pero creo que es una buena base.

  

**Lo siguiente**

Escribir los TO-DOS con todas las posibles mejoras a aplicar.