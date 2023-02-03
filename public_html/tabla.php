<?php
//CONEXION A LA BASE DE DATOS
$conexion=mysqli_connect("162.241.61.210","jygnuest_root",")k?v&RG5Fmg&","jygnuest_boda");
?>


<!DOCTYPE html>
<html lang="zxx">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Asistentes</title>
        <link rel="stylesheet" type="text/css" href="css/tabla.css">
        <!-- Favicon -->
        <link rel="icon" href="./img/favicon.ico">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <a href="includes/logout.php" class="btn-1">Cerrar sesion</a>
                </div>
                <div class="row align-items-center justify-content-between">
                    <h1>Asistentes</h1>
                    <p>Bienvenido</p>
                </div>
            </div>
        </header>
    </body>
    <section class="table">
        <table class="table">
            <thead>
                <th>Nombres</th>
                <th>Telefono</th>
                <th>Asistencia</th>
                <th>Parentesco</th>
                <th>Mensaje</th>
            </thead>
            <?php
            $sql="SELECT * from asistentes";
            $result=mysqli_query($conexion,$sql)or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conectar), E_USER_ERROR);
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tbody>
                <tr>
                    <td data-label="nombres"><?php echo $mostrar['nombres']?></td>
                    <td data-label="telefono"><?php echo $mostrar['telefono']?></td>
                    <td data-label="asistencia"><?php echo $mostrar['asistencia']?></td>
                    <td data-label="parentesco"><?php echo $mostrar['parentesco']?></td>
                    <td data-label="mensaje"><?php echo $mostrar['mensaje']?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </section>
</html>    