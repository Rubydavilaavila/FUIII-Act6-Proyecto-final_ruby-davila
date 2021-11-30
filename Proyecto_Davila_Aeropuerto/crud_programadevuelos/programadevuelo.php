<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM programadevuelos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alta en programa de vuelo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta en programa de vuelo</h1>
                            <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="lineaaerea" placeholder="Linea aerea">
                                    <input type="text" class="form-control mb-3" name="escalas" placeholder="Escalas">
                                    <input type="text" class="form-control mb-3" name="aterrizaje" placeholder="Aterrizaje sin bajar personas">
                                    <input type="text" class="form-control mb-3" name="despegue" placeholder="Despegue sin bajar personas">
                                    <input type="text" class="form-control mb-3" name="diasdelasemana" placeholder="Dias de la semana">
                                    <input type="text" class="form-control mb-3" name="distancia" placeholder="Distancia">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Davila_Aeropuerto/index.php"class="btn btn-primary">Ir a Inicio</a></li>
                                </form>
                                
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>ID programa</th>
                                        <th>Linea aerea</th>
                                        <th>Escalas</th>
                                        <th>Aterrizaje sin bajar personas</th>
                                        <th>Despegue sin bajar personas</th>
                                        <th>Dias de la semana</th>
                                        <th>Distancia</th>
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
                                                <th><?php  echo $row['idprograma']?></th>
                                                <th><?php  echo $row['lineaaerea']?></th>
                                                <th><?php  echo $row['escalas']?></th>
                                                <th><?php  echo $row['aterrizaje']?></th>
                                                <th><?php  echo $row['despegue']?></th>
                                                <th><?php  echo $row['diasdelasemana']?></th>  
                                                <th><?php  echo $row['distancia']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['idprograma'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idprograma'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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