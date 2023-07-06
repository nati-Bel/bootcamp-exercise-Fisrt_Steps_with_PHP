<?php

//Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
//en pantalla y por consola el resultado

function sum_numbers($num1, $num2){
    return ($num1 + $num2);
};

echo sum_numbers(6,8);
echo "<br>";

//Crear función que determine si un número es par o impar. Imprime por consola y pantalla
function determine_odd ($number){
    $result = $number%2;
    switch($result) {
        case 0 :
            echo "$number is even";
            break;
        default :
            echo"$number is odd";
    };
}
 
echo determine_odd (7);
echo "<br>";
echo determine_odd (6);
echo "<br>";
echo determine_odd (77363);
echo "<br>";
echo determine_odd (964);
echo "<br>";

?>