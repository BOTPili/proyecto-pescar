<?php $pg = 'contacto' ?>

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
    <title>Contacto</title>
</head>

<body>
    <?php include_once 'navbar.php' ?>

    <div class="container-fluid">
        <div class="contacto row" style="height: 100vh;">
            <div class="">
                <div class="d-flex flex-column text-center my-4 ms-5">
                    <h1 class="title-contact ">CONTACTO</h1>
                    <h3 class="d-inline-block">¿Tenes alguna duda? Contáctanos.</h3>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column align-items-center">
                        <div class="mt-5">
                            <img class="img-fluid d-inline-block" src="../images/logo-educarte.png" alt="" width="120">
                        </div>
                        <div class="text-center">
                            <p>Teléfono: +500295772</p> <br>
                            <p>Email: notedamosbola@gmail.com</p>
                        </div>
                    </div>

                    <form class="bg-white col-12 col-sm-4 p-3 shadow rounded">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Razón de contacto</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Escribi tu duda aqui</label>
                            <textarea class="form-control" name="" id="" cols="10" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-violet">Enviar</button>
                        </div>
                    </form>

                    <div class="d-flex flex-column mt-5">
                        <p>Nuestras redes sociales</p>
                        <div class="my-2">
                            <a class="d-flex align-items-center nav-link" href=""><i class="fa-brands fa-facebook"></i>
                                /EducArteFB </a>
                        </div>
                        <div class="my-2">
                            <a class="d-flex align-items-center nav-link" href=""><i class="fa-brands fa-youtube"></i>
                                /EducArteYT</a>
                        </div>
                        <div class="my-2">
                            <a class="d-flex align-items-center nav-link" href=""><i class="fa-brands fa-instagram"></i>
                                /EducArteIG</a>
                        </div>
                        <div class="my-2">
                            <a class="d-flex align-items-center nav-link" href=""><i
                                    class="fa-brands fa-whatsapp"></i>+5259888334</a>
                        </div>
                        <div class="my-2">
                            <a class="d-flex align-items-center nav-link" href=""><i
                                    class="fa-brands fa-twitter"></i>/EducArteTW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>