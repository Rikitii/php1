<?php

$num =rand(20,25);

echo $num . "<br>";

if ($num == 20) {
    echo "Veinte";
} else if ($num == 21) {
    echo "Veintiuno";
} else if ($num == 22) {
    echo "Veintidós";
} else if ($num == 23) {
    echo "Veintitrés";
} else if ($num == 24) {
    echo "Veinticuatro";
} else if ($num == 25) {
    echo "Veinticinco";
} else if ($num < 20) {
    echo "El numero no es valido";
} else if ($num > 25) {
    echo "El numero no es valido";
}
