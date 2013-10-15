<form action='<?php the_permalink(); ?>' method="POST" >
	<fieldset>
		<legend>LEs informations personelles</legend>
		<label>Nom : </label>
		<input type="text" value="" name="hetic_form_name" >

		<label>Prénom : </label>
		<input type="text" value="" name="hetic_form_firstname" >
	</fieldset>
	<input type="submit" value="Envoyer !" />
</form>