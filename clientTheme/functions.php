<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


function echo_blog_feed() {
  include_once( ABSPATH . WPINC . '/feed.php' );
  $rss = fetch_feed( 'http://rssblog.ameba.jp/michiru-herbgarden/rss20.xml' );
  $maxitems = 0;
  $feed = array();

  if ( ! is_wp_error( $rss ) ) {
      $maxitems = $rss->get_item_quantity( 5 );
      $rss_items = $rss->get_items( 0, $maxitems );
  }

  if ( $maxitems != 0 ) {
    foreach ( $rss_items as $item ) {
      $date = $item->get_date('Y/m/j');
      $link = esc_url($item->get_permalink());
      $title = $item->get_title();
      $feed[] = <<<EOD
        <p>
          <span class="color-green">$date</span>
          <a href="$link" class="color-orange ml-4" target="_blank">$title</a>
        </p>
EOD;

    }
  }

  return implode("", $feed);
}
add_shortcode('blog_feed', 'echo_blog_feed');