<form action='<?php the_permalink(); ?>' method="POST" enctype='multipart/form-data' >
	<?php
	// On affiche les messages
	echo $hetic_form_messages;

	// On récupère la catégorie courante 
	$category = isset( $_POST['hetic_form_category'] ) ? absint( $_POST['hetic_form_category'] ) : 0 ;
	?>
	<fieldset>
		<legend>Les informations personelles</legend>
		<p>
			<label for="hetic_form_name">Nom *: </label>
			<input type="text" id="hetic_form_name" value="<?php echo ( isset( $_POST['hetic_form_name'] ) ) ? $_POST['hetic_form_name'] : '' ; ?>" name="hetic_form_name" >
		</p>
		<p>
			<label for="hetic_form_firstname">Prénom *: </label>
			<input type="text" id="hetic_form_firstname" value="<?php echo ( isset( $_POST['hetic_form_firstname'] ) ) ? $_POST['hetic_form_firstname'] : '' ; ?>" name="hetic_form_firstname" >
		</p>
		<p>
			<label for="hetic_form_category" >Type </label>
			<select id="hetic_form_category" name="hetic_form_category">
				<?php foreach( get_terms( 'category', array( 'hide_empty' => false ) ) as $term ): ?>	
					<option value="<?php echo $term->term_id; ?>" <?php selected( $category, $term->term_id ) ?> > <?php echo $term->name; ?> </option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<label for="hetic_form_image">Une image</label>
			<input type="file" name="image" id="hetic_form_image" />
		</p>
		<p>
			<input type="submit" value="Envoyer !" name="hetic_form_submit" />
		</p>
	</fieldset>
</form>