<?php

class CPO_Widget_Instagram extends WP_Widget {

	function __construct() {
		$args = array(
			'classname'   => 'ctwg-instagram',
			'description' => __( 'Displays a stream of photos from Instagram.', 'cpo-companion' ),
		);
		parent::__construct( 'ctwg-instagram', __( 'CPO - Instagram Stream', 'cpo-companion' ), $args );
	}


	function widget( $args, $instance ) {
		$title   = apply_filters( 'widget_title', $instance['title'] );
		$access_token = $instance['access_token'];
		$number  = $instance['number'];
		if ( ! is_numeric( $number ) ) {
			$number = 5;
		} elseif ( $number < 1 ) {
			$number = 1;
		} elseif ( $number > 20 ) {
			$number = 20;
		}

		$data = get_transient( 'cpo_widget_instagram_' . $this->id );
		if( $data === false ) {
			$response = wp_remote_get( "https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}&count={$number}" );
			$data = json_decode( $response['body'] );
		}

		$photos = $data->data;
		if( ! $photos ) {
			return;
		}

		echo $args['before_widget'];
		if ( '' != $title ) {
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
		} 

		?>

		<div class="widget-content">		
			<?php foreach ($photos as $photo): ?>
				<a href="<?php echo esc_url( $photo->link ); ?>" rel="nofollow" target="_blank">	
					<img src="<?php echo esc_url( $photo->images->thumbnail->url ); ?>"/>
				</a>
			<?php endforeach; ?>
		</div>
		<?php
		echo $args['after_widget'];

		set_transient( 'cpo_widget_instagram_' . $this->id, $data, 12 * HOUR_IN_SECONDS ); 
	}

	function update( $new_instance, $old_instance ) {
		$instance                 = $old_instance;
		$instance['title']        = sanitize_text_field( $new_instance['title'] );
		$instance['access_token'] = sanitize_text_field( $new_instance['access_token'] );
		$instance['number']       = absint( $new_instance['number'] );

		delete_transient( 'cpo_widget_instagram_' . $this->id  );

		return $instance;
	}


	function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance, array(
				'title'   => '',
				'access_token' => '',
				'number'  => 9,
			)
		);
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'cpo-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			
			<label for="<?php echo esc_attr( $this->get_field_id( 'access_token' ) ); ?>"><?php esc_html_e( 'Access Token', 'cpo-companion' ); ?></label>
			<input type="text" value="<?php echo esc_attr( $instance['access_token'] ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'access_token' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'access_token' ) ); ?>" class="widefat" /><br />
			<?php esc_html_e('generate an instagram access token using ', 'cpo-companion' ); ?><a href="<?php echo esc_url('https://instagram.pixelunion.net/');?>" target="_blank"><?php esc_html_e('this link', 'cpo-companion'); ?></a>		
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of Photos', 'cpo-companion' ); ?></label><br/>
			<input id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['number'] ); ?>" size="3" />
		</p>		
	<?php
	}
}
