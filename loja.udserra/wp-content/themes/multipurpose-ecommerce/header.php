<?php
/**
 * The header for our theme 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>
	<?php if(get_theme_mod('multipurpose_ecommerce_loader_setting',true)){ ?>
	    <div id="pre-loader">
	      	<div class='demo'>
		        <?php $multipurpose_ecommerce_theme_lay = get_theme_mod( 'multipurpose_ecommerce_preloader_types','Default');
		        if($multipurpose_ecommerce_theme_lay == 'Default'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($multipurpose_ecommerce_theme_lay == 'Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php }elseif($multipurpose_ecommerce_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
						<div class='inner'></div>
					</div>
					<div class='circle'>
						<div class='inner'></div>
					</div>
		        <?php } ?>
	      	</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'multipurpose-ecommerce' ); ?></a>
	<div id="page" class="site">
	<?php 
	if( get_theme_mod('multipurpose_ecommerce_show_hide_topbar',false) != '' || get_theme_mod('multipurpose_ecommerce_enable_disable_topbar',false) != '') {
		if( get_theme_mod( 'multipurpose_ecommerce_shipping') != '' || get_theme_mod( 'multipurpose_ecommerce_money' )!= '' || get_theme_mod( 'multipurpose_ecommerce_support')!= '') { ?>
			<div class="topbar-box">
				<div class="container">
					<div class="row">
						<div class="topbar col-lg-4 col-md-4">
				      		<?php if( get_theme_mod( 'multipurpose_ecommerce_shipping','' ) != '') { ?>
					        	<i class="fas fa-shopping-cart"></i><span><?php echo esc_html( get_theme_mod('multipurpose_ecommerce_shipping')); ?></span>
				       		<?php } ?>
					    </div>
					    <div class="topbar col-lg-4 col-md-4">
				      		<?php if( get_theme_mod( 'multipurpose_ecommerce_money','' ) != '') { ?>
					        	<i class="fab fa-cc-mastercard"></i><span><?php echo esc_html( get_theme_mod('multipurpose_ecommerce_money') ); ?></span>
				      		<?php } ?>
					    </div>
					    <div class="topbar col-lg-4 col-md-4">
				      		<?php if( get_theme_mod( 'multipurpose_ecommerce_support','' ) != '') { ?>
					        	<i class="far fa-clock"></i><span class="location"><?php echo esc_html( get_theme_mod('multipurpose_ecommerce_support') ); ?></span>
			      			<?php } ?>
					    </div>
					</div>
				</div>
			</div>
		<?php }
	}?>
	
	<header id="masthead" class="site-header" role="banner">		
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
	</header>
	
	<div class="site-content-contain">
		<div id="content" class="site-content">
