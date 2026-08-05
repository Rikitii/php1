<?php



$primero = $_POST["primero"];
$segundo = $_POST["segundo"];
$tercero = $_POST["tercero"];

if ($primero == $segundo and $segundo == $tercero) {

    echo "Los tres números son iguales";

} else if ($primero == $segundo) {

    if ($tercero > $primero) {
        echo "El primer numero y el segundo numero son iguales";
        echo "<br>";
        echo "El tercer numero es el menor";
    } else {
        echo "El primer numero, el tercer numero son iguales";
        echo "<br>";
        echo "El tercer numero es el menor";
    }

} else if ($primero == $tercero) {

    if ($segundo > $primero) {
        echo "El primer numero y el tercer numero son iguales";
        echo "<br>";
        echo "El segundo numero es el mayor";
    } else {
        echo "El primer numero y el tercer son iguales";
        echo "<br>";
        echo "El segundo es el menor";
    }

} else if ($segundo == $tercero) {

    if ($primero > $segundo) {
        echo "El segundo numero y el tercer numero son iguales";
        echo "<br>";
        echo "El primer numero es el mayor";
    } else {
        echo "El segundo numero y el tercer numero son iguales";
        echo "<br>";
        echo "El primer numero es el menor";
    }

} else {

    if ($primero > $segundo and $primero > $tercero) {

        if ($segundo > $tercero) {
            echo "Mayor: = $primero <br>";
            echo "Medio: = $segundo <br>";
            echo "Menor: = $tercero";
        } else {
            echo "Mayor: = $primero <br>";
            echo "Medio: = $tercero <br>";
            echo "Menor: = $segundo";
        }

    } else if ($segundo > $primero and $segundo > $tercero) {

        if ($primero > $tercero) {
            echo "Mayor: = $segundo <br>";
            echo "Medio: = $primero <br>";
            echo "Menor: = $tercero";
        } else {
            echo "Mayor: = $segundo <br>";
            echo "Medio: = $tercero <br>";
            echo "Menor: = $primero";
        }

    } else {

        if ($primero > $segundo) {
            echo "Mayor: = $tercero <br>";
            echo "Medio: = $primero <br>";
            echo "Menor: = $segundo";
        } else {
            echo "Mayor: = $tercero <br>";
            echo "Medio: = $segundo <br>";
            echo "Menor: = $primero";
        }

    }

}
