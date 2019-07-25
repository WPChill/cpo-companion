<?php

class CPO_Companion_Import_Data {

	public static $instance;
	private $content_path;
	private $widget_path;
	private $theme_settings;
	private $theme_settings_name;
	private $import_option;

	function __construct() {

		$theme = get_template();

		$this->content_path   = apply_filters( 'cpo_companion_content', '' );
		$this->widget_path    = apply_filters( 'cpo_companion_widgets', '' );
		$this->theme_settings = apply_filters( 'cpo_companion_theme_settings', array() );

		if ( '' == $this->content_path && apply_filters( 'cpo_theme_have_content', false ) ) {
			$this->content_path = CPO_COMPANION_PATH . '/demo/' . $theme . '/content.xml';
		}

		if ( '' == $this->widget_path && apply_filters( 'cpo_theme_have_widgets', false ) ) {
			$this->widget_path = CPO_COMPANION_PATH . '/demo/' . $theme . '/widgets.wie';
		}

		$this->theme_settings_name = apply_filters( 'cpo_companion_theme_settings_name', '' );
		$this->import_option       = apply_filters( 'cpo_companion_import_option', '' );

	}

	public static function import_demo( $args ) {

		if ( ! self::$instance ) {
			self::$instance = new CPO_Companion_Import_Data();
		}

		if ( isset( $args['options'] ) ) {
			self::$instance->process_import( $args['options'] );
		}

		return 'ok';

	}

	public function process_import( $steps ) {

		foreach ( $steps as $step ) {

			if ( method_exists( $this, $step ) ) {
				$this->{$step}();
			}
		}

		if ( '' != $this->import_option ) {
			update_option( $this->import_option, 1 );
		}

		do_action( 'cpo_companion_import_done' );

		return 'ok';

	}

	private function import_content() {

		if ( ! current_user_can( 'import' ) || '' == $this->content_path ) {
			return;
		}

		require_once ABSPATH . 'wp-admin/includes/import.php';

		if ( ! class_exists( 'WP_Importer' ) ) {
			$class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
			if ( file_exists( $class_wp_importer ) ) {
				require $class_wp_importer;
			}
		}

		require_once 'import/class-cpo-companion-parser.php';
		require_once 'import/class-cpo-companion-import.php';
		$importer = new CPO_Companion_Import();
		$importer->import( $this->content_path );

		do_action( 'cpo_companion_content_import_done' );
	}


