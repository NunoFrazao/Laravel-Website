<?php
/**
 * Template for displaying search forms in Multipurpose Ecommerce
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'multipurpose-ecommerce' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','multipurpose-ecommerce' ); ?>" value="<?php echo get_search_query() ?>" name="s">
	</label>
	<button type="submit" class="search-submit" role="tab"><?php echo esc_html_x( 'Search', 'submit button', 'multipurpose-ecommerce' ); ?></button>
</form>