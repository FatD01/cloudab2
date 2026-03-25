<?php

function conexion(){

    $host = "host=dpg-d723dbkhg0os73am0jog-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=dbtest_a1y3";
    $user = "user=dbtest_a1y3_user";
    $password = "password=vvHNmH58Ku7Er3RKtOCajujSh3yQSGBG";
    
    // ESTA ES LA LÍNEA QUE TE FALTA:
    $ssl = "sslmode=require"; 

    // Agregamos $ssl al final de la cadena
    $db = pg_connect("$host $port $dbname $user $password $ssl");

    return $db;
}

?>