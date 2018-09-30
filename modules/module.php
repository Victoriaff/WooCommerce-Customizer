<?php

/**
 * Module class
 **/
class AVA_WC_Module {
	
	public $settings;
	
	/**
	 * Constructor
	 **/
	function __construct() {
		
		// Add admin menu
		add_action('admin_menu', array( $this , 'admin_menu' ));
		
		// Plugins loaded
		add_action( 'plugins_loaded', array( $this, 'features' ) );
	}
	
	// Add admin menu
	public function admin_menu() {
		
		add_submenu_page(
			$this->settings['admin_menu']['parent_slug'],
			$this->settings['admin_menu']['menu_title'],
			$this->settings['admin_menu']['page_title'],
			'manage_options',
			$this->settings['admin_menu']['slug'],
			array( $this, 'page_options')
		);
		
		/*
		add_action( 'toplevel_page_ava-woocommerce', function () {
			
			//dd(self::$containers);
			
			$html = '';
			
			foreach ( self::$containers as $container_id => $container ) {
				//dump($obj_container);
				
				$html .= $container->render();
				
				//dump($html);
			}
			
			echo $html;
			
		} );
		*/
	}
	
	
}
