<?php
    //var_dump($_POST);

    //Para recibir datos desde el dom

    //var_dump($_FILES);

    //Mover un archivo enviado desde el html a la carpeta madre, el tercer paramtreo

    move_uploaded_file($_FILES["archivo"]["tmp_name"], "img/M1.jpg");


    echo `<a href="index.html">Atras...</a>`;
?>