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
        <section id="login">
            <div class="container-fluid">
                <div class="row vh-100">
                    <div class="col-5 d-none d-lg-block position-relative">
                        <div class="bg-image"></div>
                    </div>
                    <div class="col-sm-10 col-lg-6 px-md-5 align-self-center mx-auto">
                        <div class="text-center mb-4">
                            <h6>Inicia sesión con tu cuenta</h6>
                        </div>
                        <div class="card border-0 round-3 px-md-5 py-2">
                            <div class="card-header bg-white border-bottom-0 text-center">
                                <img src="img/Hospital.png" alt="">
                            </div>
                            <div class="card-body pt-0">
                                <form action="#" class="row g-3">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail" class="form-label">Correo Electrónico</label>
                                        <span class="text-danger">*</span>
                                        <input type="email" class="form-control rounded-0" id="exampleInputEmail" placeholder="correo@ejemplo.com">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputPassword5" class="form-label">Contraseña</label>
                                        <span class="text-danger">*</span>
                                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <a href="#" class="f-password">
                                        <u>¿Olvidaste tu contraseña</u>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
