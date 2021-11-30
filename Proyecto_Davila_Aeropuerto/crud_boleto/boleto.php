<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM boleto";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Alta Boleto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta Boleto</h1>
                            <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="destinariodevuelo" placeholder="Destinario de vuelo">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha de viaje">
                                    <input type="text" class="form-control mb-3" name="clase" placeholder="Clase">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Davila_Aeropuerto/index.php"class="btn btn-primary">Ir a Inicio</a></li>
                                </form>
                                
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>ID boleto</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Destinario de vuelo</th>
                                        <th>Fecha de viaje</th>
                                        <th>Clase</th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th></th>
                                        <
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idboleto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['destinariodevuelo']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['clase']?></th>  
                                                <th><?php  echo $row['precio']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['idboleto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idboleto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>