<?php $pg = 'nosotros' ?>

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
    <title>Sobre Nosotros</title>
</head>

<body>
    <?php include_once 'navs/navbar.php' ?>
    <div id="nosotros" class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="title-about ps-3 mt-3">
                    <p>SOBRE</p>
                    <h1>NOSOTROS</h1>
                </div>
            </div>

            <div class="carta mx-sm-1 mx-md-2 mx-lg-0 row row-cols-md-7">
            </div>
        </div>
        <?php include_once 'navs/footer.php' ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/nosotros.js"></script>
</body>

</html>