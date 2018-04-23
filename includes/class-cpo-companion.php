<?php

class CPO_Companion {

	function __construct() {

		$this->load_dependencies();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	private function load_dependencies() {

		if ( is_admin() ) {
			require_once CPO_COMPANION_PATH . 'includes/class-cpo-settings-page.php';
			require_once CPO_COMPANION_PATH . 'includes/class-cpo-companion-import-data.php';
		}

		require_once CPO_COMPANION_PATH . 'includes/class-cpo-custom-posts-types.php';
		require_once CPO_COMPANION_PATH . 'includes/class-cpo-widgets.php';
		require_once CPO_COMPANION_PATH . 'includes/class-cpo-shortcodes.php';

	}

	private function define_admin_hooks() {

		if ( ! is_admin() ) {
			return;
		}

		add_action( 'admin_print_styles', array( $this, 'admin_styles' ) );
		add_filter( 'plugin_action_links', array( $this, 'action_links' ), 10, 2 );

	}

	private function define_public_hooks() {

		add_action( 'plugins_loaded', array( $this, 'set_locale' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'front_styles' ) );

	}

	public function set_locale() {

		$textdomain = 'cpo-companion';
		$locale     = apply_filters( 'plugin_locale', get_locale(), $textdomain );
		if ( ! load_textdomain( $textdomain, trailingslashit( WP_LANG_DIR ) . $textdomain . '/' . $textdomain . '-' . $locale . '.mo' ) ) {
			load_plugin_textdomain( $textdomain, false, basename( CPO_COMPANION_PATH ) . '/languages/' );
		}

	}

	public function admin_styles() {

		wp_enqueue_style( 'cpo-companion-admin', CPO_COMPANION_ASSETS . 'css/admin.css' );

	}

	public function front_styles() {

		$api_key = cpo_get_option( 'shortcode_integration_gmap', 'ctsc_settings' );

		wp_enqueue_style( 'fontawesome', CPO_COMPANION_ASSETS . 'css/fontawesome.css' );
		wp_enqueue_style( 'cpo-companion-style', CPO_COMPANION_ASSETS . 'css/style.css' );

		wp_register_script( 'cpo-companion-core', CPO_COMPANION_ASSETS . 'js/core.js', array( 'jquery' ), false, true );
		wp_register_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . $api_key, false, false, true );
		wp_register_script( 'cpo-companion-waypoints', CPO_COMPANION_ASSETS . 'js/jquery-waypoints.js', array( 'jquery' ) );
		wp_register_script( 'cpo-companion-toggles', CPO_COMPANION_ASSETS . 'js/shortcodes-toggles.js', array( 'jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-tabs' ) );
		wp_register_script( 'cpotheme-cycle', CPO_COMPANION_ASSETS . 'js/jquery-cycle2.js', array( 'jquery' ), false, true );

	}

	public function action_links( $links, $file ) {
		if ( 'cpo-companion/cpo-companion.php' == $file ) {
			$new_links = '<a href="' . admin_url( 'options-general.php?page=cpo_companion_settings' ) . '">' . __( 'Settings', 'cpo-companion' ) . '</a>';
			array_unshift( $links, $new_links );
		}
		return $links;
	}

}
