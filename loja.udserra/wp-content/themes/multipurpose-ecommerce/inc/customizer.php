<?php
/**
 * Multipurpose Ecommerce: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function multipurpose_ecommerce_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'multipurpose_ecommerce_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'multipurpose-ecommerce' ),
	    'description' => __( 'Description of what this panel does.', 'multipurpose-ecommerce' ),
	) );

	// font array
	$multipurpose_ecommerce_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface', 
        'Acme' => 'Acme', 
        'Anton' => 'Anton',
        'Architects Daughter' =>'Architects Daughter', 
        'Arimo' => 'Arimo', 
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo', 
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' =>  'Alfa Slab One', 
        'Averia Serif Libre' =>  'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script', 
        'Bitter' =>  'Bitter', 
        'Bree Serif' => 'Bree Serif', 
        'BenchNine' => 'BenchNine',
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo', 
        'Courgette' => 'Courgette', 
        'Cherry Swash' => 'Cherry Swash', 
        'Cormorant Garamond' => 'Cormorant Garamond', 
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One',
        'Dosis' => 'Dosis', 
        'Droid Sans' => 'Droid Sans',
        'Economica' =>  'Economica',
        'Fredoka One' => 'Fredoka One', 
        'Fjalla One' => 'Fjalla One', 
        'Francois One' => 'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' =>  'Great Vibes', 
        'Handlee' => 'Handlee',
        'Hammersmith One' =>'Hammersmith One', 
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC',
        'Julius Sans One' => 'Julius Sans One', 
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans',
        'Kanit' => 'Kanit', 
        'Lobster' =>  'Lobster', 
        'Lato' => 'Lato', 
        'Lora' =>'Lora',
        'Libre Baskerville' =>  'Libre Baskerville', 
        'Lobster Two' => 'Lobster Two',
        'Merriweather' => 'Merriweather', 
        'Monda' => 'Monda', 
        'Montserrat' => 'Montserrat', 
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script', 
        'Noto Serif' => 'Noto Serif', 
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>  'Overpass Mono', 
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron',
        'Patua One' => 'Patua One', 
        'Pacifico' =>  'Pacifico',
        'Padauk' => 'Padauk',
        'Playball' =>  'Playball', 
        'Playfair Display' => 'Playfair Display',
        'PT Sans' => 'PT Sans', 
        'Philosopher' => 'Philosopher', 
        'Permanent Marker' => 'Permanent Marker', 
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro',
        'Shadows Into Light Two' => 'Shadows Into Light Two',
        'Shadows Into Light' => 'Shadows Into Light',
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand',
        'Tangerine' => 'Tangerine', 
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round',
        'Vampiro One' => 'Vampiro One', 
        'Vollkorn' => 'Vollkorn', 
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	
	$wp_customize->add_section( 'multipurpose_ecommerce_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_paragraph_color', array(
		'label' => __('Paragraph Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_paragraph_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'Paragraph Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	$wp_customize->add_setting('multipurpose_ecommerce_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_atag_color', array(
		'label' => __('"a" Tag Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_atag_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( '"a" Tag Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_li_color', array(
		'label' => __('"li" Tag Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_li_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( '"li" Tag Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h1_color', array(
		'label' => __('H1 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h1_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H1 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h1_font_size',array(
		'label'	=> __('H1 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h2_color', array(
		'label' => __('H2 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h2_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H2 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h2_font_size',array(
		'label'	=> __('H2 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h3_color', array(
		'label' => __('H3 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h3_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H3 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h3_font_size',array(
		'label'	=> __('H3 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h4_color', array(
		'label' => __('H4 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h4_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H4 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h4_font_size',array(
		'label'	=> __('H4 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h5_color', array(
		'label' => __('H5 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h5_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H5 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h5_font_size',array(
		'label'	=> __('H5 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'multipurpose_ecommerce_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_h6_color', array(
		'label' => __('H6 Color', 'multipurpose-ecommerce'),
		'section' => 'multipurpose_ecommerce_typography',
		'settings' => 'multipurpose_ecommerce_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_ecommerce_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_ecommerce_h6_font_family', array(
	    'section'  => 'multipurpose_ecommerce_typography',
	    'label'    => __( 'H6 Fonts','multipurpose-ecommerce'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_ecommerce_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('multipurpose_ecommerce_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_h6_font_size',array(
		'label'	=> __('H6 Font Size','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_typography',
		'setting'	=> 'multipurpose_ecommerce_h6_font_size',
		'type'	=> 'text'
	));	

	// background skin mode
	$wp_customize->add_setting('multipurpose_ecommerce_background_image_type',array(
        'default' => __('Transparent','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_background_image_type',array(
        'type' => 'radio',
        'label' => __('Background Skin Mode','multipurpose-ecommerce'),
        'section' => 'background_image',
        'choices' => array(
            'Transparent' => __('Transparent','multipurpose-ecommerce'),
            'Background' => __('Background','multipurpose-ecommerce'),
        ),
	) );

	// Add the Global Color typography section.
	$wp_customize->add_section( 'multipurpose_ecommerce_theme_color_option', array( 
		'panel' => 'multipurpose_ecommerce_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'multipurpose-ecommerce' )
	));

  	$wp_customize->add_setting( 'multipurpose_ecommerce_theme_color', array(
	    'default' => '#4f66c9',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_theme_color', array(
  		'label' =>__( 'Color Option', 'multipurpose-ecommerce' ),
	    'description' => __('One can change complete theme color on just one click.', 'multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_theme_color_option',
	    'settings' => 'multipurpose_ecommerce_theme_color',
  	)));

  	// woocommerce Options
	$wp_customize->add_section( 'multipurpose_ecommerce_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_display_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_display_related_products',array(
       'type' => 'checkbox',
       'label' => __('Related Product','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_shop_page_options',
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_shop_products_border',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_shop_products_border',array(
       'type' => 'checkbox',
       'label' => __('Product Border','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_shop_page_options',
    ));

	$wp_customize->add_setting( 'multipurpose_ecommerce_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'multipurpose_ecommerce_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'multipurpose-ecommerce' ),
		'section'  => 'multipurpose_ecommerce_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('multipurpose_ecommerce_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));	
	$wp_customize->add_control('multipurpose_ecommerce_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_shop_button_padding_top',array(
		'default' => 6,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

  	//Layout Settings
	$wp_customize->add_section( 'multipurpose_ecommerce_width_layout', array(
    	'title'      => __( 'Layout Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	// fixed header
	$wp_customize->add_setting( 'multipurpose_ecommerce_fixed_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_fixed_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Fixed Header','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_width_layout'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_loader_setting',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_loader_setting',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_width_layout'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_preloader_types',array(
        'default' => __('Default','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_preloader_types',array(
        'type' => 'radio',
        'label' => __('Preloader Option','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_width_layout',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Circle' => __('Circle','multipurpose-ecommerce'),
            'Two Circle' => __('Two Circle','multipurpose-ecommerce')
        ),
	) );

    $wp_customize->add_setting( 'multipurpose_ecommerce_loader_color_setting', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_width_layout',
	    'settings' => 'multipurpose_ecommerce_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'multipurpose_ecommerce_loader_background_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_width_layout',
	    'settings' => 'multipurpose_ecommerce_loader_background_color',
  	)));

	$wp_customize->add_setting('multipurpose_ecommerce_theme_options',array(
    'default' => __('Default','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','multipurpose-ecommerce'),
        'description' => __('Here you can change the Width layout. ','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_width_layout',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Wide Layout' => __('Wide Layout','multipurpose-ecommerce'),
            'Box Layout' => __('Box Layout','multipurpose-ecommerce'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'multipurpose_ecommerce_button_option', array(
		'title' => __('Button','multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));

	//Show /Hide border
	$wp_customize->add_setting( 'multipurpose_ecommerce_button_border',array(
		'default' => '',
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_button_border',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Border for Blog page','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_button_option'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_left_right_padding',array(
		'label'	=> __('Left and Right Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_section( 'multipurpose_ecommerce_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'multipurpose-ecommerce' ),
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('multipurpose_ecommerce_layout_settings',array(
        'default' => __('Right Sidebar','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_layout_settings',array(
        'type' => 'radio',
        'label' => __('Post Sidebar Layout','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_general_option',
        'description' => __('This option work for blog page, blog single page, archive page and search page.','multipurpose-ecommerce'),
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-ecommerce'),
            'One Column' => __('One Column','multipurpose-ecommerce'),
            'Three Columns' => __('Three Columns','multipurpose-ecommerce'),
            'Four Columns' => __('Four Columns','multipurpose-ecommerce'),
            'Grid Layout' => __('Grid Layout','multipurpose-ecommerce')
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_page_sidebar_option',array(
        'default' => __('One Column','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_page_sidebar_option',array(
        'type' => 'radio',
        'label' => __('Page Sidebar Layout','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-ecommerce'),
            'One Column' => __('Full Column','multipurpose-ecommerce')
        ),
	) );

	//Topbar section
	$wp_customize->add_section('multipurpose_ecommerce_topbar',array(
		'title'	=> __('Topbar','multipurpose-ecommerce'),
		'label' => __('Topbar Content', 'multipurpose-ecommerce'),
		'description' => __('Here you can add Shipping, Money Back and Support text.','multipurpose-ecommerce'),
		'priority'	=> null,
		'panel' => 'multipurpose_ecommerce_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'multipurpose_ecommerce_show_hide_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('multipurpose_ecommerce_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','multipurpose-ecommerce' ),
        'section' => 'multipurpose_ecommerce_topbar'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_shipping',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_shipping',array(
		'label'	=> __('For Shipping','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_topbar',
		'setting'	=> 'multipurpose_ecommerce_shipping',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_money',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_money',array(
		'label'	=> __('For Money Back','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_topbar',
		'setting'	=> 'multipurpose_ecommerce_money',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_support',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_support',array(
		'label'	=> __('For Support','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_topbar',
		'setting'	=> 'multipurpose_ecommerce_support',
		'type'		=> 'text'
	));

	// navigation menu 
	$wp_customize->add_section( 'multipurpose_ecommerce_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'multipurpose-ecommerce' ),
		'priority'   => null,
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_navigation_menu',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_menu_text_tranform',array(
        'default' => __('Default','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_menu_text_tranform',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Text Transform','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_navigation_menu',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Capitalize' => __('Capitalize','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_menu_font_weight',array(
        'default' => __('Default','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_menu_font_weight',array(
        'type' => 'radio',
        'label' => __('Navigation Menus Font Weight','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_navigation_menu',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Normal' => __('Normal','multipurpose-ecommerce'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'multipurpose_ecommerce_slider' , array(
    	'title'      => __( 'Slider Section', 'multipurpose-ecommerce' ),
    	'label'     => __('Slider Settings', 'multipurpose-ecommerce'),
    	'description'	=> __('Here you can select pages which you have created for slider.','multipurpose-ecommerce'),
		'priority'   => null,
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider',
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_slider_title',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_slider_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'multipurpose_ecommerce_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'multipurpose_ecommerce_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'multipurpose_ecommerce_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'multipurpose-ecommerce' ),
			'section'  => 'multipurpose_ecommerce_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'multipurpose_ecommerce_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_number_range',
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('multipurpose_ecommerce_slider_height_option',array(
		'default'=> __('600','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_height_option',array(
		'label'	=> __('Slider Height Option','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'type'=> 'text'
	));

	//content layout
    $wp_customize->add_setting('multipurpose_ecommerce_slider_content_option',array(
    'default' => __('Center','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_slider',
        'choices' => array(
            'Center' => __('Center','multipurpose-ecommerce'),
            'Left' => __('Left','multipurpose-ecommerce'),
            'Right' => __('Right','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_slider_button_text',array(
		'default'=> __('READ MORE','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_slider_button_text',array(
		'label'	=> __('Slider Button Text','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_slider',
		'type'=> 'text'
	));

	//Opacity
	$wp_customize->add_setting('multipurpose_ecommerce_slider_opacity_color',array(
      'default'              => __('0.7','multipurpose-ecommerce'),
      'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','multipurpose-ecommerce' ),
	'section'     => 'multipurpose_ecommerce_slider',
	'type'        => 'select',
	'settings'    => 'multipurpose_ecommerce_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','multipurpose-ecommerce'),
      '0.1' =>  esc_attr('0.1','multipurpose-ecommerce'),
      '0.2' =>  esc_attr('0.2','multipurpose-ecommerce'),
      '0.3' =>  esc_attr('0.3','multipurpose-ecommerce'),
      '0.4' =>  esc_attr('0.4','multipurpose-ecommerce'),
      '0.5' =>  esc_attr('0.5','multipurpose-ecommerce'),
      '0.6' =>  esc_attr('0.6','multipurpose-ecommerce'),
      '0.7' =>  esc_attr('0.7','multipurpose-ecommerce'),
      '0.8' =>  esc_attr('0.8','multipurpose-ecommerce'),
      '0.9' =>  esc_attr('0.9','multipurpose-ecommerce')
	),
	));

	//Product
	$wp_customize->add_section('multipurpose_ecommerce_product',array(
		'title'	=> __('Product Section ','multipurpose-ecommerce'),
		'label'     => __('Add Products', 'multipurpose-ecommerce'),
		'description'	=> __('Here you can select page which you have created for Product section.','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_section_title',array(
		'label'	=> __('Section title','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_product',
		'setting'	=> 'multipurpose_ecommerce_section_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_Product_page' , array(
		'default'           => '',
		'sanitize_callback' => 'multipurpose_ecommerce_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'multipurpose_ecommerce_Product_page', array(
		'label'    => __( 'Select Page', 'multipurpose-ecommerce' ),
		'section'  => 'multipurpose_ecommerce_product',
		'type'     => 'dropdown-pages'
	));

	//no Result Setting
	$wp_customize->add_section('multipurpose_ecommerce_no_result_setting',array(
		'title'	=> __('No Results Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_no_search_result_title',array(
		'default'=> __('Nothing Found','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_no_search_result_title',array(
		'label'	=> __('No Search Results Title','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_no_search_result_content',array(
		'label'	=> __('No Search Results Content','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('multipurpose_ecommerce_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('multipurpose_ecommerce_mobile_media',array(
		'title'	=> __('Mobile Media Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_enable_disable_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Sidebar','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

	$wp_customize->add_setting('multipurpose_ecommerce_enable_disable_topbar',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_topbar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Top Header','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_enable_disable_fixed_header',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_fixed_header',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Fixed Header','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_enable_disable_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_slider',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_show_hide_slider_button',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_show_hide_slider_button',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Button','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_enable_disable_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_enable_disable_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Scroll To Top','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_mobile_media'
    ));

	//Blog Post
	$wp_customize->add_section('multipurpose_ecommerce_blog_post',array(
		'title'	=> __('Post Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','multipurpose-ecommerce'),
		'type'        => 'text',
		'settings'    => 'multipurpose_ecommerce_blog_post_metabox_seperator',
	) );

    $wp_customize->add_setting('multipurpose_ecommerce_blog_post_layout',array(
        'default' => __('Default','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_blog_post',
        'choices' => array(
            'Default' => __('Default','multipurpose-ecommerce'),
            'Left' => __('Left','multipurpose-ecommerce'),
            'Image and Content' => __('Image and Content','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_blog_description',array(
    	'default'   => __('Post Excerpt','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_blog_description',array(
        'type' => 'select',
        'label' => __('Post Description','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_blog_post',
        'choices' => array(
            'None' => __('None','multipurpose-ecommerce'),
            'Post Excerpt' => __('Post Excerpt','multipurpose-ecommerce'),
            'Post Content' => __('Post Content','multipurpose-ecommerce'),
        ),
	) );

    $wp_customize->add_setting( 'multipurpose_ecommerce_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'type'        => 'number',
		'settings'    => 'multipurpose_ecommerce_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'multipurpose_ecommerce_post_excerpt_suffix', array(
		'default'   => __('{...}','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_blog_post',
		'type'        => 'text',
		'settings'    => 'multipurpose_ecommerce_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_button_text',array(
		'default'=> __('Continue Reading....','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_button_text',array(
		'label'	=> __('Add Button Text','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_show_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_show_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Post Pagination','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_blog_post'
    ));

	$wp_customize->add_setting( 'multipurpose_ecommerce_pagination_option', array(
        'default'			=> __('Default','multipurpose-ecommerce'),
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control( 'multipurpose_ecommerce_pagination_option', array(
        'section' => 'multipurpose_ecommerce_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'multipurpose-ecommerce' ),
        'choices'		=> array(
            'Default'  => __( 'Default', 'multipurpose-ecommerce' ),
            'next-prev' => __( 'Next / Previous', 'multipurpose-ecommerce' ),
    )));

    // Single post setting
    $wp_customize->add_section('multipurpose_ecommerce_single_post_section',array(
		'title'	=> __('Single Post Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

    $wp_customize->add_setting('multipurpose_ecommerce_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_single_post_image',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Single Post Featured Image','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','multipurpose-ecommerce'),
		'type'        => 'text',
		'settings'    => 'multipurpose_ecommerce_seperator_metabox',
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_comment_form_heading',array(
       'default' => __('Leave a Reply','multipurpose-ecommerce'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_comment_form_heading',array(
       'type' => 'text',
       'label' => __('Comment Form Heading','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting('multipurpose_ecommerce_comment_button_text',array(
       'default' => __('Post Comment','multipurpose-ecommerce'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_comment_button_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Text','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_single_post_section'
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_number_range',
	));
	$wp_customize->add_control('multipurpose_ecommerce_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','multipurpose-ecommerce' ),
		'section' => 'multipurpose_ecommerce_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

    // related post setting
    $wp_customize->add_section('multipurpose_ecommerce_related_post_section',array(
		'title'	=> __('Related Post Settings','multipurpose-ecommerce'),
		'panel' => 'multipurpose_ecommerce_panel_id',
	));	

	$wp_customize->add_setting('multipurpose_ecommerce_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_ecommerce_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Related Post','multipurpose-ecommerce'),
       'section' => 'multipurpose_ecommerce_related_post_section',
    ));

	$wp_customize->add_setting( 'multipurpose_ecommerce_show_related_post', array(
        'default' => __(' By Categories', 'multipurpose-ecommerce'),
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_choices'
    ));
    $wp_customize->add_control( 'multipurpose_ecommerce_show_related_post', array(
        'section' => 'multipurpose_ecommerce_related_post_section',
        'type' => 'radio',
        'label' => __( 'Show Related Posts', 'multipurpose-ecommerce' ),
        'choices' => array(
            'categories'  => __(' By Categories', 'multipurpose-ecommerce'),
            'tags' => __( ' By Tags', 'multipurpose-ecommerce' ),
    )));

    $wp_customize->add_setting('multipurpose_ecommerce_change_related_post_title',array(
		'default'=> __('Related Posts','multipurpose-ecommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_related_post_section',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('multipurpose_ecommerce_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'multipurpose_ecommerce_footer' , array(
    	'title' => __( 'Footer Section', 'multipurpose-ecommerce' ),
		'priority'   => null,
		'panel' => 'multipurpose_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_footer_widget',array(
        'default'           => 4,
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices',
    ));
    $wp_customize->add_control('multipurpose_ecommerce_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'multipurpose-ecommerce'),
        'section'     => 'multipurpose_ecommerce_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'multipurpose-ecommerce'),
        'choices' => array(
            '1'     => __('One', 'multipurpose-ecommerce'),
            '2'     => __('Two', 'multipurpose-ecommerce'),
            '3'     => __('Three', 'multipurpose-ecommerce'),
            '4'     => __('Four', 'multipurpose-ecommerce')
        ),
    ));

    $wp_customize->add_setting( 'multipurpose_ecommerce_footer_widget_background', array(
	    'default' => '#eee',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_ecommerce_footer_widget_background', array(
  		'label' => __('Footer Widget Background','multipurpose-ecommerce'),
	    'section' => 'multipurpose_ecommerce_footer',
  	)));

  	$wp_customize->add_setting('multipurpose_ecommerce_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'multipurpose_ecommerce_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_footer'
	)));

	$wp_customize->add_setting('multipurpose_ecommerce_hide_show_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_ecommerce_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','multipurpose-ecommerce'),
      	'section' => 'multipurpose_ecommerce_footer',
	));

	$wp_customize->add_setting('multipurpose_ecommerce_footer_options',array(
        'default' => __('Right align','multipurpose-ecommerce'),
        'sanitize_callback' => 'multipurpose_ecommerce_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_ecommerce_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','multipurpose-ecommerce'),
        'description' => __('Here you can change the Footer layout. ','multipurpose-ecommerce'),
        'section' => 'multipurpose_ecommerce_footer',
        'choices' => array(
            'Left align' => __('Left align','multipurpose-ecommerce'),
            'Right align' => __('Right align','multipurpose-ecommerce'),
            'Center align' => __('Center align','multipurpose-ecommerce'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_number_range',
	));
	$wp_customize->add_control('multipurpose_ecommerce_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'multipurpose_ecommerce_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_ecommerce_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','multipurpose-ecommerce' ),
		'section'     => 'multipurpose_ecommerce_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('multipurpose_ecommerce_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_ecommerce_footer_text',array(
		'label'	=> __('Add Copyright Text','multipurpose-ecommerce'),
		'section'	=> 'multipurpose_ecommerce_footer',
		'setting'	=> 'multipurpose_ecommerce_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_ecommerce_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_ecommerce_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','multipurpose-ecommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_ecommerce_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_ecommerce_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'    => 'multipurpose_ecommerce_sanitize_float',
	));
	$wp_customize->add_control('multipurpose_ecommerce_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','multipurpose-ecommerce'),
		'section'=> 'multipurpose_ecommerce_footer',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'multipurpose_ecommerce_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'multipurpose_ecommerce_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'multipurpose_ecommerce_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Multipurpose Ecommerce 1.0
 * @see multipurpose-ecommerce_customize_register()
 *
 * @return void
 */
function multipurpose_ecommerce_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Multipurpose Ecommerce 1.0
 * @see multipurpose-ecommerce_customize_register()
 *
 * @return void
 */
function multipurpose_ecommerce_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function multipurpose_ecommerce_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Multipurpose_Ecommerce_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Multipurpose_Ecommerce_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Multipurpose_Ecommerce_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Multipurpose Ecommerce', 'multipurpose-ecommerce' ),
					'pro_text' => esc_html__( 'Go Pro', 'multipurpose-ecommerce' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/premium-multipurpose-ecommerce-wordpress-themes/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'multipurpose-ecommerce-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'multipurpose-ecommerce-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Multipurpose_Ecommerce_Customize::get_instance();