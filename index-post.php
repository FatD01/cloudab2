<?php
include("conexion.php");
$con = conexion();

$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

// Especificamos el nombre de la columna ANTES de los valores
$sql = "INSERT INTO persona (documento, nombre, apellido, direccion, celular) 
        VALUES ('$doc', '$nom', '$ape', '$dir', '$cel')";

$query = pg_query($con, $sql);

if($query){
    header("location:index.php");
} else {
    echo "Error: " . pg_last_error($con);
}
?>