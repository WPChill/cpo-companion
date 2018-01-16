<?php

class CPO_Shortcodes {

	function __construct() {

		$this->admin_hooks();
		$this->load_dependencies();

		//Allow shortcodes in text widgets
		add_filter( 'widget_text', 'do_shortcode' );

	}

	private function load_dependencies() {

		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-accordion.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-animation.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-button.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-clear.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-column.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-counter.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-definition.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-dropcap.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-feature.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-focus.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-leading.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-list.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-login.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-map.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-message.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-optin.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-posts.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-pricing.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-progress.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-register.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-separator.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-section.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-slideshow.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-spacer.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-tabs.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-team.php' );
		require_once( CPO_COMPANION_PATH . 'includes/shortcodes/shortcode-testimonial.php' );

	}

	private function admin_hooks() {

		if ( ! is_admin() ) {
			return;
		}

		add_filter( 'mce_buttons', array( $this, 'shortcode_tinymce_buttons' ) );
		add_filter( 'mce_external_plugins', array( $this, 'shortcode_tinymce' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'shortcode_tinymce_vars' ) );
	}

	public function shortcode_tinymce_buttons( $button_list ) {
		array_push( $button_list, 'ctsc_shortcodes_button' );

		return $button_list;
	}

	public function shortcode_tinymce( $plugin_array ) {
		$plugin_array['ctsc_shortcodes'] = CPO_COMPANION_ASSETS . 'js/shortcodes-tinymce.js';

		return $plugin_array;
	}

	public function shortcode_tinymce_vars() {
		wp_localize_script( 'jquery-ui-core', 'ctscVars', array( 'prefix' => cpo_get_shortcode_prefix() ) );
	}

}

new CPO_Shortcodes();
