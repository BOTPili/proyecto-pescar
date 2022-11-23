<?php $pg = 'registro'  ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../images/logo-educarte.png" type="image/x-icon">
    <title>Registro</title>
</head>

<body>
    <?php include_once 'navbar.php' ?>
    <div class="container-fluid">
        <div id="registro" class="row" style="height: 100vh;">
            <div class="d-sm-flex justify-content-sm-center ">
                <form class="bg-white col-8 col-sm-4 my-4 py-1 px-4 shadow rounded">
                    
                    <div class="d-sm-flex justify-content-center " >
                        <img class="img-fluid d-inline-block" src="../images/logo-educarte.png" alt="" width="180">
                    </div>
                    <p class="" >Bienvenido! <br> Acá podés registrarte a la página, <br> solo tenes que completar tus datos!</p>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="d-sm-flex justify-content-sm-center mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="mx-1 form-check-label" for="exampleCheck1">Acepto los terminos de condiciones</label>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <button type="submit" class="btn btn-violet px-5 ">REGISTRATE</button>
                        <p class="my-2" >Ya tienes cuenta? <a href="ingresa.php">Ingresa aqui</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>