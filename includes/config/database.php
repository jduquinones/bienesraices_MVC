<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost','root','12345','bienesraices');

    if(!$db){
        echo 'Error No se pudo conectar';
        exit;
    }

    return $db;
}