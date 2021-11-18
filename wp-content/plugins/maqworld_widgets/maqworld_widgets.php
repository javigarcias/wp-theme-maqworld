<?php
/*
    Plugin Name: MaqWorld - Widgets
    Plugin URI:
    Description: Añade Widgets Personalizados en la web
    Version: 1.0.0
    Author: Javier García Sánchez
    Author URI: https://www.linkedin.com/in/javigarciasanchez/
    Text Domain: maqworld
*/
if(!defined('ABSPATH')) die(); //Bloquea la entrada si alguien quiere ver el contenido del plugin insertando URL

/**
 * Adds Maqworld_Plataformas_Widget widget.
 */
class Maqworld_Plataformas_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Maqworld_Plataformas_Widget', // Base ID
			esc_html__( 'Maqworld Plataformas', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Agrega las plataformas como widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
        $cantidad = $instance['cantidad'];
        if($cantidad == '') $cantidad = 3;
        
        ?>
        <ul>
            <?php
                    global $post;
                    $args = [ 
                    'post_type' => 'maqworld_plataformas',
                    'post_per_page' => $cantidad,
                    'post__not_in' => array($post->ID)
                ];

                $plataformas = new WP_Query($args);
                while($plataformas->have_posts()): $plataformas->the_post();

            ?>

            <li class="plataforma-sidebar">
                <div class="imagen">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>

                <div class="contenido-plataforma">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title() ?></h3>
                    </a>
                    <?php
                        $marca = get_field('marca');
                        $precio = get_field('precio'); 
                    ?>
                    <p class="info-plataforma"> <?php echo $marca . " - " . $precio ?> € </p>
                </div>
            </li>


            <?php endwhile; wp_reset_postdata(); ?>
        </ul>



        <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( '¿Cuántas plataformas quieres mostrar?', 'maqworld' ); ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>">
                <?php esc_attr_e( '¿Cuántas plataformas quieres mostrar?', 'maqworld' ); ?>
            </label>

            <input class="widefat" 
                id="<?php echo esc_attr($this->get_field_id('cantidad')); ?>" 
                name="<?php echo esc_attr($this->get_field_name('cantidad')); ?>" 
                type="number" 
                value="<?php echo esc_attr($cantidad); ?>">
        </p>

		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';

		return $instance;
	}

} // class Maqworld_Plataformas_Widget

// register Maqworld_Plataformas_Widget widget
function register_Maqworld_Plataformas_Widget() {
    register_widget( 'Maqworld_Plataformas_Widget' );
}
add_action( 'widgets_init', 'register_Maqworld_Plataformas_Widget' );