	private function import_widgets() {

		if ( ! current_user_can( 'import' ) || '' == $this->widget_path ) {
			return;
		}

		$data = implode( '', file( $this->widget_path ) );
		$data = json_decode( $data );

		// Have valid data?
		// If no data or could not decode.
		if ( empty( $data ) || ! is_object( $data ) ) {
			return;
		}

		global $wp_registered_sidebars, $wp_registered_widget_controls;

		foreach ( $wp_registered_widget_controls as $widget ) {

			// No duplicates.
			if ( ! empty( $widget['id_base'] ) && ! isset( $available_widgets[ $widget['id_base'] ] ) ) {
				$available_widgets[ $widget['id_base'] ]['id_base'] = $widget['id_base'];
				$available_widgets[ $widget['id_base'] ]['name']    = $widget['name'];
				$widget_instances[ $widget_data['id_base'] ]        = get_option( 'widget_' . $widget['id_base'] );
			}
		}

		// Loop import data's sidebars.
		foreach ( $data as $sidebar_id => $widgets ) {

			// Skip inactive widgets (should not be in export file).
			if ( 'wp_inactive_widgets' === $sidebar_id ) {
				continue;
			}

			// Check if sidebar is available on this site.
			// Otherwise add widgets to inactive, and say so.
			if ( isset( $wp_registered_sidebars[ $sidebar_id ] ) ) {
				$use_sidebar_id = $sidebar_id;
			} else {
				$use_sidebar_id = 'wp_inactive_widgets'; // Add to inactive if sidebar does not exist in theme.
			}

			// Loop widgets.
			foreach ( $widgets as $widget_instance_id => $widget ) {

				$fail = false;

				// Get id_base (remove -# from end) and instance ID number.
				$id_base            = preg_replace( '/-[0-9]+$/', '', $widget_instance_id );
				$instance_id_number = str_replace( $id_base . '-', '', $widget_instance_id );

				// Does site support this widget?
				if ( ! $fail && ! isset( $available_widgets[ $id_base ] ) ) {
					$fail                = true;
					$widget_message_type = 'error';
					$widget_message      = esc_html__( 'Site does not support widget', 'cpo-companion' ); // Explain why widget not imported.
				}

				// Convert multidimensional objects to multidimensional arrays
				// Some plugins like Jetpack Widget Visibility store settings as multidimensional arrays
				// Without this, they are imported as objects and cause fatal error on Widgets page
				// If this creates problems for plugins that do actually intend settings in objects then may need to consider other approach: https://wordpress.org/support/topic/problem-with-array-of-arrays
				// It is probably much more likely that arrays are used than objects, however.
				$widget = json_decode( wp_json_encode( $widget ), true );

				// Does widget with identical settings already exist in same sidebar?
				if ( ! $fail && isset( $widget_instances[ $id_base ] ) ) {

					// Get existing widgets in this sidebar.
					$sidebars_widgets = get_option( 'sidebars_widgets' );
					$sidebar_widgets  = isset( $sidebars_widgets[ $use_sidebar_id ] ) ? $sidebars_widgets[ $use_sidebar_id ] : array(); // Check Inactive if that's where will go.

					// Loop widgets with ID base.
					$single_widget_instances = ! empty( $widget_instances[ $id_base ] ) ? $widget_instances[ $id_base ] : array();
					foreach ( $single_widget_instances as $check_id => $check_widget ) {

						// Is widget in same sidebar and has identical settings?
						if ( in_array( "$id_base-$check_id", $sidebar_widgets, true ) && (array) $widget === $check_widget ) {

							$fail                = true;
							$widget_message_type = 'warning';

							// Explain why widget not imported.
							$widget_message = esc_html__( 'Widget already exists', 'cpo-companion' );

							break;

						}
					}
				}

				// No failure.
				if ( ! $fail ) {

					// Add widget instance
					$single_widget_instances   = get_option( 'widget_' . $id_base ); // All instances for that widget ID base, get fresh every time.
					$single_widget_instances   = ! empty( $single_widget_instances ) ? $single_widget_instances : array(
						'_multiwidget' => 1, // Start fresh if have to.
					);
					$single_widget_instances[] = $widget; // Add it.

					// Get the key it was given.
					end( $single_widget_instances );
					$new_instance_id_number = key( $single_widget_instances );

					// If key is 0, make it 1
					// When 0, an issue can occur where adding a widget causes data from other widget to load,
					// and the widget doesn't stick (reload wipes it).
					if ( '0' === strval( $new_instance_id_number ) ) {
						$new_instance_id_number                             = 1;
						$single_widget_instances[ $new_instance_id_number ] = $single_widget_instances[0];
						unset( $single_widget_instances[0] );
					}

					// Move _multiwidget to end of array for uniformity.
					if ( isset( $single_widget_instances['_multiwidget'] ) ) {
						$multiwidget = $single_widget_instances['_multiwidget'];
						unset( $single_widget_instances['_multiwidget'] );
						$single_widget_instances['_multiwidget'] = $multiwidget;
					}

					// Update option with new widget.
					update_option( 'widget_' . $id_base, $single_widget_instances );

					// Assign widget instance to sidebar.
					// Which sidebars have which widgets, get fresh every time.
					$sidebars_widgets = get_option( 'sidebars_widgets' );

					// Avoid rarely fatal error when the option is an empty string
					// https://github.com/stevengliebe/widget-importer-exporter/pull/11.
					if ( ! $sidebars_widgets ) {
						$sidebars_widgets = array();
					}

					// Use ID number from new widget instance.
					$new_instance_id = $id_base . '-' . $new_instance_id_number;

					// Add new instance to sidebar.
					$sidebars_widgets[ $use_sidebar_id ][] = $new_instance_id;

					// Save the amended data.
					update_option( 'sidebars_widgets', $sidebars_widgets );

					// After widget import action.
					$after_widget_import = array(
						'sidebar'           => $use_sidebar_id,
						'sidebar_old'       => $sidebar_id,
						'widget'            => $widget,
						'widget_type'       => $id_base,
						'widget_id'         => $new_instance_id,
						'widget_id_old'     => $widget_instance_id,
						'widget_id_num'     => $new_instance_id_number,
						'widget_id_num_old' => $instance_id_number,
					);

				}
			}
		}

		do_action( 'cpo_companion_widgets_import_done' );
	}

	private function import_options() {

		if ( ! current_user_can( 'manage_options' ) || '' === $this->theme_settings_name || ! $this->theme_settings ) {
			return;
		}

		update_option( $this->theme_settings_name, $this->theme_settings );

		do_action( 'cpo_companion_settings_import_done' );
	}

}
