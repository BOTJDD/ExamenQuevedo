<?php
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '2001', 'bienesraices_crud');
    //Verifica si conecto o no
    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
}