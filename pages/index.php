<?php $pg = 'inicio' ?>

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
  <link rel="stylesheet" href="../css/index.css" />
  <title>Proyecto Pescar</title>
</head>

<body>

  <?php include_once 'navbar.php' ?>

  <main id="inicio-container">
    <div id="inicio-main">
      <section class="inicio-title-container">
        <h2 class="inicio-title">EMPEZA<br />TÚ CAMINO, HACELO CON NOSOTROS.</h2>
      </section>
      <section class="inicio-image">
        <aside class="inicio-container-imagen">
          <img class="inicio-imagen" src="../Recursos/Imagen de inicio.png">
        </aside>
        <h6 class="inicio-copyrigth">©Copyrigth 2022</h6>
      </section>
      <section class="inicio-redes-container">
        <div class="inicio-subtitulos">
          <h3 class="inicio-subtitle-3">EDUCACIÓN VIRTUAL</h3>
          <h5 class="inicio-subtitle-5">Cursos para niños, adolescentes, adultos y adultos mayores</h5>
        </div>
        <div class="inicio-redes">
          <div class="inicio-redes-title-logo"> 
            <img src="../images/logo-educarte.png" alt="" class="inicio-logo"
              width="85">
            <h4 class="inicio-educart-redes">EDUCART</h4>
          </div>
          <div class="inicio-redes-social">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- <div class="container-fluid">
    <div id="inicio" class="row">
      <div class=" col-12 col-sm-12">
          <div class="col-sm-12 d-flex" >
            <h1 class="title-home d-inline-block" style="position: absolute ; ">EMPEZA <br>
              TÚ CAMINO,
              HACELO CON
              NOSOTROS.</h1>
              <img class="d-inline-block ps-2 img-fluid logo-inicio" src="../Recursos/Imagen de inicio.png" alt="" width="1150">
              <div class="d-flex justify-content-end align-items-center">
                <div class="col-sm-12 d-inline-block">
                  <h3 style="position: absolute; right: 130px;" >EDUCACIÓN VIRTUAL</h3>
                  <p class="text-white" style="position: absolute; right: 70px; bottom: 109px; ">CURSOS PARA NIÑOS, ADOLESCENTES, ADULTOS Y ADULTOS MAYORES</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-12">
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
  </div> -->
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  crossorigin="anonymous"></script>
<script src="../navbar.js"></script>

</html>