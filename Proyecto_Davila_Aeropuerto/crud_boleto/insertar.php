<?php
include("conexion.php");
$con=conectar();

$idboleto=$_POST['idboleto'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$destinariodevuelo=$_POST['destinariodevuelo'];
$fecha=$_POST['fecha'];
$clase=$_POST['clase'];
$precio=$_POST['precio'];

$sql="INSERT INTO boleto(idboleto, nombre, apellido, destinariodevuelo, fecha, clase, precio) 
VALUES ('$idboleto','$nombre','$apellido','$destinariodevuelo','$fecha','$clase','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: boleto.php");
    
}else {
}
?>