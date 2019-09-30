<?php

class EA_Integra{

	protected $api;

	public function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'register_scripts_and_styles' ), 0 );
		add_shortcode( 'ea-integra-form', array($this, 'load_form' ));
	}

	public function register_scripts_and_styles(){

		wp_register_script( 'ea-integra-inputmask', plugin_dir_url( __FILE__ ) . 'js/inputmask.js', null, null, true );
		wp_register_script( 'ea-integra-listeners', plugin_dir_url( __FILE__ ) . 'js/listeners.js', null, null, true );
		wp_register_script( 'ea-integra-core', plugin_dir_url( __FILE__ ) . 'js/core.js', null, null, true );

		wp_register_style( "ea-integra-styles", plugin_dir_url(__FILE__ ) . 'css/styles.css', null, null, false );
		wp_register_style( "ea-integra-default-css", plugin_dir_url(__FILE__ ) . 'css/mini-default.min.css', null, null, false );
	}

    public function load_scripts_and_styles(){
	    wp_enqueue_style('ea-integra-styles');
	    wp_enqueue_style('ea-integra-default-css');

	    wp_enqueue_script('ea-integra-inputmask');
	    wp_enqueue_script('ea-integra-listeners');
	    wp_enqueue_script('ea-integra-core');
    }

	function load_form($atts = []){
	    $this->load_scripts_and_styles();
		$value = shortcode_atts( ['header' => 'false'], $atts );
		ob_start();
		include(plugin_dir_path( __FILE__ ) . 'static-form.php');
		return ob_get_clean();
	}
}