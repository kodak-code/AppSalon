<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuacion</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu email">
    </div>

    <input type="submit" value="Recuperar Password" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tenes una cuenta? ¡Inicia Sesion!</a>
    <a href="/crear-cuenta">¿Aun no tenes una Cuenta?</a>
</div>