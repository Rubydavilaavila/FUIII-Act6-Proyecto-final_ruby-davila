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

$sql="INSERT INTO aviones(id, nombre, email, colordeavion, modelodeavion, tipodeavion, capacidad) 
VALUES ('$id','$nombre','$email','$colordeavion','$modelodeavion','$tipodeavion','$capacidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: aviones.php");
    
}else {
}
?>