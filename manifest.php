<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']          = __( 'Admin icons diversity', 'fw' );
$manifest['description']   = __(
	'Permet d\'utiliser Font Awesome dans l\'administration Wordpress',
	'fw'
);
$manifest['version']       = '4.7.0';
$manifest['display']       = true;
$manifest['standalone']    = true;
$manifest['requirements']  = array(
	'framework' => array(
		/**
		 * In that version was solved the bug with children extension requirements when activate an extension
		 */
		'min_version' => '2.1.18',
	),
	'extensions' => array(
	),
);
