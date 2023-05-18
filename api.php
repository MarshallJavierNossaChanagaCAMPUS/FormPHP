<?php
    header("Content-Type : application/json");

    $_DATA = json_encode(file_get_contents("php://input", true));
    
    $_METHOD = $_SERVER["REQUEST_METHOD"];

    $_HEADERS = apache_request_headers();

    var_dump($_HEADERS);

    //Para mostrar los datos recibidos desde el dom

    //var_dump($_FILES);

    //Mover un archivo enviado desde el html a la carpeta madre, el segundo paramtreo

    //move_uploaded_file($_FILES["archivo"]["tmp_name"], "img/M1.jpg");
?>