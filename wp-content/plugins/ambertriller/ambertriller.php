<?php
/**
 * Plugin Name:       amber triller
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Author:            shelton
 * Author URI:        https://author.example.com/
 */
 
 //Exit if accessed directly
 if(!defined('ABSPATH')){
    exit;
 }

 //Load scripts
 require_once(plugin_dir_path(__FILE__).'/includes/ambertriller-scripts.php');
 
 //Load class
 require_once(plugin_dir_path(__FILE__).'/includes/ambertriller-class.php');
 
 //Register widget
 function register_ambertriller(){
     register_widget('amber_triller_Widget');
 }
 
 // Hook in function
 add_action('widgets_init', 'register_ambertriller');
 ?>