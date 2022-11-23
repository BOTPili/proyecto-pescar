<nav class="navbar navbar-expand-lg navbar-dark  static-top" style=" background: rgb(0,0,0);
    background: linear-gradient(100deg, rgba(0,0,0,1) 50%, rgba(130,59,129,1) 100%); ">
    <div class="container-fluid">
      <div class="d-flex align-items-center">

        <a class="navbar" href="#">
          <img src="../images/logo-educarte.png" alt="..." width="100">
        </a>
        <h2>EDUCART</h2>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "inicio" ? "active" : "" ?> aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "cursos" ? "active" : "" ?> href="capacitaciones.php">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "foro" ? "active" : "" ?> href="foro.php">Foro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "contacto" ? "active" : "" ?> href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "regitsro" ? "active" : "" ?> href="registro.php">Registrate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "ingresa" ? "active" : "" ?> href="ingresa.php">Ingresar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-end" <?php echo $pg == "nosotros" ? "active" : "" ?> href="nosotros.php">Sobre nosotros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="../navbar.js"></script>