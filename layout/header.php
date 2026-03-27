<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg tl-navbar"> <!-- navbar-expand-lg se expande en panatallas grandes y se vuelve hamburguesa en pantallas pequeñas -->
            <div class="container d-flex"> <!--- container para centrar el contenido y d-flex para usar flexbox --->         
                <a class="navbar-link <?= ($pagina == 'index.php') ? 'active' : '' ?>" href="index.php">
                    <img class="image-nav" src="../img/logo_tl.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav nav-underline text-align-center ms-auto"> <!-- ms-auto para alinear a la derecha -->
                        <?php $pagina = basename($_SERVER['PHP_SELF']); ?>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'index.php') ? 'active' : '' ?>" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'flexo.php') ? 'active' : '' ?>" href="flexo.php">FLEXOGRAFÍA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'empaque.php') ? 'active' : '' ?>" href="empaque.php">EMPAQUE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'textil.php') ? 'active' : '' ?>" href="textil.php">TEXTIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'nosotros.php') ? 'active' : '' ?>" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina == 'contacto.php') ? 'active' : '' ?>" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    