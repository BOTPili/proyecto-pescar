

<?php $pg = 'inicio'  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/estilos.css" rel='stylesheet' />
  <link href="../css/fontawesome/css/fontawesome.css" rel='stylesheet' />
  <link href="../css/fontawesome/css/all.css" rel='stylesheet' />
  <link rel="shortcut icon" href="../images/logo-educarte.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <title>Proyecto Pescar</title>
</head>

<body>

  <?php include_once 'navbar.php' ?>

  <div class="container-fluid">
    <div id="inicio" class="row">
      <!-- d-sm-flex justify-content-sm-around flex-wrap -->
      <div class=" col-12 col-sm-12">
          <div class="col-sm-12 d-flex" >
            <h1 class="title-home d-inline-block" style="position: absolute ; ">EMPEZA <br>
              TÚ CAMINO,
              HACELO CON
              NOSOTROS.</h1>
              <img class="d-inline-block ps-5 img-fluid logo-inicio" src="../Recursos/Imagen de inicio.png" alt="" width="1150">
              <div class="d-flex justify-content-end align-items-center">
                <div class="col-sm-12 d-inline-block">
                  <h3 style="position: absolute; right: 130px;" >EDUCACIÓN VIRTUAL</h3>
                  <p class="text-white" style="position: absolute; right: 70px; bottom: 109px; ">CURSOS PARA NIÑOS, ADOLESCENTES, ADULTOS Y ADULTOS MAYORES</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-12">
              <!-- <div class="d-flex justify-content-end align-items-center ">
                <div class="col-sm-4">
                  <h3>EDUCACIÓN VIRTUAL</h3>
                  <p class="text-white">CURSOS PARA NIÑOS, ADOLESCENTES, ADULTOS Y ADULTOS MAYORES</p>
                </div>
              </div> -->
            </div>
            <div style="margin-right: 50px !important;" class="d-flex me-5 justify-content-end align-items-center">
              <div class="d-flex align-items-center">
                <img src="../images/logo-educarte.png" alt="" width="90">
                <h4>EDUCART</h4>
              </div>
              <div>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
              </div>
            </div>
      </div>
    </div>
  </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  crossorigin="anonymous"></script>
<script src="../navbar.js"></script>
</html>