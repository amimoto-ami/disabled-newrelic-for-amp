<?php
/**
 * @package Disabled_NewRelic_For_AMP
 * @version 3.0.0
 */
/*
Plugin Name: Disabled NewRelic For AMP
Plugin URI: http://wordpress.org/plugins/disabled-newrelic-for-amp/
Description: This is simple plugin disable NewRelic for AMP endpoint.
Author: megumithemes
Version: 3.0.0
Author URI: https://amimoto-ami.com
*/

add_action( 'amp_post_template_data', function( $data ) {
	if ( ! function_exists( 'newrelic_disable_autorum' ) ) {
		return $data;
	}
	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
		newrelic_disable_autorum();
	}

	//@TODO:Add check funct for WP REST API endpoint
	return $data;
} );
