<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asistentes</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <a class="btn-1" href="index.php">Volver</a>
    <form action="sesion.php" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username" placeholder="Ingresa tu nombre de usuario"></p>
        <p>Contraseña: <br>
        <input type="password" name="password" placeholder="Ingresa tu contraseña"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
    </form>
</body>
</html>