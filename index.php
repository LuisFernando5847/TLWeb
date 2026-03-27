
<?php include 'layout/header.php'; ?>

<!-- crea un contenido de index completo -->
<main class="container-index py-1">

    <!-- Agregar un carrousel automatico -->
    <div id="carouselExampleIndicators" class="carousel-slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="img/TL_BL_21.mp4" type="video/mp4">
                </video>
            </div>
            <div class="carousel-item">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="img/empaque-03.mp4" type="video/mp4">
                </video>
            </div>
            <div class="carousel-item">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="img/banner-flexo_converted.mp4" type="video/mp4">
                </video>
            </div>
            <div class="carousel-item">
                <video class="d-block w-100" autoplay muted loop>
                    <source src="img/HOME-textil.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div> 

    <!-- Agregar dos card una con informacion de la empresa  y la otra con una imagen relacionada a la descripcion-->
    <div class="container my-3">
        <h2 class="info-contact">Información de contacto</h2>
        <!-- Card con informacion de la empresa -->
        <div class="card cad-qsomos">
            <div class="card-body">
                <div class="card-q-somos">
                    <h5 class="card-title">¿QUIÉNES SOMOS?</h5>
                    <p class="card-text">
                        En TopLabel, nos dedicamos a ofrecer soluciones de impresión de alta calidad para una amplia gama de industrias.
                        Con años de experiencia en el sector, nos enorgullece ser un socio confiable para nuestros clientes, brindando servicios 
                        de impresión flexográfica y textil que cumplen con los más altos estándares de calidad. Nuestro compromiso con la innovación 
                        y la satisfacción del cliente nos impulsa a seguir creciendo y mejorando continuamente.
                    </p>
                </div>                
            </div>
        </div>
        <div class="card card-mvv">
            <div class="card-body">
                <div class="card-mis">
                    <h5 class="card-title">MISIÓN</h5>
                    <p class="card-text">
                        Ser la empresa líder de etiquetado industrial a nivel nacional, ofreciendo productos y servicios de alta calidad para garantizar 
                        precios competitivos y mantener un perfil adecuado a nuestros clientes manteniendo la innovación y mejora continua.
                    </p>
                </div>
                <div class="card-vis">
                    <h5 class="card-title">VISIÓN</h5>
                    <p class="card-text">
                        Ser una empresa altamente competitiva, confiable, con el mejor crecimiento ofreciendo servicios con los mayores estándares de calidad a nivel mundial.
                    </p>
                </div>
                <div class="card-val">
                    <h5 class="card-title">VALORES</h5>
                    <p class="card-text">
                        Responsabilidad, Compromiso, Trabajo en equipo.
                    </p>
                </div>                 
            </div>
        </div>
        
        <!-- Card con imagen relacionada a la descripcion -->
        <div class="card mt-3">
            <img src="img/imgindex.jpg" class="card-img-top" alt="Imagen relacionada a la empresa" style="width: auto; height: auto;">
        </div>
    </div>

</main>


<?php include 'layout/footer.php'; ?>