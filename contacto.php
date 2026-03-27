<?php include 'layout/header.php'; ?>

    <main class="container-contacto">
        <div class="titulo-contacto">
            <h1>CONTACTO</h1>
        </div>
        
        <div class="mapa-tl">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14934.40853502216!2d-100.442806!3d20.645068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3508319cf5765%3A0x3075e85351cbc68!2sTOP%20LABEL%2C%20S.%20A.%20DE%20C.%20V.!5e0!3m2!1ses-419!2smx!4v1771864290982!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <form class="form-contact" action="controllerMail.php" method="POST">
            <div class="form-floating mb-3">
                <h1>Formulario de Contacto</h1>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingNombre" placeholder="Nombre completo" name="nombre">
                <label for="floatingNombre">Nombre completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingTelefono" placeholder="Numero de telefono" name="telefono">
                <label for="floatingTelefono">Número de teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">
                <label for="floatingEmail"><i class="bi bi-envelope-at"></i>Correo Electrónico</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="floatingMensaje" placeholder="Mensaje" name="mensaje" style="height: 100px;"></textarea>
                <label for="floatingMensaje">Mensaje</label>
            </div>
            <button type="submit" class="btn-enviar" onclick="mostraralerta()">Enviar</button>
        </form>
    </main>   

<?php include 'layout/footer.php'; ?>