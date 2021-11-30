<?php

include("conexion.php");
$con=conectar();

$iddepiloto=$_GET['id'];

$sql="DELETE FROM pilotos  WHERE iddepiloto='$iddepiloto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pilotos.php");
    }
?>
