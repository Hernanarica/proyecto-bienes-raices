<main class="contenedor sección">
	<h1>Actualizar</h1>
	<a href="index.php?s=panel" class="boton boton-verde">Volver</a>
	<form method="post" class="formulario" enctype="multipart/form-data">
		<fieldset>
			<legend>Información general</legend>
			<label for="titulo">Titulo</label>
			<input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="">
			<label for="precio">Precio</label>
			<input type="number" id="precio" name="precio" placeholder="Precio propiedad" value="">
			<label for="imagen">Imagen</label>
			<input type="file" id="imagen" name="imagen" accept="image/jpeg, imager/png">
			<img src="" alt="imagen de una casa">
			<label for="descripcion">Descripción</label>
			<textarea name="descripcion" id="descripcion"></textarea>
		</fieldset>
		<fieldset>
			<legend>Información propiedad</legend>
			<label for="habitaciones">Habitaciones</label>
			<input type="number" id="habitaciones" name="habitaciones" placeholder="habitaciones propiedad" min="1" max="9" step="1" value="">
			<label for="wc">Baños</label>
			<input type="number" id="wc" name="wc" placeholder="baños propiedad" value="">
			<label for="estacionamiento">Estacionamiento</label>
			<input type="number" id="estacionamiento" name="estacionamiento" placeholder="estacionamiento propiedad" value="">
		</fieldset>
		<fieldset>
			<legend>Vendedor</legend>
			<select name="vendedor">
				<option value="">--Seleccione--</option>
			</select>
		</fieldset>
		<input type="submit" value="Actualizar propiedad" class="boton boton-verde">
	</form>
</main>