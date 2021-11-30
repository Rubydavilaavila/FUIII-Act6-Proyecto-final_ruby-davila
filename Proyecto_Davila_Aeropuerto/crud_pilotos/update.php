<?php

include("conexion.php");
$con=conectar();

$iddepiloto=$_POST['iddepiloto'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$horasdevuelo=$_POST['horasdevuelo'];
$numerodelicencia=$_POST['numerodelicencia'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];


$sql="UPDATE pilotos SET nombre='$nombre',apellido='$apellido',horasdevuelo='$horasdevuelo',numerodelicencia='$numerodelicencia',edad='$edad',sexo='$sexo'
WHERE iddepiloto='$iddepiloto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pilotos.php");
    }
?>