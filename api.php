<?php
    //Define el tipo del contenido

    header("Content-Type : application/json");

    //Este convierte todos los datos de los input en un array asociativo

    $_DATA = json_encode(file_get_contents("php://input", true));

    //Este se usa para obtener el metodo http de la solicitud
    
    $_METHOD = $_SERVER["REQUEST_METHOD"];

    //Se utiliza para obtener los headers con un array asociativo

    $_HEADERS = getallheaders();

    //Para mostrar los headers

    var_dump($_HEADERS);
?>