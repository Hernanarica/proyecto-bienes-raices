<main class="contenedor seccion contenido-centrado">
	<h1>Completa los datos de registro</h1>
	<form action="actions/registrar.php" method="post" class="formulario">
		<fieldset>
			<legend>Registro</legend>
			<label for="name">Nombre</label>
			<input type="text" name="name" placeholder="Ingresa tu nombre" id="name" autocomplete="off">
			<label for="lastName">Apellido</label>
			<input type="text" name="lastName" placeholder="Ingresa tu apellido" id="lastName" autocomplete="off">
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Ingresa tu email" id="email" autocomplete="off">
			<!--				<div class="msj-error">-->
			<!--					&#215; -->
			<!--				</div>-->
			<label for="password">Contraseña</label>
			<input type="password" name="password" placeholder="Ingresa tu contraseña" id="password" autocomplete="off">
			<p>¿ya estas registrado?
				<a href="index.php?s=login">Inicia sesión</a>
			</p>
		</fieldset>
		<input type="submit" value="Registrar" class="boton boton-verde">
	</form>
</main>