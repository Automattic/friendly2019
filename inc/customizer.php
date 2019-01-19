<?php
/**
 * Friendly 2019: Customizer
 *
 * @package WordPress
 * @subpackage Friendly 2019
 * @since 1.0.0
 */

/**
 * Change the label of the Site Title option.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function friendly2019_customize_register( $wp_customize ) {
    $wp_customize->get_control( 'header_text' )->label = __( 'Display Site Title', 'friendly2019' );
}
add_action( 'customize_register', 'friendly2019_customize_register' );