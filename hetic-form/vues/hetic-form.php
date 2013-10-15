<form action='<?php the_permalink(); ?>' method="POST" >
	<?php
	// On affiche les messages
	echo $hetic_form_messages;

	// On récupère la catégorie courante 
	$category = isset( $_POST['hetic_form_category'] ) ? absint( $_POST['hetic_form_category'] ) : 0 ;
	?>
	<fieldset>
		<legend>Les informations personelles</legend>
		<label>Nom *: </label>
		<input type="text" value="<?php echo ( isset( $_POST['hetic_form_name'] ) ) ? $_POST['hetic_form_name'] : '' ; ?>" name="hetic_form_name" >

		<label>Prénom *: </label>
		<input type="text" value="<?php echo ( isset( $_POST['hetic_form_firstname'] ) ) ? $_POST['hetic_form_firstname'] : '' ; ?>" name="hetic_form_firstname" >

		<label>Type </label>
		<select name="hetic_form_category">
			<?php foreach( get_terms( 'category', array( 'hide_empty' => false ) ) as $term ): ?>	
				<option value="<?php echo $term->term_id; ?>" <?php selected( $category, $term->term_id ) ?> > <?php echo $term->name; ?> </option>
			<?php endforeach; ?>
		</select>
	</fieldset>
	<input type="submit" value="Envoyer !" name="hetic_form_submit" />
</form>