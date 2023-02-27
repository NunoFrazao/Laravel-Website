<?php
/**
 * Displays header site branding
 */

?>

<div class="site-branding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="logo">
				    <?php if ( has_custom_logo() ) : ?>
		              <div class="site-logo"><?php the_custom_logo(); ?></div>
		            <?php endif; ?>      
		              <?php $blog_info = get_bloginfo( 'name' ); ?>
		              <?php if ( ! empty( $blog_info ) ) : ?>
		              	<?php if( get_theme_mod('multipurpose_ecommerce_show_site_title',true) != ''){ ?>
			                <?php if ( is_front_page() && is_home() ) : ?>
			                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                <?php else : ?>
			                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			                <?php endif; ?>
			            <?php }?>
					<?php endif; ?>
					<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
					?>
					<?php if( get_theme_mod('multipurpose_ecommerce_show_tagline',true) != ''){ ?>
						<p class="site-description">
							<?php echo esc_html($description); ?>
						</p>
						<?php }?>
		            <?php endif; ?>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 <?php if( get_theme_mod( 'multipurpose_ecommerce_fixed_header', false) != '' || get_theme_mod( 'multipurpose_ecommerce_enable_disable_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<div class="navigation-top">
						<div class="wrap">
							<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-1 col-md-1">
				<div class="search-body">
					<button type="button" data-toggle="modal" data-target="#myModal"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_search_icon','fas fa-search')); ?>"></i></button>
				</div>
			</div>
			<div class="col-lg-1 col-md-1">
				<div class="cart_icon">
	                <?php if(class_exists('woocommerce')){ ?>
	                    <li class="cart_box">
                     		<span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
	                    </li> 
	                <?php } ?>
	                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>"><img src="<?php echo esc_html(get_template_directory_uri().'/assets/images/cart.png'); ?>" alt="<?php esc_attr_e( 'Cart','multipurpose-ecommerce' ); ?>"/><span class="screen-reader-text"><?php esc_html_e( 'Cart','multipurpose-ecommerce' ); ?>"/></span></a>
                </div>
			</div>
		</div>
		<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-body">
					<div class="searchform-inner">
						<?php get_search_form(); ?>
					</div>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
			</div>
	    </div>
	</div>
</div>