<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM programadevuelos WHERE idprograma='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                    <input type="hidden" name="idprograma" value="<?php echo $row['idprograma']  ?>">
                                <input type="text" class="form-control mb-3" name="lineaaerea" placeholder="Linea aerea" value="<?php echo $row['lineaaerea']  ?>">
                                <input type="text" class="form-control mb-3" name="escalas" placeholder="Escalas" value="<?php echo $row['escalas']  ?>">
                                <input type="text" class="form-control mb-3" name="aterrizaje" placeholder="Aterrizaje sin bajar personas" value="<?php echo $row['aterrizaje']  ?>">
                                <input type="text" class="form-control mb-3" name="despegue" placeholder="Despegue sin bajar personas" value="<?php echo $row['despegue']  ?>">
                                <input type="text" class="form-control mb-3" name="diasdelasemana" placeholder="Dias de la semana" value="<?php echo $row['diasdelasemana']  ?>">
                                <input type="text" class="form-control mb-3"name="distancia" placeholder="Distancia" value="<?php echo $row['distancia']  ?>">
                            
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>