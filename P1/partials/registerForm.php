<main>
	<h1>Gestión de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Id_cliente</label>
		<br/>
		<input type="text" name="client_id" class="item_requerid" size="20" maxlength="50" value="<?php print $client_id ?>"
		 placeholder="XXXXXXX" />
		<br/>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="50" value="<?php print $name ?>"
		 placeholder="Miguel" />
		<br/>
		<label for="surname">Apellidos</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="50" value="<?php print $surname ?>"
		 placeholder="Cervantes" />
		<br/>
		<label for="address">Direccion</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="20" maxlength="50" value="<?php print $address ?>"
		placeholder="Avenida del mar"/>
		<br/>
		<label for="city">Ciudad</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="20" maxlength="50" value="<?php print $city ?>"
		 placeholder="Barcelona" />
		<br/>
		<label for="zip_code">Codigo Zip</label>
		<br/>
		<input type="text" name="zip_code" class="item_requerid" size="20" maxlength="50" value="<?php print $zip_code ?>"
		 placeholder="XXXXXXXXX" />
		<br/>
		<label for="foto_file">Foto</label>
		<br/>
		<input type="text" name="foto_file" class="item_requerid" size="20" maxlength="50" value="<?php print $foto_file ?>"
		 placeholder="XXXXXXXX" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>