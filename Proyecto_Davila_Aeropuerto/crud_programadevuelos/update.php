<?php

include("conexion.php");
$con=conectar();

$idprograma=$_POST['idprograma'];
$lineaaerea=$_POST['lineaaerea'];
$escalas=$_POST['escalas'];
$aterrizaje=$_POST['aterrizaje'];
$despegue=$_POST['despegue'];
$diasdelasemana=$_POST['diasdelasemana'];
$distancia=$_POST['distancia'];


$sql="UPDATE programadevuelos SET  lineaaerea='$lineaaerea',escalas='$escalas',aterrizaje='$aterrizaje',despegue='$despegue',diasdelasemana='$diasdelasemana',distancia='$distancia'
WHERE idprograma='$idprograma'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: programadevuelo.php");
    }
?>