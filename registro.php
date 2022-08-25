<?php 
	require_once "./headerExterno.php";
?>
<main>
		<div class="boxCentrado">
		<h2 class="h2Home">Contactos</h2>
		<form method="post" action="internas/procesar.php">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="clave">Clave</label>
				<input type="password" name="clave" id="clave" placeholder="Ingrese su clave">
			</div>
			<div class="grupoInput">
			 <button type="submit" value="Procesar" class="btn-submit">Registrarse</button>
			</div>
		</form>
		</div>
	</main>
</body>
</html>