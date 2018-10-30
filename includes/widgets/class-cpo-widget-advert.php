<?php

class CPO_Widget_Advert extends WP_Widget {

	function __construct() {
		$widget_ops = array(
			'classname'   => 'ctwg-advert',
			'description' => __( 'This widget lets you display an advertising banner of any size.', 'cpo-companion' ),
		);
		parent::__construct( 'ctwg-advert', __( 'CPO - Ad Space', 'cpo-companion' ), $widget_ops );
		$this->alt_option_name = 'ctwg-advert';
	}

	function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( '' != $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<div class="ctwg-advert" id="<?php echo $args['widget_id']; ?>">
			<?php if ( '' == $instance['ad_code'] ) : ?>
			<a href="<?php echo esc_url( $instance['link_url'] ); ?>">
				<img src="<?php echo esc_url( $instance['image_url'] ); ?>" title="<?php echo esc_attr( $title ); ?>" alt="<?php echo esc_attr( $title ); ?>"/>
			</a>
			<?php else : ?>
			<?php echo htmlspecialchars_decode( $instance['ad_code'] ); ?>
			<?php endif; ?>
		</div>
		<?php
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['image_url'] = esc_url_raw( $new_instance['image_url'] );
		$instance['link_url']  = esc_url_raw( $new_instance['link_url'] );
		$instance['ad_code']   = esc_html( $new_instance['ad_code'] );
		return $instance;
	}

	function form( $instance ) {
		$instance  = wp_parse_args(
			(array) $instance, array(
				'title'     => '',
				'image_url' => '',
				'link_url'  => '',
				'ad_code'   => '',
			)
		);
		$title     = $instance['title'];
		$image_url = $instance['image_url'];
		$link_url  = $instance['link_url'];
		$ad_code   = $instance['ad_code'];
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'cpo-companion' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'image_url' ) ); ?>"><?php esc_html_e( 'Image URL', 'cpo-companion' ); ?></label><br/>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image_url' ) ); ?>" type="text" value="<?php echo esc_attr( $image_url ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'link_url' ) ); ?>"><?php esc_html_e( 'Link URL', 'cpo-companion' ); ?></label><br/>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link_url' ) ); ?>" type="text" value="<?php echo esc_attr( $link_url ); ?>" />
		</p>
		<p><b>- <?php _e( 'or', 'cpo-companion' ); ?> -</b></p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'ad_code' ) ); ?>"><?php esc_html_e( 'Advertising Code', 'cpo-companion' ); ?></label><br/>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ad_code' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'ad_code' ) ); ?>">
				<?php echo htmlspecialchars_decode( $ad_code ); ?>
			</textarea>
		</p>
		<p><?php esc_html_e( 'You can add an image linked to a specific URL, or alternatively paste your advertising code.', 'cpo-companion' ); ?></p>
	<?php
	}
}
