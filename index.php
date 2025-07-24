<?php
$servidor="localhost";
$usuario="root";
$pass="";
$base="wiwi";

$conexion=mysqli_connect($servidor,$usuario,$pass,$base);

if (!$conexion)
{
    die("La conexion fallo  a mi base de datos" . mysqli_connect_error());
}
?>