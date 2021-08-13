<?php

require_once 'includes/app.php';

$section = $_GET[ 's' ] ?? 'home';

if (!isset($routes[ $section ])) $section = 404;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $routes[ $section ][ 'title' ]; ?></title>
		<link rel="stylesheet" href="build/css/app.css">
		<link rel="stylesheet" href="src/css/styles.css">
	</head>
	<body>
		<header class="header <?php echo $section === 'home' ? 'inicio' : ''; ?>">
			<div class="contenedor contenido-header">
				<div class="barra">
					<a href="index.php?s=home">
						<img src="build/img/logo.svg" alt="Logotipo de Bienes Raíces">
					</a>
					<div class="mobile-menu">
						<img src="build/img/barras.svg" alt="icono menu responsive">
					</div>
					<div class="derecha">
						<img class="dark-mode-boton" src="build/img/dark-mode.svg">
						<nav class="navegacion">
							<a href="index.php?s=nosotros">Nosotros</a>
							<a href="index.php?s=anuncios">Anuncios</a>
							<a href="index.php?s=blog">Blog</a>
							<a href="index.php?s=contacto">Contacto</a>
							<?php if ($_SESSION[ 'user' ][ 'email' ]): ?>
								<a href="">Cerrar sesión (<?php echo $_SESSION[ 'user' ][ 'email' ]; ?>)</a>
							<?php else: ?>
								<a href="index.php?s=login">Iniciar sesión</a>
								<a href="index.php?s=registro">Registrate</a>
							<?php endif; ?>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<?php
		require_once './sections/' . $section . '.php';
		?>
		<footer class="footer seccion">
			<div class="contenedor contenedor-footer">
				<nav class="navegacion">
					<a href="index.php?s=nosotros">Nosotros</a>
					<a href="index.php?s=anuncios">Anuncios</a>
					<a href="index.php?s=blog">Blog</a>
					<a href="index.php?s=contacto">Contacto</a>
				</nav>
			</div>
			<p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
		</footer>
		<script src="build/js/bundle.min.js"></script>
	</body>
</html>