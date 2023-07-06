<?php

function get_duck() {
    $random_number = rand(1,5);
    print_r($random_number);
    switch($random_number){
        case 1 : 
            echo "Pato Donald";
            break;
        case 2 :
            echo "Pato Daisy";
            break;
        case 3 :
            echo "Pato Lucas";
            break;
        case 4 :
            echo "Pato Psyduck";
            break;
        case 5 :
            echo "El Patito feo";
            break;
        default:
            echo "Lo sentimos los patos están trabajando";

    }
}

get_duck();

?>