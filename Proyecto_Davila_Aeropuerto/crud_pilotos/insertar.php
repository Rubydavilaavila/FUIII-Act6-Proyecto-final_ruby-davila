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

$sql="INSERT INTO pilotos (iddepiloto, nombre, apellido, horasdevuelo, numerodelicencia, edad, sexo) 
VALUES ('$iddepiloto','$nombre','$apellido','$horasdevuelo','$numerodelicencia','$edad','$sexo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pilotos.php");
    
}else {
}
?>