<?php $pg = 'foro' ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/foro.css">
    <link rel="shortcut icon" href="../images/logo-educarte.png" type="image/x-icon">
    <title>Foro</title>
</head>

<body>
    <?php include_once 'navbar.php' ?>
    <div class="foro-main-container">
        <div class="foro-main">
            <div class="foro-container-title">
                <h2 class="foro-title">FORO</h2>
            </div>
            <section class="foro-continer-question-buttons">
                <div class="foro-container-buttons">
                    <section class="foro-container-create-question">
                        <a href="#" class="foro-create-question-button">CREAR DEBATE</a>
                    </section>
                    <section class="foro-container-buttons-solutions"><a class="foro-buttons-solutions-all"
                            href="#">TODO</a><a class="foro-buttons-solutions-all foro-solutions-resolve"
                            href="#">SOLUCIONADO</a><a class="foro-buttons-solutions-all foro-solutions-resolve"
                            href="#">NO RESUELTO</a>
                    </section>
                    <section class="foro-container-buttons-find-filters">
                        <div class="foro-container-find"><input placeholder="BUSCAR" type="search"
                                class="foro-find"><svg class="foro-find-icon" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></div><a class="foro-buttons-solutions-all foro-buttons-filter" href="#">FILTROS</a>
                    </section>
                </div>
               <div class="foro-questions-container"></div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
        <script src="../js/foro.js"></script>
</body>

</html>