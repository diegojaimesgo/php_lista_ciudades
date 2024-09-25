<?php   
//Comentario 1//
/*Comentario 2
de varias líneas*/  
# Lista de ciudades con un clima, ubicación y atractivo turistico específico

function recomendacion(){
    $clima = array("Bogotá" => "Frío", "Montería" => "Cálido", "Medellín" => "Templado");
    $ubicacion = array("Riohacha" => "Norte", "Leticia" => "Sur", "Bucaramanga" => "Oriente", "Medellín" => "Occidente");
    $turismo = array("Cartagena" => "Mar", "Villavicencio" => "Llanura", "Quindío" => "Café", "Cali" => "Salsa");

    switch("clima"){
        case "clima":
            echo array_search("Frío", $clima);
            break;
        case "ubicación":
            echo array_search("Norte", $ubicacion);
            break;
        case "turismo":
            echo array_search("Mar", $turismo);
    }
}

recomendacion();

?>