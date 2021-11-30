<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$colordeavion=$_POST['colordeavion'];
$modelodeavion=$_POST['modelodeavion'];
$tipodeavion=$_POST['tipodeavion'];
$capacidad=$_POST['capacidad'];


$sql="UPDATE aviones SET  nombre='$nombre',email='$email',colordeavion='$colordeavion',modelodeavion='$modelodeavion',tipodeavion='$tipodeavion',capacidad='$capacidad'
WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: aviones.php");
    }
?>