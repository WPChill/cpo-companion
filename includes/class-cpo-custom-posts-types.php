<?php

class CPO_Custom_Posts_Types {


	function __construct() {

		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-slides.php';
		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-features.php';
		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-portfolio.php';
		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-services.php';
		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-team.php';
		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-testimonials.php';
		require_once CPO_COMPANION_PATH . 'includes/cposts/cpost-clients.php';

		add_action( 'manage_posts_custom_column', array( $this, 'admin_columns' ), 2 );

	}

	public function admin_columns( $column ) {
		global $post;
		switch ( $column ) {
			case 'ctct-image':
				echo get_the_post_thumbnail( $post->ID, array( 60, 60 ) );
				break;
			case 'ctct-portfolio-cats':
				echo get_the_term_list( $post->ID, 'cpo_portfolio_category', '', ', ', '' );
				break;
			case 'ctct-portfolio-tags':
				echo get_the_term_list( $post->ID, 'cpo_portfolio_tag', '', ', ', '' );
				break;
			case 'cpo-service-cats':
				echo get_the_term_list( $post->ID, 'cpo_service_category', '', ', ', '' );
				break;
			case 'cpo-service-tags':
				echo get_the_term_list( $post->ID, 'cpo_service_tag', '', ', ', '' );
				break;
			default:
				break;
		}
	}

}

new CPO_Custom_Posts_Types();
