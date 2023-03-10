<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<header class="page-header" role="banner">
			<?php if ( have_posts() ) : ?>
				<h1 class="entry-title"><?php /* translators: %s: search term */
	                    printf( esc_html__( 'Results For: %s','multipurpose-ecommerce'), esc_html( get_search_query() ) ); ?></h1> 
			<?php else : ?>
				<h1 class="page-title"><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_title',__('Nothing Found','multipurpose-ecommerce')));?></h1>
			<?php endif; ?>
		</header>
		<div class="row">
			<?php
		    $multipurpose_ecommerce_layout_setting = get_theme_mod( 'multipurpose_ecommerce_layout_settings','Right Sidebar');
		    if($multipurpose_ecommerce_layout_setting == 'Left Sidebar'){ ?>
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format()  );

							endwhile;

						else : ?>

							<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
							<?php
								get_search_form();

						endif;
					?>
					<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php multipurpose_ecommerce_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
			<?php }else if($multipurpose_ecommerce_layout_setting == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format()  );

							endwhile;

						else : ?>

							<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
							<?php
								get_search_form();

						endif;
					?>
					<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php multipurpose_ecommerce_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else if($multipurpose_ecommerce_layout_setting == 'One Column'){ ?>
				<div class="content-area">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format()  );

							endwhile;

						else : ?>

							<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
							<?php
								get_search_form();

						endif;
					?>
					<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php multipurpose_ecommerce_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
			<?php }else if($multipurpose_ecommerce_layout_setting == 'Three Column'){ ?>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-6 col-md-6">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format()  );

							endwhile;

						else : ?>

							<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
							<?php
								get_search_form();

						endif;
					?>
					<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php multipurpose_ecommerce_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			<?php }else if($multipurpose_ecommerce_layout_setting == 'Four Column'){ ?>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format()  );

							endwhile;

						else : ?>

							<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
							<?php
								get_search_form();

						endif;
					?>
					<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php multipurpose_ecommerce_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-3'); ?>
				</div>
			<?php }else if($multipurpose_ecommerce_layout_setting == 'Grid Layout'){ ?>
				<div class="col-lg-8 col-md-8">
					<div class="row">
						<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/gridlayout' );

								endwhile;

							else : ?>

								<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
								<?php
									get_search_form();

							endif;
						?>
						<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
							<div class="navigation">
				                <?php multipurpose_ecommerce_pagination_type(); ?>
			       	 		</div>
			       	 	<?php } ?>
		       	 	</div>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			<?php } else {?>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format()  );

							endwhile;

						else : ?>

							<p><?php echo esc_html(get_theme_mod('multipurpose_ecommerce_no_search_result_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','multipurpose-ecommerce')));?></p>
							<?php
								get_search_form();

						endif;
					?>
					<?php if( get_theme_mod( 'multipurpose_ecommerce_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php multipurpose_ecommerce_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</main>

<?php get_footer();
