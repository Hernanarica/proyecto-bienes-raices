<?php

//use App\DB\DBConnection;
//
//$db    = DBConnection::getConnection();
//$query = "SELECT * FROM propiedades";
//$stmt  = $db->prepare($query);
//$stmt->execute();
//$salida = [];
//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//	$salida[] = $row;
//}
//
//echo "<pre>";
//print_r($salida);
//echo "</pre>";

?>
<main class="contenedor sección">
	<h1>Administrador de vienes raíces</h1>
	<a href="index.php?s=crear-propiedad" class="boton boton-verde">Crear propiedad</a>
	<table class="propiedades">
		<thead>
			<tr>
				<th>ID</th>
				<th>Titulo</th>
				<th>Imagen</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td>
					<img src="" alt="imagen de casa" class="imagen-tabla">
				</td>
				<td>$</td>
				<td>
					<a href="" class="boton-rojito-block">Eliminar</a>
					<a href="" class="boton-amarillo-block">Actualizar</a>
				</td>
			</tr>
		</tbody>
	</table>
</main>