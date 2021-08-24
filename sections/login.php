<?php

use App\Session\Session;

$oldData = Session::flash('oldData');
$errors  = Session::flash('errors');
?>
<main class="contenedor seccion contenido-centrado">
	<h1>Completa los datos para iniciar sesión</h1>
	<form action="actions/login.php" method="post" class="formulario">
		<fieldset>
			<legend>Inicia sesión</legend>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo $oldData[ 'email' ] ?? '';?>" placeholder="Ingresa tu email" id="email"
			       autocomplete="off">
			<?php if (isset($errors[ 'email' ])): ?>
				<?php foreach ($errors[ 'email' ] as $error): ?>
					<div class="msj-error">
						<?php echo $error; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<label for="password">Contraseña</label>
			<input type="password" name="password" placeholder="Ingresa tu contraseña" id="password" autocomplete="off">
			<?php if (isset($errors[ 'password' ])): ?>
				<?php foreach ($errors[ 'password' ] as $error): ?>
					<div class="msj-error">
						<?php echo $error; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<p>¿Aún no estas registrado?
				<a href="index.php?s=registro">Registrate</a>
			</p>
		</fieldset>
		<input type="submit" value="Iniciar sesión" class="boton boton-verde">
	</form>
</main>
