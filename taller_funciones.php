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


$natis_array = [1,2,3,4,5,6,7,8,9,10];
//Obtén el largo del array e imprime en pantalla y consola.
echo count($natis_array);
echo "<br>";

//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
array_push($natis_array,"yellow");
print_r($natis_array);

//Ahora agrega 2 elementos más a tu array e imprime en pantalla.
array_push($natis_array, 2000, "amapola");
print_r($natis_array);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
$otro_array = array(56, true, "dalia");
print_r(array_merge($natis_array,$otro_array));

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista

function create_list () {
    $numbers = array(4, 6,23,4,8);
    echo "<ul>";
    foreach($numbers as $number) {  //end when $i is larger than amount of people
       echo ("<li>$number</li>\n");
    }
    echo "</ul>";
}

echo create_list();

//Crear una función que añade un número al array
function add_number ($number_to_add, $array) {
    array_push($array,$number_to_add);
    print_r ($array);
}

$numbers = array(4, 6,23,4,8);
print_r($numbers);
echo "<br>";

add_number(77, $numbers);

//Crear una función que elimine los números pares de ese array.

function determine_if_even ($num) {
    if ($num%2 ===0){
        return true;
    };
};
function delete_even () {
    $numbers = array(4, 6,23,4,8,55,3,11,12,44);
    print_r(array_filter($numbers,"determine_if_even"));
};

echo delete_even();

//Crear una función que devuelva el número mayor de un array.
//add_number(77, $numbers);
function show_max($array) {
    echo(max($array));
};

show_max($numbers);

echo "<br>";
//Crear una función que devuelva el número menor de un array.

function show_min($array) {
    echo(min($array));
};

show_min($numbers);

//Crear un función que convierta en minúsculas todas las letras de un texto.
$my_text = "THIS is My TeXT IN miXED CASE";
function convert_to_LC ($string) {
    echo (strtolower($string));
};
convert_to_LC($my_text);
echo "<br>";

//Crear una función que convierta en mayúsculas todas las letras de un texto.
function convert_to_UC ($string) {
    echo (strtoupper($string));
};
convert_to_UC($my_text);
echo "<br>";


//Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
//en mayúscula.

$climber_dogs = array("suni", "chewie", "sendy", "rico");
function capitalize_names ($array) {
    foreach($array as $item) {
        echo (ucwords($item));
    }
};
capitalize_names($climber_dogs);

//Crear una clase coche con sus atributos y un atributo puede ser de tipo array
class furgo {
    public $name;
    public $color;
    public $km;
    public $brand;
    public $equipment;
    public $doors;

    public function get_brand() {
        return $this->brand;}
    public function get_doors() {
        return $this->doors;}
    public function get_equipment($position) {
        return $this->equipment[$position];}
};

$natineta = new furgo();

$natineta ->name = "Natineta";
$natineta ->color = "grey";
$natineta ->km = 189000;
$natineta ->brand = "Peugeot";
$natineta ->equipment = array("unfoldable bed", "camper kitchen", "compostable toilet");
$natineta ->doors = 5;

//Crear una función que devuelva la marca del carro.
echo $natineta -> get_brand();
echo "<br>";

//Crear una función que devuelva la cantidad de puertas que tiene el carro.
echo $natineta -> get_doors();
echo "<br>";

//Crear una función que devuelva un atributo del array.
print_r ($natineta -> get_equipment(2));
echo "<br>";




?>