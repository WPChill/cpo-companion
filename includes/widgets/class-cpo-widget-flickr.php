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
		$flickr_query = 'display=latest&size=s&layout=x&source=user&user=' . $user_id . '&count=' . $number;

		echo $args['before_widget'];
		if ( '' != $title ) {
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
		} ?>
		<div class="widget-content">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?<?php echo esc_attr( $flickr_query ); ?>"></script>
		</div>
		<?php
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) {
		$instance            = $old_instance;
		$instance['title']   = sanitize_text_field( $new_instance['title'] );
		$instance['user_id'] = absint( $new_instance['user_id'] );
		$instance['number']  = absint( $new_instance['number'] );
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
			</small>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of Photos', 'cpo-companion' ); ?></label><br/>
			<input id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['number'] ); ?>" size="3" />
		</p>		
	<?php
	}
}
