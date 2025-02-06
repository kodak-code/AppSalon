<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuacion</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<?php if ($error) return; // si el token no es valido no dejara guardar ningun password
?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Nuevo Password" name="password">
    </div>

    <input type="submit" value="Guardar Nuevo Password" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tenes una cuenta? ¡Inicia Sesion!</a>
    <a href="/crear-cuenta">¿Aun no tenes una cuenta? ¡Crea una!</a>
</div>