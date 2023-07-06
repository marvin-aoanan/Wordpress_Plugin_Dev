<?php

/**
 * 
 * Plugin Name: Contact Plugin
 * Description: This is my first plugin for development.
 * Version: 1.0.0
 * Text Domain: options-plugin
 * Author: Marvin Aoanan
 * 
 */

 // Not allowing direct accessing the file
 if (!defined('ABSPATH')) {
    die('You can not be here!');
 }

 // Checking if the plugin is already exist to avoid duplicates or conflicts
 if(!class_exists('ContactPlugin')) {
    class ContactPlugin {

        public function __construct() {
            // Defining path as constant so it can be reusable
            define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));

            require_once(MY_PLUGIN_PATH . '/vendor/autoload.php');
        }

        public function initialized() {
            include_once(MY_PLUGIN_PATH . 'includes/utilities.php');
            include_once(MY_PLUGIN_PATH . 'includes/options-page.php');
            include_once(MY_PLUGIN_PATH . 'includes/contact-form.php');
        }

    }

    $contactPlugin = new ContactPlugin;
    $contactPlugin->initialized();
 }
 

