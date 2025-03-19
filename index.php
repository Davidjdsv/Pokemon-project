<?php

    include_once("controladores/enrutador.php");
    include_once("controladores/ctr_pokemon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>PokeCrud!</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="bg-danger text-white p-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php">PokeCrud</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="?cargar=crear">Crear</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="main__container container-fluid flex-fill">
            <?php
                // CARGAMOS LA VISTA SEGÚN EL ENRUTADOR
                $enrutador = new Enrutador();
                isset($_GET["cargar"]) ? $cargar = $_GET["cargar"] : $cargar = "";

                if($enrutador -> validar_vista($cargar)){
                    $enrutador -> cargar_vista($cargar);
                }
            
            ?>
    </main>

    <footer class="mt-auto bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2025 PokeCrud. All rights reserved.</p>
        </div>
    </footer>

    <!-- CDN BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>