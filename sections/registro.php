<?php

use App\Session\Session;

$errors  = Session::flash('errors');
$oldData = Session::flash('oldData');
?>
<main class="contenedor seccion contenido-centrado">
	<h1>Completa los datos de registro</h1>
	<form action="actions/registrar.php" method="post" class="formulario">
		<fieldset>
			<legend>Registro</legend>
			<label for="name">Nombre</label>
			<input type="text" name="name" value="<?php echo $oldData[ 'name' ] ?? ''; ?>" placeholder="Ingresa tu nombre" id="name" autocomplete="off">
			<?php if (isset($errors[ 'name' ])): ?>
				<?php foreach ($errors[ 'name' ] as $error): ?>
					<div class="msj-error">
						<?php echo $error;?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<label for="lastName">Apellido</label>
			<input type="text" name="lastName" value="<?php echo $oldData[ 'lastName' ] ?? ''; ?>" placeholder="Ingresa tu apellido" id="lastName" autocomplete="off">
			<?php if (isset($errors[ 'lastName' ])): ?>
				<?php foreach ($errors[ 'lastName' ] as $error): ?>
					<div class="msj-error">
						<?php echo $error;?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo $oldData[ 'email' ] ?? ''; ?>" placeholder="Ingresa tu email" id="email" autocomplete="off">
			<?php if (isset($errors[ 'email' ])): ?>
				<?php foreach ($errors[ 'email' ] as $error): ?>
					<div class="msj-error">
						<?php echo $error;?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<label for="password">Contraseña</label>
			<input type="password" name="password" value="<?php echo $oldData[ 'password' ] ?? ''; ?>" placeholder="Ingresa tu contraseña" id="password" autocomplete="off">
			<?php if (isset($errors[ 'password' ])): ?>
				<?php foreach ($errors[ 'password' ] as $error): ?>
					<div class="msj-error">
						<?php echo $error;?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
			<p>¿ya estas registrado?
				<a href="index.php?s=login">Inicia sesión</a>
			</p>
		</fieldset>
		<input type="submit" value="Registrar" class="boton boton-verde">
	</form>
</main>