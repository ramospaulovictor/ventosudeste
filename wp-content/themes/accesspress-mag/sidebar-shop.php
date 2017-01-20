<?php
/**
 * Sidebar for woo-commerce shop and it's related pages
 *
 * @package AccessPress Mag
 */

if ( ! is_active_sidebar( 'shop' ) ) {
	return;
}
?>

<div id="secondary-shop-sidebar" class="widget-area" role="complementary">
	<div id="secondary">
		<?php dynamic_sidebar( 'shop' ); ?>
	</div>
</div><!-- #secondary -->