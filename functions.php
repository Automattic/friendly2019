<?php

/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
function friendly_override_custom_logo() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 90,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'friendly_override_custom_logo', 11 );