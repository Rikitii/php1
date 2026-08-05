<?php

$num = rand(0, 100);

echo "El digito aleatorio es: $num <br>";

if ($num < 50) {
    echo "El número es menor a 50.";
} else if ($num == 50) {
    echo "El numero es igual a 50";
} else if ($num > 50) {
    echo "El numero es mayor a 50";
}

