<?php

/**
 * Plugin Name: Awesome Plugin
 * Version: 1.0
 * Description: This is the best plugin!
 * Author: Andrea Fuggetta <contact@ndevr.io>
 * Author URI: https://www.ndevr.io
 * Plugin URI:  https://www.ndevr.io
 */

if ( ! class_exists( 'AwesomePlugin' ) ) {
    class AwesomePlugin {
        
        /**
         * Constructor
         */
        public function __construct() {
            $this->setup_actions();
        }
        
        /**
         * Setting up Hooks
         */
        public function setup_actions() {
            //Main plugin hooks
            register_activation_hook( DIR_PATH, array( 'AwesomePlugin', 'activate' ) );
            register_deactivation_hook( DIR_PATH, array( 'AwesomePlugin', 'deactivate' ) );
        }
        
        /**
         * Activate callback
         */
        public static function activate() {
            //Activation code in here
        }
        
        /**
         * Deactivate callback
         */
        public static function deactivate() {
            //Deactivation code in here
        }
        
    }
    
    
    // instantiate the plugin class
    $wp_plugin_template = new AwesomePlugin();
}
