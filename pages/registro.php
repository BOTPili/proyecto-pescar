<?php $pg = 'registro' ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="../css/fontawesome/css/fontawesome.css" rel='stylesheet' />
    <link href="../css/fontawesome/css/all.css" rel='stylesheet' />
    <link rel="shortcut icon" href="../images/logo-educarte.png" type="image/x-icon">
    <title>Registro</title>
</head>

<body>
    <?php include_once 'navs/navbar.php' ?>
    <div id="registro" class="container-fluid">
        <div class="row">
            <div class="d-sm-flex d-flex justify-content-center justify-content-sm-center ">
                <form class="bg-white col-9 col-sm-4 my-3 py-1 px-4 shadow rounded" action="registro.php" method="POST">

                    <div class="d-sm-flex  d-flex justify-content-center justify-content-sm-center ">
                        <img class="img-fluid d-inline-block" src="../images/logo-educarte.png" alt="" width="180">
                    </div>
                    <p class="">Bienvenido! <br> Acá podés registrarte a la página, <br> solo tenes que completar tus
                        datos!</p>

                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="txtApellido" id="txtApellido">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail">
                    </div>
                    <div class="mb-3">
                        <label for="fechNac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="fechNac" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numPassword" class="form-label">Contraseña</label>
                        <input type="password" name="numPassword" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numPassword" class="form-label">Repetir contraseña</label>
                        <input type="password" name="numPassword" class="form-control">
                    </div>
                    <div class="d-sm-flex justify-content-sm-center mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="mx-1 form-check-label" for="exampleCheck1">Acepto los terminos de
                            condiciones</label>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button type="submit" class="btn btn-violet px-5 ">REGISTRATE</button>
                        <p class="my-2">Ya tienes cuenta? <a href="ingresa.php">Ingresa aqui</a> </p>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once 'navs/footer.php' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>