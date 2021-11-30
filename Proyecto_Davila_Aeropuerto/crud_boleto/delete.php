<?php

include("conexion.php");
$con=conectar();

$idboleto=$_GET['id'];

$sql="DELETE FROM boleto  WHERE idboleto='$idboleto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: boleto.php");
    }
?>
