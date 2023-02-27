<?php   
/**
 * @package fsars-medical
 */
 ?>
 <?php
 if ( ! function_exists( 'fsars_medical_setup' ) ) :
function fsars_medical_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'fsars-medical' ),
		'footer' => esc_html__( 'Footer Menu', 'fsars-medical' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	

	$defaults = array(
			'default-image'          => get_template_directory_uri() .'/views/images/slider1.jpg',
			'default-text-color' => 'ffffff',
			'width'                  => 1400,
			'height'                 => 500,
			'uploads'                => true,
			'wp-head-callback'   => 'fsars_medical_header_style',			
		);
	add_theme_support( 'custom-header', $defaults );
	if ( ! isset( $content_width ) ) $content_width = 900;
} 
endif; // fsars_medical_setup
add_action( 'after_setup_theme', 'fsars_medical_setup' );
?>
<?php
function fsars_medical_header_style() {
	$fsars_medical_header_text_color = get_header_textcolor();
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $fsars_medical_header_text_color ) {
		return;
	}
	echo '<style id="fsars-medical-custom-header-styles" type="text/css">';
	if ( 'blank' !== $fsars_medical_header_text_color ) 
	{
		echo '.logotxt, .logotxt a
			 {
				color: #'.esc_attr( $fsars_medical_header_text_color ).'
			}';
	}	
	echo '</style>';	
}