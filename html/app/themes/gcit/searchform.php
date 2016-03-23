<?php
/**
 * The template for displaying search forms in Careers & Devleopment
 *
 * @package Careers & Development
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="search-text"><?php _ex( 'Search for:', 'label', 'careers-development' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentythirteen' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="button" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentythirteen' ); ?>">
</form>
