<?php

/**
*
*/
class CPO_Settings_Page {

	private $settings_sections;
	private $shortcodes_sections;
	private $settings_fields;
	private $shortcode_fields;

	function __construct() {

		$this->settings_sections = array(
			'ctct_portfolio' => array(
				'label'       => __( 'Portfolio', 'cpo-companion' ),
				'description' => __( 'Set up custom slugs for the portfolio content type.', 'cpo-companion' ),
			),

			'ctct_services'  => array(
				'label'       => __( 'Services', 'cpo-companion' ),
				'description' => __( 'Set up custom slugs for the service content type.', 'cpo-companion' ),
			),

			'ctct_team'      => array(
				'label'       => __( 'Team Members', 'cpo-companion' ),
				'description' => __( 'Set up custom slugs for the team members content type.', 'cpo-companion' ),
			),

			'ctct_display'   => array(
				'label'       => __( 'Content Types', 'cpo-companion' ),
				'description' => __( 'Activate specific content types in the admin area, even when using a WordPress theme that does not support it.', 'cpo-companion' ),
			),
		);

		$this->settings_sections = apply_filters( 'ctct_metadata_sections', $this->settings_sections );

		$this->settings_fields = array(
			'slug_portfolio'          => array(
				'label'       => __( 'Portfolio Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for individual portfolio items.', 'cpo-companion' ),
				'section'     => 'ctct_portfolio',
				'type'        => 'text',
				'width'       => '250px',
				'placeholder' => 'portfolio-item',
				'setting'     => 'ctct_settings',
			),

			'slug_portfolio_category' => array(
				'label'       => __( 'Portfolio Category Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for portfolio categories.', 'cpo-companion' ),
				'section'     => 'ctct_portfolio',
				'type'        => 'text',
				'class'       => 'half-text',
				'placeholder' => 'portfolio-category',
				'setting'     => 'ctct_settings',
			),

			'slug_portfolio_tag'      => array(
				'label'       => __( 'Portfolio Tag Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for portfolio tags.', 'cpo-companion' ),
				'section'     => 'ctct_portfolio',
				'type'        => 'text',
				'placeholder' => 'portfolio-tag',
				'setting'     => 'ctct_settings',
			),

			'slug_service'            => array(
				'label'       => __( 'Service Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for individual services.', 'cpo-companion' ),
				'section'     => 'ctct_services',
				'type'        => 'text',
				'width'       => '250px',
				'placeholder' => 'service',
				'setting'     => 'ctct_settings',
			),

			'slug_service_category'   => array(
				'label'       => __( 'Service Category Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for service categories.', 'cpo-companion' ),
				'section'     => 'ctct_services',
				'type'        => 'text',
				'placeholder' => 'service-category',
				'setting'     => 'ctct_settings',
			),

			'slug_service_tag'        => array(
				'label'       => __( 'Service Tag Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for service tags.', 'cpo-companion' ),
				'section'     => 'ctct_services',
				'type'        => 'text',
				'placeholder' => 'service-tag',
				'setting'     => 'ctct_settings',
			),

			'slug_team_member'      => array(
				'label'       => __( 'Team Member Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the url for team members.', 'cpo-companion' ),
				'section'     => 'ctct_team',
				'type'        => 'text',
				'placeholder' => 'cpo_team',
				'setting'     => 'ctct_settings',
			),

			'slug_team_category'      => array(
				'label'       => __( 'Team Group Slug', 'cpo-companion' ),
				'description' => __( 'Indicates the slug to be used in the URL for team groups.', 'cpo-companion' ),
				'section'     => 'ctct_team',
				'type'        => 'text',
				'placeholder' => 'team-group',
				'setting'     => 'ctct_settings',
			),

			'display_slides'          => array(
				'label'       => __( 'Display Slides', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),

			'display_features'        => array(
				'label'       => __( 'Display Features', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),

			'display_portfolio'       => array(
				'label'       => __( 'Display Portfolio', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),

			'display_services'        => array(
				'label'       => __( 'Display Services', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),

			'display_team'            => array(
				'label'       => __( 'Display Team Members', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),

			'display_testimonials'    => array(
				'label'       => __( 'Display Testimonials', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),

			'display_clients'         => array(
				'label'       => __( 'Display Clients', 'cpo-companion' ),
				'description' => __( 'Show this content type.', 'cpo-companion' ),
				'section'     => 'ctct_display',
				'type'        => 'checkbox',
				'setting'     => 'ctct_settings',
			),
		);

		$this->settings_fields = apply_filters( 'ctct_metadata_settings', $this->settings_fields );

		// Shortcodes' settings & sections
		$this->shortcodes_sections = array(
			'ctsc_shortcodes' => array(
				'label'       => __( 'Shortcodes', 'cpo-companion' ),
				'description' => __( 'Configure the behavior of shortcodes.', 'cpo-companion' ),
			),
		);

		$this->shortcodes_sections = apply_filters( 'ctsc_metadata_sections', $this->shortcodes_sections );

		$this->shortcode_fields = array(
			'shortcode_prefix'           => array(
				'label'       => __( 'Shortcode Prefix', 'cpo-companion' ),
				'description' => __( 'Specifies a prefix for all shortcodes, so that you may avoid possible conflicts when installing themes or other plugins. If using a prefix, an underscore (_) will be used as a separator.', 'cpo-companion' ),
				'section'     => 'ctsc_shortcodes',
				'empty'       => true,
				'default'     => 'ct',
				'type'        => 'text',
				'setting'     => 'ctsc_settings',
			),
			'shortcode_integration_gmap' => array(
				'label'       => __( 'Google Maps Api Key', 'cpo-companion' ),
				'description' => sprintf( __( 'Before you begin using Google Map plugin, please note that All Google Maps users now required to have an API key to function. You can read more about that %1$s here %2$s or you can go and %3$s create an API key %4$s', 'cpo-companion' ), '<a href="https://maps-apis.googleblog.com/2016/06/building-for-scale-updates-to-google.html" target="_blank">', '</a>', '<a href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true" target="_blank">', '</a>' ),
				'section'     => 'ctsc_shortcodes',
				'empty'       => true,
				'default'     => 'ct',
				'type'        => 'text',
				'setting'     => 'ctsc_settings',
			),
		);

		$this->shortcode_fields = apply_filters( 'ctsc_metadata_settings', $this->shortcode_fields );

		add_action( 'admin_menu', array( $this, 'create_settings_page' ) );
		add_action( 'admin_init', array( $this, 'settings_fields' ) );

	}

	public function create_settings_page() {

		add_options_page( esc_html__( 'CPO Settings', 'cpo-companion' ), esc_html__( 'CPO Settings', 'cpo-companion' ), 'manage_options', 'cpo_companion_settings', array( $this, 'settings_page' ) );

	}

	public function settings_page() {

		$tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'settings';
		if ( 'shortcodes' != $tab ) {
			$tab = 'settings';
		}

		echo '<h2 class="nav-tab-wrapper wp-clearfix">';
		echo '<a class="nav-tab ' . ( 'settings' == $tab ? 'nav-tab-active' : '' ) . '" href="' . admin_url( 'options-general.php?page=cpo_companion_settings&tab=settings' ) . '">' . esc_html__( 'Content Types', 'cpo-companion' ) . '</a>';
		echo '<a class="nav-tab ' . ( 'shortcodes' == $tab ? 'nav-tab-active' : '' ) . '" href="' . admin_url( 'options-general.php?page=cpo_companion_settings&tab=shortcodes' ) . '">' . esc_html__( 'Shortcodes', 'cpo-companion' ) . '</a>';
		echo '</h2>';

		if ( 'shortcodes' == $tab ) {
			$this->generate_shortcodes_html();
		} else {
			$this->generate_settings_html();
		}

	}

	public function settings_fields() {

		$settings_values   = get_option( 'ctct_settings' );
		$shortcodes_values = get_option( 'ctsc_settings' );

		//Register new setting
		register_setting( 'ctct_settings', 'ctct_settings', array( $this, 'ctct_flush_rewrite_rules' ) );

		//Add sections to the settings page
		foreach ( $this->settings_sections as $setting_id => $setting_data ) {
			add_settings_section( $setting_id, $setting_data['label'], array( $this, 'ctct_settings_section' ), 'ctct_settings' );
		}

		//Add settings & controls
		foreach ( $this->settings_fields as $setting_id => $setting_data ) {
			$setting_data['id']    = $setting_id;
			$setting_data['value'] = isset( $settings_values[ $setting_id ] ) ? $settings_values[ $setting_id ] : '';
			add_settings_field( $setting_id, $setting_data['label'], array( $this, 'ctct_settings_field' ), 'ctct_settings', $setting_data['section'], $setting_data );
		}

		// Register settings & sections for shortcodes tab
		register_setting( 'ctsc_settings', 'ctsc_settings' );

		//Add sections to the settings page
		foreach ( $this->shortcodes_sections as $setting_id => $setting_data ) {
			add_settings_section( $setting_id, $setting_data['label'], array( $this, 'ctct_settings_section' ), 'ctsc_settings' );
		}

		//Add settings & controls
		foreach ( $this->shortcode_fields as $setting_id => $setting_data ) {
			$setting_data['id']    = $setting_id;
			$setting_data['value'] = isset( $shortcodes_values[ $setting_id ] ) ? $shortcodes_values[ $setting_id ] : '';
			add_settings_field( $setting_id, $setting_data['label'], array( $this, 'ctct_settings_field' ), 'ctsc_settings', $setting_data['section'], $setting_data );
		}

	}

	//Flush rules on saving settings
	public function ctct_flush_rewrite_rules( $value ) {
		flush_rewrite_rules();
		return $value;
	}

	public function ctct_settings_section( $args ) {
		foreach ( $this->settings_sections as $setting_id => $setting_data ) {
			if ( $args['id'] == $setting_id ) {
				echo '<p>' . $setting_data['description'] . '</p>';
			}
		}
	}


	public function ctct_settings_field( $args ) {
		if ( ! isset( $args['class'] ) ) {
			$args['class'] = '';
		}
		if ( ! isset( $args['placeholder'] ) ) {
			$args['placeholder'] = '';
		}
		if ( ! isset( $args['setting'] ) ) {
			$args['setting'] = 'ctct_settings';
		}
		switch ( $args['type'] ) {
			case 'text':
				echo '<input name="' . $args['setting'] . '[' . $args['id'] . ']" type="text" id="' . $args['id'] . '" value="' . $args['value'] . '" placeholder="' . $args['placeholder'] . '" class="' . $args['class'] . '"/>';
				if ( isset( $args['description'] ) && '' != $args['description'] ) {
					echo '<p class="description">' . $args['description'] . '</p>';
				}
				break;

			case 'checkbox':
				echo '<label for="' . $args['id'] . '"><input name="' . $args['setting'] . '[' . $args['id'] . ']" type="checkbox" value="1" id="' . $args['id'] . '" ' . checked( 1, $args['value'], false ) . '" placeholder="' . $args['placeholder'] . '" class="' . $args['class'] . '"/> ' . $args['description'] . '</label>';
				if ( isset( $args['description'] ) && '' != $args['description'] ) {
					echo '<p class="description">' . $args['description'] . '</p>';
				}
				break;
		}
	}

	private function generate_settings_html() {
		echo '<div class="wrap">';
		//settings_errors();
		echo '<form method="post" action="options.php">';
		settings_fields( 'ctct_settings' );
		do_settings_sections( 'ctct_settings' );
		submit_button();
		echo '</form>';
		echo '</div>';
	}

	private function generate_shortcodes_html() {
		echo '<div class="wrap">';
		//settings_errors();
		echo '<form method="post" action="options.php">';
		settings_fields( 'ctsc_settings' );
		do_settings_sections( 'ctsc_settings' );
		submit_button();
		echo '</form>';
		echo '</div>';
	}

}

new CPO_Settings_Page();
