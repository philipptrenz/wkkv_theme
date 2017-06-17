<?php
/**
 * @package FoundationPress
 * @author Philipp Trenz
 */

add_theme_support( 'custom-logo' );

add_theme_support( 'custom-logo', array(
	'height'      => 286,
	'width'       => 417,
	'flex-height' => false,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

?>