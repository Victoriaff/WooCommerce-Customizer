<?php
/*
Plugin Name: AVA WooCommerce Customizer
Plugin URI: http://ava-fields.ava-team.com
Description: WooCommerce Customizer
Version: 1.0.0
Author: AVA-Team.com
Author URI: http://ava-team.com
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

define( 'AVA_WC_DIR', __DIR__ );
define( 'AVA_WC_ASSETS_DIR', __DIR__ . '/assets/' );
define( 'AVA_WC_ASSETS_URI', plugin_dir_url( __FILE__ ) . 'assets/' );

if ( ! class_exists( 'AVA_WC' ) ) {
	class AVA_WC {
		
		
		/**
		 * Core singleton class
		 * @var self - pattern realization
		 */
		private static $instance;
		
		/**
		 * Modules and objects instances list
		 * @since 4.2
		 * @var array
		 */
		private $factory = array();
		
		private $modules = array();
		
		private $filesystem;
		
		
		/**
		 * Class constructor
		 *
		 * @since  1.0
		 */
		private function __construct() {
			
			//global $wp_filesystem;
			//dd($wp_filesystem);
			
			//WP_Filesystem()
			//$this->filesystem =
			/** Load core files */
			//$this->load();
			
			
		}
		
		public function init() {
			
			// Enqueue scripts
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ), 5 );
			
			//add_action( 'wp_register_scripts', array($this, 'enqueue_scripts'), 5 );
			
			
			add_action( 'admin_menu', array( $this, 'admin_menu' ) );
			
			/** Ajax hooks */
			//add_action( 'wp_ajax_avaf-save', array( 'AVA_Fields_Options', 'save' ) );
			//add_action( 'wp_ajax_nopriv_avaf-save', array( 'AVA_Fields_Options', 'save' ) );
			
			//dump('init');
			
			// init hook
			///do_action( 'ava_fields/init' );
			
			// Load core functionality
			$this->load();
			
			//dump($this->modules);
		}
		
		
		public function admin_menu() {
			add_menu_page( 'AVA WooCommerce Page', 'AVA WooCommerce', 'manage_options', 'ava-woocommerce' );
		}
		
		
		public function load() {
			
			include_once AVA_WC_DIR . '/modules/module.php';
			
			// Load helpers
			//foreach (glob( plugin_dir_path( __FILE__ ) . 'helpers/*.php' ) as $file) {
			//	include_once $file;
			//}
			
			// Load modules
			foreach (glob( AVA_WC_DIR . '/modules/*', GLOB_ONLYDIR  ) as $dir) {
				$module = basename($dir);;
				
				include_once $dir . '/' . $module . '.php';
				
				$className = 'AVA_WC_' . $module . '_Module';
				if (class_exists($className)) {
					$this->modules[ $module ] = new $className();
				}
			}
		}

		
		
		public function enqueue_scripts() {
			/*
			wp_register_style( 'avaf-styles', AVA_FIELDS_ASSETS_URI . 'css/styles.css', array(), AVA_FIELDS_VERSION );
			wp_enqueue_style( 'avaf-styles' );
			
			wp_register_style( 'avaf-bootstrap-grid', AVA_FIELDS_ASSETS_URI . 'css/bootstrap-grid.css', array(), AVA_FIELDS_VERSION );
			wp_enqueue_style( 'avaf-bootstrap-grid' );
			
			wp_register_script( 'avaf-script', AVA_FIELDS_ASSETS_URI . 'js/script.js', array( 'jquery' ), time(), true );
			wp_enqueue_script( 'avaf-script' );
			*/
			
		}
		
		/**
		 * Get the instane of WMP_EW
		 *
		 * @return self
		 */
		public static function instance() {
			if ( ! ( self::$instance instanceof self ) ) {
				self::$instance = new self();
			}
			
			return self::$instance;
		}
		
		/**
		 * Cloning disabled
		 */
		private function __clone() {
		}
		
		/**
		 * Serialization disabled
		 */
		private function __sleep() {
		}
		
		/**
		 * De-serialization disabled
		 */
		private function __wakeup() {
		}
		
		
	}
}


if ( ! function_exists( 'ava_wc' ) ) {
	function ava_wc() {
		return AVA_WC::instance();
	}
	ava_wc()->init();
}







