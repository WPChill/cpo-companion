<?php

class CPO_Widget_Flickr extends WP_Widget {

	function __construct() {
		$args = array(
			'classname'   => 'ctwg-flickr',
			'description' => __( 'Displays a stream of photos from Flickr.', 'cpo-companion' ),
		);
		parent::__construct( 'ctwg-flickr', __( 'CPO - Flickr Stream', 'cpo-companion' ), $args );
	}


	function widget( $args, $instance ) {
		$title   = apply_filters( 'widget_title', $instance['title'] );
		$user_id = $instance['user_id'];
		$number  = $instance['number'];
		if ( ! is_numeric( $number ) ) {
			$number = 5;
		} elseif ( $number < 1 ) {
			$number = 1;
		} elseif ( $number > 20 ) {
			$number = 20;
		}

		$data = get_transient( 'cpo_widget_flickr_' . $this->id  );
		if( $data === false ) {
			$response = wp_remote_get( "https://api.flickr.com/services/feeds/photos_public.gne?format=php_serial&id={$user_id}" );
			$data = unserialize( $response['body'] );
		}

		$photos = $data['items'];
		if( ! $photos ) {
			return;
		}

		$photos = array_slice( $photos, 0, $number ); 

		echo $args['before_widget'];
		if ( '' != $title ) {
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
		} 
		?>

		<div class="widget-content">		
			<?php foreach ($photos as $photo): ?>
				<a href="<?php echo esc_url( $photo['url'] ); ?>" rel="nofollow" target="_blank">	
					<img src="<?php echo esc_url( $photo['t_url'] ); ?>" alt="<?php echo esc_attr( $photo['title'] ); ?>"/>
				</a>
			<?php endforeach; ?>
		</div>
		<?php
		echo $args['after_widget'];

		set_transient( 'cpo_widget_flickr_' . $this->id, $data, 12 * HOUR_IN_SECONDS );
	}

	function update( $new_instance, $old_instance ) {
		$instance            = $old_instance;
		$instance['title']   = sanitize_text_field( $new_instance['title'] );
		$instance['user_id'] = sanitize_text_field( $new_instance['user_id'] );
		$instance['number']  = absint( $new_instance['number'] );

		delete_transient( 'cpo_widget_flickr_' . $this->id  );

		return $instance;
	}


	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance, array(
				'title'   => '',
				'user_id' => '',
				'number'  => 9,
			)
		);
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'cpo-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'user_id' ) ); ?>"><?php esc_html_e( 'User ID', 'cpo-companion' ); ?></label>
			<input type="text" value="<?php echo esc_attr( $instance['user_id'] ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'user_id' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'user_id' ) ); ?>" class="widefat" /><br />
			<span><?php echo sprintf( esc_html__( 'If you don\'t find your user\'s ID please use this %slink%s' ), '<a href="https://www.webpagefx.com/tools/idgettr/" target="_blank">', '</a>' ) ?></span><br />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of Photos', 'cpo-companion' ); ?></label><br/>
			<input id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['number'] ); ?>" size="3" />
		</p>		
	<?php
	}
}
