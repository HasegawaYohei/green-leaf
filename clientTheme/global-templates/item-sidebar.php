<?php
/**
 * Right sidebar check.
 *
 * @package GREEN LEAF
 */
?>

<?php $sidebar_pos = get_theme_mod( 'understrap_sidebar_position' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

  <?php get_sidebar( 'item' ); ?>

<?php endif; ?>
