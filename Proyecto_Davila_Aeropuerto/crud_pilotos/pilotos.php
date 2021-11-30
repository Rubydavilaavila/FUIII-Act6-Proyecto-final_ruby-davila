<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pilotos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Alta Pilotos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta Pilotos</h1>
                            <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="horasdevuelo" placeholder="Horas de vuelo">
                                    <input type="text" class="form-control mb-3" name="numerodelicencia" placeholder="Numero de licencia">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Davila_Aeropuerto/index.php"class="btn btn-primary">Ir a Inicio</a></li>
                                </form>
                            

                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>ID de piloto</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Horas de vuelo</th>
                                        <th>Numero de licencia</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
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
                                                <th><?php  echo $row['iddepiloto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['horasdevuelo']?></th>
                                                <th><?php  echo $row['numerodelicencia']?></th>
                                                <th><?php  echo $row['edad']?></th>  
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['iddepiloto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['iddepiloto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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