<?php

    function conexion(){

    $host = "host=dpg-d723dbkhg0os73am0jog-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=dbtest_a1y3";
    $user = "user=dbtest_a1y3_user";
    $password = "password=vvHNmH58Ku7Er3RKtOCajujSh3yQSGBG";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>


