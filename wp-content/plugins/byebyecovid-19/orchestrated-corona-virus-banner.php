<?php
/**
 * Plugin Name:       byebye covid-19
 * Plugin URI:        https://byebye.com
 * Description:       To enable option to show the realtime data upon covid-19 population
 * Version:           1.10.3
 * Author:            shelton
 * Author URI:        https://author.example.com/
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/orchestrated-corona-virus-banner.php' );
require_once( 'includes/orchestrated-corona-virus-banner-settings.php' );

/**
 * Returns the main instance of Orchestrated_Corona_Virus_Banner to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Orchestrated_Corona_Virus_Banner
 */
function Orchestrated_Corona_Virus_Banner () {
	$instance = Orchestrated_Corona_Virus_Banner::instance( __FILE__, '1.7.0.3' );
	if ( is_null( $instance->settings ) ) {
		$instance->settings = Orchestrated_Corona_Virus_Banner_Settings::instance( $instance );
	}

	return $instance;
}

Orchestrated_Corona_Virus_Banner();
