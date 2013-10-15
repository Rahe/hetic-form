<?php
/*
 Plugin Name: HETIC FORM
 Version: 0.1
 Plugin URI: hetic.net
 Description: Display a form
 Author: It's me! Mario !
 Author URI: http://www.hetic.fr

 TODO:
	* Etape 1 : Création du plugin
	* Etape 2 : Init du shortcode
	* Etape 3 : Affichage du formulaire
	* Etape 4 : Traitement PHP du formulaire ( champs requis etc. )
	* Etape 5 : Insertion du contenu
	* Etape 6 : Sécurité
	* Etape 7 : Images
 */

add_action( 'plugins_loaded', 'hetic_form_init' );

function hetif_form_init() {
	// On ajoute le shortcode
	add_shortcode( 'hetic-form', 'hetic_form_shortcode' );
}

function hetic_form_shortcode() {
	return 'Ceci est mon shortcode';
}