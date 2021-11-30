<?php

include("conexion.php");
$con=conectar();

$idprograma=$_GET['id'];

$sql="DELETE FROM programadevuelos  WHERE idprograma='$idprograma'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: programadevuelo.php");
    }
?>
