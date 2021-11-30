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

$sql="INSERT INTO programadevuelos(idprograma, lineaaerea, escalas, aterrizaje, despegue, diasdelasemana, distancia) 
VALUES ('$idprograma','$lineaaerea','$escalas','$aterrizaje','$despegue','$diasdelasemana','$distancia')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: programadevuelo.php");
    
}else {
}
?>