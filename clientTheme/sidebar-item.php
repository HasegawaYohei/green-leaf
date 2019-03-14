<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package green-leaf
 */

if ( ! is_active_sidebar( 'item-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php dynamic_sidebar( 'item-sidebar' ); ?>

</div><!-- #secondary -->
