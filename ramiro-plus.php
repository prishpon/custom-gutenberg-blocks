<?php
/*
 * Plugin Name: Ramiro plus
 * Description: gutenberg block 
 * Version:1/0
 * Author:Olga
 */

 if(!function_exists('add_action')) {
        echo "No acces";
        exit;
 }

 //Setup
define( 'RP_PLUGIN_DIR' , plugin_dir_path(__FILE__) );

 //Includes
include( RP_PLUGIN_DIR . 'includes/register-blocks.php');

 //Hooks
 add_action( 'init', 'rp_register_blocks' );