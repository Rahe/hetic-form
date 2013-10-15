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

// URL vers l'url du plugin et son chemin absolu
define('HETIC_FORM_URL', plugin_dir_url ( __FILE__ ));
define('HETIC_FORM_DIR', plugin_dir_path( __FILE__ ));

add_action( 'plugins_loaded', 'hetic_form_init' );

function hetif_form_init() {
	// On ajoute le shortcode
	add_shortcode( 'hetic-form', 'hetic_form_shortcode' );
}

function hetic_form_shortcode() {
	// on commence un buffer
	ob_start();
	// on affiche le fichier hetic-form.php
	include_once( HETIC_FORM_DIR.'/vues/hetic-form.php' );

	// On récupère le texte et on le retourne !
	return ob_get_flush();
}