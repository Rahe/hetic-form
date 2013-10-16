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
			<label for="hetic_form_title">Titre *: </label>
			<input style="width: 100%" type="text" id="hetic_form_title" value="<?php echo ( isset( $_POST['hetic_form_title'] ) ) ? esc_attr( $_POST['hetic_form_title'] ) : '' ; ?>" name="hetic_form_title" >
		</p>
		<p>
			<label for="hetic_form_content">Contenu *: </label><br/>
			<textarea style="width: 100%" name="hetic_form_content" id="hetic_form_content"><?php echo ( isset( $_POST['hetic_form_content'] ) ) ? esc_textarea(  $_POST['hetic_form_content'] ) : '' ; ?></textarea>
		</p>
		<p>
			<label for="hetic_form_name">Nom *: </label>
			<input style="width: 100%" type="text" id="hetic_form_name" value="<?php echo ( isset( $_POST['hetic_form_name'] ) ) ? esc_attr( $_POST['hetic_form_name'] ) : '' ; ?>" name="hetic_form_name" >
		</p>
		<p>
			<label for="hetic_form_firstname">Prénom *: </label>
			<input style="width: 100%" type="text" id="hetic_form_firstname" value="<?php echo ( isset( $_POST['hetic_form_firstname'] ) ) ? esc_attr( $_POST['hetic_form_firstname'] ) : '' ; ?>" name="hetic_form_firstname" >
		</p>
		<p>
			<label for="hetic_form_category" >Type </label>
			<select style="width: 100%" id="hetic_form_category" name="hetic_form_category">
				<?php foreach( get_terms( 'category', array( 'hide_empty' => false ) ) as $term ): ?>	
					<option value="<?php echo $term->term_id; ?>" <?php selected( $category, $term->term_id ) ?> > <?php echo $term->name; ?> </option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<label for="hetic_form_image">Une image</label>
			<input style="width: 100%" type="file" name="image" id="hetic_form_image" />
		</p>
		<p>
			<input style="width: 100%" type="submit" value="Envoyer !" name="hetic_form_submit" />
		</p>
		<?php wp_nonce_field( 'hetic_form_submit' ); ?>
	</fieldset>
</form>