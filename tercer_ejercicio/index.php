<?php

$peso = 75;                 
$salario = 0.0;           
$nombre = "Daniel";           
$trabajo = false;         

echo "Mi nombre es $nombre, peso $peso kg, gano mensualmente $salario COP, ";

if ($trabajo == false) {
    echo "No tengo trabajo y necesito trabajo";
} else if ($trabajo == true) {
    echo "Tengo trabajo";
}