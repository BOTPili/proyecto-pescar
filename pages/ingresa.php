<?php $pg = 'ingresa'  ?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../images/logo-educarte.png" type="image/x-icon">
    <title>Ingreso</title>
</head>
<body>
<?php include_once 'navbar.php' ?>
<div class="container-fluid">
    <div id="login" class="row" style="height: 100vh;">
    <div class="d-sm-flex d-flex justify-content-center justify-content-sm-center ">
                <form style="height:550px ;" class="bg-white col-9 col-sm-4 my-4 px-4 shadow rounded">
                    
                    <div class="d-sm-flex d-flex justify-content-center justify-content-sm-center " >
                        <img class="img-fluid d-inline-block" src="../images/logo-educarte.png" alt="" width="180">
                    </div>
                    <div class="mb-5" >
                        <h5>INICIA SESIÓN</h5>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" class="form-control rounded " id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control rounded">
                        <p class="my-2" >Olvidaste tu contraseña? <a href="#">Recuperala aca</a> </p>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-2">
                        <button type="submit" class="btn btn-violet my-3 px-5 ">INICIAR SESIÓN</button>
                        <p class="my-2" >Todavia no tienes cuenta? <a href="registro.php">Ingresa aqui</a> </p>
                    </div>
                </form>
            </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>