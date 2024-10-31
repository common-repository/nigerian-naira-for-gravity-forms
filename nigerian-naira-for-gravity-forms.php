<?php
/*
Plugin Name: Nigerian Naira for Gravity Forms
Plugin URI: https://jeffmatson.net
Description: Adds support for Nigerian Naira (NGN) to Gravity Forms.
Version: 1.0
Author: Jeff Matson
Author URI: https://jeffmatson.net
Text Domain: ngn-for-gf
*/

// Run the filter to add the currency.
add_filter( 'gform_currencies', 'gf_add_ngn_support' );

/**
 * Adds the currency if it isn't already registered.
 *
 * @since   1.0
 * @access  public
 * @used-by gform_currencies
 * 
 * @param array $currencies The current currencies registered in Gravity Forms.
 *
 * @return array List of supported currencies.
 */
function gf_add_ngn_support( $currencies ) {
	
	// Check if the currency is already registered.
	if ( ! array_key_exists( 'NGN', $currencies ) ) {
		// Add NGN to the list of supported currencies.
		$currencies['NGN'] = array(
			'name'               => 'Nigerian Naira',
			'symbol_left'        => '&#8358;',
			'symbol_right'       => '',
			'symbol_padding'     => ' ',
			'thousand_separator' => ',',
			'decimal_separator'  => '.',
			'decimals'           => 2
		);
	}

	return $currencies;

}
