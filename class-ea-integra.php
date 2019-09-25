<?php

class EA_Integra{

	protected $api;

	public function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'eablender_budget_scripts') );
		add_shortcode( 'ea-integra-form', [$this, 'ea_integra_form']);
	}

	private function eablender_budget_api_error(){
		?>
		<div class="notice notice-warning">
			<p><?php _e( 'EABlender Pages: EABlender API parece não estar presente' ); ?></p>
		</div>
		<?php
	}

	public function eablender_budget_scripts(){

		wp_enqueue_style( "ea-integra-styles", plugin_dir_url(__FILE__ ) . 'css/styles.css', null, null, false );
		wp_enqueue_style( "ea-integra-default-css", plugin_dir_url(__FILE__ ) . 'css/mini-default.min.css', null, null, false );

		wp_enqueue_script( 'ea-integra-core', plugin_dir_url( __FILE__ ) . 'js/core.js', null, null, true );
		wp_enqueue_script( 'ea-integra-inputmask', plugin_dir_url( __FILE__ ) . 'js/inputmask.js', null, null, true );
		wp_enqueue_script( 'ea-integra-listeners', plugin_dir_url( __FILE__ ) . 'js/listeners.js', null, null, true );
	}

	function ea_integra_form($atts = []){
		$value = shortcode_atts( ['header' => 'false'], $atts );
		$show = $value['header'];
		ob_start();
		include(plugin_dir_path( __FILE__ ) . 'ea-form.php');
		return ob_get_clean();
	}
}