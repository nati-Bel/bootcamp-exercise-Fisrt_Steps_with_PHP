<?php

//Declara una variable por cada tipo de dato y asignar un valor

//CADENA DE CARACTERES
$nombre = "Harry";

//FLOAT
$altura = 1.754;

//INTEGER
$edad = 17;

//BOOLEAN
$Ravenclaw = false;


//Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
//booleano (que imprima true o false), un array y un valor nulo (que imprima NULL)

//ARRAY
$amigos = ["Luna", "Ron", "Hermione"];

$superpoder = null;

echo $nombre;
echo "<br>";
echo $altura;
echo "<br>";
echo $edad;
echo "<br>";
var_dump ($Ravenclaw);
echo "<br>";
print_r ($amigos);
echo "<br>";
var_dump ($superpoder);

//Fácil
$nombre = "Luna"; //string
$apellido = "Lovegood"; //string
$edad = 42; //integer
$Ravenclaw = true; // boolean

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //FLOAT
var_dump ($promedio);
$nombre_completo = $nombre . " " .$apellido; // STRING
var_dump ($nombre_completo);
$presento_examen = (bool) 1; //TRUE
var_dump ($presento_examen);

//Avanzado
$numero_preguntas = 5 + "5"; //INTEGER
var_dump($numero_preguntas);
$numero_respuestas = "5" + 5; //INTEGER
var_dump($numero_respuestas);
$promedio_maximo =$numero_respuestas / 1.0; //INTEGER
$nargles = 3 + "5 nargles"; //INTEGER

//Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;
// ¿Cuál es el resultado según las tablas de verdad?
$es_un_michi_grande && $le_gusta_comer; //TRUE
$es_un_michi_grande || $sabe_volar; //TRUE
$sabe_volar || $tiene_2_patas; //FALSE
!$le_gusta_comer; //FALSE
!$le_gusta_comer || $es_un_michi_grande; //TRUE

//Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
//variable original
$apellido = strtoupper($apellido);
var_dump($apellido);

//Imprime en pantalla la longitud de la variable tipo string
echo (strlen($apellido));

//Imprime en pantalla la cantidad de palabras de la variable tipo string
$sentence = "Que bien me lo estoy pasando con el gato";
var_dump(str_word_count("Que bien me lo estoy pasando con el gato",0));
echo "<br>";

//Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
//variable original.

echo strrev($sentence);
echo "<br>";


//Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
echo str_replace("gato","Michi",$sentence);

//Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
$num_a= 34;
$num_b=7;
echo "<br>";

echo $num_a, "<br>", $num_b;
echo "<br>";

//Suma ambas variables de tipo integer e imprime en pantalla.
echo $num_a+$num_b;
echo "<br>";

//Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
//consola
$num_c=1;
$num_d=0;

var_dump($num_c, $num_d);
echo "<br>";

//a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
//en pantalla y consola.
$num_c=(bool)$num_c;
$num_d=(bool)$num_d;

var_dump($num_c, $num_d);





?>

