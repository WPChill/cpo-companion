<?php

class CPO_Widgets {

	function __construct() {

		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-advert.php' );
		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-flickr.php' );
		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-instagram.php' );
		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-recent-posts.php' );
		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-tweets.php' );
		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-social.php' );
		require_once( CPO_COMPANION_PATH . 'includes/widgets/class-cpo-widget-author.php' );

		add_action( 'widgets_init', array( $this, 'register_widgets' ) );

	}

	public function register_widgets() {

		register_widget( 'CPO_Widget_Advert' );
		register_widget( 'CPO_Widget_Tweets' );
		register_widget( 'CPO_Widget_Author' );
		register_widget( 'CPO_Widget_Flickr' );
		register_widget( 'CPO_Widget_Instagram' );
		register_widget( 'CPO_Widget_Recent_Posts' );
		register_widget( 'CPO_Widget_Social' );

	}

}

new CPO_Widgets();
