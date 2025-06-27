<?php
session_start();
if ($_SESSION){
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
        <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container px-4 text-center">
            <div class="row gx-5">
                <div class="col-sm-6 col-md-7">
                    <div class="p-3">
                        <img src="img/logoprincipal.png" alt="logo de acceso" class="img-responsive"/>
                    </div>
                </div>
                <div class="colcol-6 col-md-4">
                    <div class="p-3">
                        <form action="acceso.php" method="post">
                            <div class="cont-titulodeacceso" id="inicio">
                                <h1>Iniciar Sesión</h1>
                            </div>
                            <div class="row mb-3">
                                <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario"/>
                            </div>
                            <div class="row mb-3">
                                <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" onclick="mostrarContraseña()"/>
                            </div>
                            <button type="submit" class="btn form-control">Acceder</button>
                            <div class="cont-contraseña">
                                <p class="help-block"><a href="/Agendamiento2024/autoregistro_index.php">Registrar</a></p>
                                <p class="help-block"><a href="/Agendamiento2024/recuperar_index.php">¿Olvidaste tu contraseña?</a></p>
                            </div>
                                <?php if (!empty($_SESSION['error'])) { ?>
                            <div class="alerta-flotante">
                                <img src="img/alerta.png" alt="error" class="icono-alerta" />
                                    <?php echo $_SESSION['error']; ?>
                            </div>
                                <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
