<form action='<?php the_permalink(); ?>' method="POST" >
	<?php
	// On affiche les messages
	echo $hetic_form_messages; ?>
	<fieldset>
		<legend>Les informations personelles</legend>
		<label>Nom *: </label>
		<input type="text" value="" name="hetic_form_name" >

		<label>Prénom *: </label>
		<input type="text" value="" name="hetic_form_firstname" >
	</fieldset>
	<input type="submit" value="Envoyer !" name="hetic_form_submit" />
</form>