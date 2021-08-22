<?php

use App\Session\Session;

echo "<pre>";
print_r(Session::get('errors'));
echo "</pre>";
echo "<pre>";
print_r(Session::get('oldData'));
echo "</pre>";
?>
<main class="contenedor seccion contenido-centrado">
	<h1>Completa los datos para iniciar sesión</h1>
	<form action="actions/login.php" method="post" class="formulario">
		<fieldset>
			<legend>Inicia sesión</legend>
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Ingresa tu email" id="email" autocomplete="off">
			<!--				<div class="msj-error">-->
			<!--					&#215; -->
			<!--				</div>-->
			<label for="password">Contraseña</label>
			<input type="password" name="password" placeholder="Ingresa tu contraseña" id="password" autocomplete="off">
			<p>¿Aún no estas registrado?
				<a href="index.php?s=registro">Registrate</a>
			</p>
		</fieldset>
		<input type="submit" value="Iniciar sesión" class="boton boton-verde">
	</form>
</main>
