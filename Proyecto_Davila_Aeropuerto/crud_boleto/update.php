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


$sql="UPDATE boleto SET  nombre='$nombre',apellido='$apellido',destinariodevuelo='$destinariodevuelo',fecha='$fecha',clase='$clase',precio='$precio'
WHERE idboleto='$idboleto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: boleto.php");
    }
?>