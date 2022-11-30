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
                <section class="foro-container-question">
                    <article class="foro-question">
                        <section class="foro-question-user-resolve">
                            <div class="foro-question-check-icon-container"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-check-circle"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg></div>
                            <div class="foro-question-user"><img class="foro-question-user-image"
                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="">
                                <h3>Latuy89</h3>
                            </div>
                        </section>
                        <section class="foro-question-container">
                            <h5 class="foro-question-answer">¿Como chucha se hace para tener lvl astral en linkedin? no
                                entiendo alguien me explica.</h5>
                            <div class="foro-container-response-counter">
                                <p class="foro-response-counter">6 Respuestas</p>
                            </div>
                            <h6>Última actualización 15/06/2022 20:09hs</h6>
                        </section>
                        <section class="foro-question-container-category">
                            <h3 class="foro-question-container-category-text">CATEGORÍA</h3>
                            <div class="foro-question-container-category-text-result">
                                <h3 class="foro-question-category-text-result">ADULTOS</h3>
                            </div>
                        </section>
                    </article>
                </section>
                <section class="foro-container-question">
                    <article class="foro-question">
                        <section class="foro-question-user-resolve">
                            <div class="foro-question-check-icon-container"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-check-circle"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg></div>
                            <div class="foro-question-user"><img class="foro-question-user-image"
                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="">
                                <h3>Latuy89</h3>
                            </div>
                        </section>
                        <section class="foro-question-container">
                            <h5 class="foro-question-answer">¿Como chucha se hace para tener lvl astral en linkedin? no
                                entiendo alguien me explica.</h5>
                            <div class="foro-container-response-counter">
                                <p class="foro-response-counter">6 Respuestas</p>
                            </div>
                            <h6>Última actualización 15/06/2022 20:09hs</h6>
                        </section>
                        <section class="foro-question-container-category">
                            <h3 class="foro-question-container-category-text">CATEGORÍA</h3>
                            <div class="foro-question-container-category-text-result">
                                <h3 class="foro-question-category-text-result">ADULTOS</h3>
                            </div>
                        </section>
                    </article>
                </section>
                <section class="foro-container-question">
                    <article class="foro-question">
                        <section class="foro-question-user-resolve">
                            <div class="foro-question-check-icon-container"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-check-circle"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg></div>
                            <div class="foro-question-user"><img class="foro-question-user-image"
                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="">
                                <h3>Latuy89</h3>
                            </div>
                        </section>
                        <section class="foro-question-container">
                            <h5 class="foro-question-answer">¿Como chucha se hace para tener lvl astral en linkedin? no
                                entiendo alguien me explica.</h5>
                            <div class="foro-container-response-counter">
                                <p class="foro-response-counter">6 Respuestas</p>
                            </div>
                            <h6>Última actualización 15/06/2022 20:09hs</h6>
                        </section>
                        <section class="foro-question-container-category">
                            <h3 class="foro-question-container-category-text">CATEGORÍA</h3>
                            <div class="foro-question-container-category-text-result">
                                <h3 class="foro-question-category-text-result">ADULTOS</h3>
                            </div>
                        </section>
                    </article>
                </section>
                <section class="foro-container-question">
                    <article class="foro-question">
                        <section class="foro-question-user-resolve">
                            <div class="foro-question-check-icon-container"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-check-circle"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg></div>
                            <div class="foro-question-user"><img class="foro-question-user-image"
                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="">
                                <h3>Latuy89</h3>
                            </div>
                        </section>
                        <section class="foro-question-container">
                            <h5 class="foro-question-answer">¿Como chucha se hace para tener lvl astral en linkedin? no
                                entiendo alguien me explica.</h5>
                            <div class="foro-container-response-counter">
                                <p class="foro-response-counter">6 Respuestas</p>
                            </div>
                            <h6>Última actualización 15/06/2022 20:09hs</h6>
                        </section>
                        <section class="foro-question-container-category">
                            <h3 class="foro-question-container-category-text">CATEGORÍA</h3>
                            <div class="foro-question-container-category-text-result">
                                <h3 class="foro-question-category-text-result">ADULTOS</h3>
                            </div>
                        </section>
                    </article>
                </section>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>