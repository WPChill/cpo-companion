<?php

class CPO_Widget_Author extends WP_Widget {

	function __construct() {
		$args = array(
			'classname'   => 'ctwg-author',
			'description' => __( 'Displays an author badge for a specific user.', 'cpo-companion' ),
		);
		parent::__construct( 'ctwg-author', __( 'CPO - Author Badge', 'cpo-companion' ), $args );
	}

	function widget( $args, $instance ) {

		$widget_id = str_replace( '-', '_', $args['widget_id'] );
		$title     = apply_filters( 'widget_title', $instance['title'] );
		$userid    = intval( $instance['user'] );
		$userdata  = get_userdata( $userid );
		$size      = intval( $instance['size'] );
		if ( 0 == $size ) {
			$size = 100;
		}

		$output  = '';
		$output .= '<div class="ctwg-author">';
		$output .= '<div class="ctwg-author-image">' . get_avatar( $userdata->user_email, $size ) . '</div>';
		$output .= '<div class="ctwg-author-body">';
		$output .= '<h4 class="ctwg-author-name"><a href="' . esc_url( get_author_posts_url( $userid ) ) . '">' . esc_html( get_the_author() ) . '</a></h4>';
		if ( '' != $instance['description'] ) {
			$output .= '<div class="ctwg-author-description">' . esc_html( $instance['description'] ) . '</div>';
		}
		$output .= '<div class="ctwg-author-content">' . wp_kses_post( get_the_author_meta( 'description', $userid ) ) . '</div>';
		$output .= '</div>';
		$output .= '</div>';

		echo $args['before_widget'];
		if ( '' != $title ) {
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
		}
		echo $output;
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) {
		$instance                = $old_instance;
		$instance['title']       = sanitize_text_field( $new_instance['title'] );
		$instance['user']        = absint( $new_instance['user'] );
		$instance['size']        = absint( $new_instance['size'] );
		$instance['description'] = sanitize_text_field( $new_instance['description'] );
		return $instance;
	}

	function form( $instance ) {
		$instance    = wp_parse_args(
			(array) $instance, array(
				'title'       => '',
				'user'        => '',
				'description' => '',
				'size'        => 100,
			)
		);
		$title       = esc_attr( $instance['title'] );
		$user        = esc_attr( $instance['user'] );
		$description = esc_attr( $instance['description'] );
		$size        = intval( $instance['size'] );
		$user_list   = get_users( 'orderby=nicename' ); ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'cpo-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'user' ) ); ?>"><?php esc_html_e( 'User', 'cpo-companion' ); ?></label>
			<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'user' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'user' ) ); ?>">
				<?php foreach ( $user_list as $current_user ) : ?>
				<option value="<?php echo esc_attr( $current_user->ID ); ?>" <?php selected( $instance['user'] == $current_user->ID ); ?>>
					<?php echo esc_html( $current_user->user_nicename ); ?>
				</option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'Description', 'cpo-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['description'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>"><?php esc_html_e( 'Avatar Size (px)', 'cpo-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'size' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'size' ) ); ?>" type="text" value="<?php echo intval( $instance['size'] ); ?>" />
		</p>
	<?php
	}
}
