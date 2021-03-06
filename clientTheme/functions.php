<?php
/**
 * Understrap functions and definitions
 *
 * @package GREEN LEAF
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


class My_Widget extends WP_Widget{
	/**
	 * Widgetを登録する
	 */
	function __construct() {
		parent::__construct(
			'by_month', // Base ID
			'月別', // Name
			array( 'description' => '月別のイベント', ) // Args
		);
	}

	/**
	 * 表側の Widget を出力する
	 *
	 * @param array $args      'register_sidebar'で設定した「before_title, after_title, before_widget, after_widget」が入る
	 * @param array $instance  Widgetの設定項目
	 */
	public function widget( $args, $instance ) {
    $email = $instance['email'];
		echo $args['before_widget'];
    echo "<p>Email: ${email}</p>";
    echo $args['after_widget'];
	}

  /** Widget管理画面を出力する
   *
   * @param array $instance 設定項目
   * @return string|void
   */
  public function form( $instance ){
      $email = $instance['email'];
      $email_name = $this->get_field_name('email');
      $email_id = $this->get_field_id('email');
      ?>
      <p>
          <label for="<?php echo $email_id; ?>">Email:</label>
          <input class="widefat" id="<?php echo $email_id; ?>" name="<?php echo $email_name; ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
      </p>
      <?php
  }

  /** 新しい設定データが適切なデータかどうかをチェックする。
   * 必ず$instanceを返す。さもなければ設定データは保存（更新）されない。
   *
   * @param array $new_instance  form()から入力された新しい設定データ
   * @param array $old_instance  前回の設定データ
   * @return array               保存（更新）する設定データ。falseを返すと更新しない。
   */
  function update($new_instance, $old_instance) {
      if(!filter_var($new_instance['email'],FILTER_VALIDATE_EMAIL)){
          return false;
      }
      return $new_instance;
  }
}

add_action( 'widgets_init', function () {
	register_widget( 'My_Widget' );  //WidgetをWordPressに登録する
} );

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'event', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => 'イベント', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'イベント',    // カスタム投稿の識別名
    ],
    'supports' => array(
      'title',
    ),
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => true, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
  ]);
  register_post_type( 'item', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => '商品', // 管理画面上で表示する投稿タイプ名
      'singular_name' => '商品',    // カスタム投稿の識別名
    ],
    'supports' => array(
      'title',
    ),
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => true, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
  ]);

  register_taxonomy(
    'item-category',  /* タクソノミーのslug */
    'item',           /* 属する投稿タイプ */
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => '商品カテゴリ',
      'singular_label' => '商品カテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );

  register_taxonomy(
    'event-category',  /* タクソノミーのslug */
    'event',           /* 属する投稿タイプ */
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'イベントカテゴリ',
      'singular_label' => 'イベントカテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );
}

function override_widget_categories() {
  class WP_Widget_Categories_Taxonomy extends WP_Widget_Categories {
      private $taxonomy = 'category';

      public function widget( $args, $instance ) {
          if ( !empty( $instance['taxonomy'] ) ) {
              $this->taxonomy = $instance['taxonomy'];
          }

          add_filter( 'widget_categories_dropdown_args', array( $this, 'add_taxonomy_dropdown_args' ), 10 );
          add_filter( 'widget_categories_args', array( $this, 'add_taxonomy_dropdown_args' ), 10 );
          parent::widget( $args, $instance );
      }

      public function update( $new_instance, $old_instance ) {
          $instance = parent::update( $new_instance, $old_instance );
          $taxonomies = $this->get_taxonomies();
          $instance['taxonomy'] = 'category';
          if ( in_array( $new_instance['taxonomy'], $taxonomies ) ) {
              $instance['taxonomy'] = $new_instance['taxonomy'];
          }
          return $instance;
      }

      public function form( $instance ) {
          parent::form( $instance );
          $taxonomy = 'category';
          if ( !empty( $instance['taxonomy'] ) ) {
              $taxonomy = $instance['taxonomy'];
          }
          $taxonomies = $this->get_taxonomies();
          ?>
          <p>
              <label for="<?php echo $this->get_field_id( 'taxonomy' ); ?>"><?php _e( 'Taxonomy:' ); ?></label><br />
              <select id="<?php echo $this->get_field_id( 'taxonomy' ); ?>" name="<?php echo $this->get_field_name( 'taxonomy' ); ?>">
                  <?php foreach ( $taxonomies as $value ) : ?>
                  <option value="<?php echo esc_attr( $value ); ?>"<?php selected( $taxonomy, $value ); ?>><?php echo esc_attr( $value ); ?></option>
                  <?php endforeach; ?>
              </select>
          </p>
          <?php
      }

      public function add_taxonomy_dropdown_args( $cat_args ) {
          $cat_args['taxonomy'] = $this->taxonomy;
          return $cat_args;
      }

      private function get_taxonomies() {
          $taxonomies = get_taxonomies( array(
              'public' => true,
          ) );
          return $taxonomies;
      }
  }
  unregister_widget( 'WP_Widget_Categories' );
  register_widget( 'WP_Widget_Categories_Taxonomy' );
}
add_action( 'widgets_init', 'override_widget_categories' );

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
        <p class="py-1">
          <span class="color-green">$date</span>
          <a href="$link" class="color-orange ml-4" target="_blank">$title</a>
        </p>
EOD;

    }
  }

  return implode("", $feed);
}
add_shortcode('blog_feed', 'echo_blog_feed');

function echo_latest_event() {
  $args = array(
    'post_type'     => 'event',
    'posts_per_page'=> 5
  );
  $posts = get_posts( $args );
  $row = array();
  for ($i = 0; $i < 3; $i++) {
    global $post;
    $post = $posts[$i];
    setup_postdata($post);
    $image = get_field('image');
    $date = get_field('date');
    $title = '【' . $date . '】' . get_field('event_name');
    $time = get_field('start_time') . '〜' . get_field('end_time');
    $place = get_field('place');
    $price = get_field('price') . '円 (税込)';
    $link = get_permalink();

    $row[] = <<<EOD
    <div class="row mt-5">
      <div class="col-9 col-md-5 text-left text-sm-right ml-auto mr-auto mr-sm-0">
        <img src="$image" class="img-fluid">
      </div>
      <div class="col-9 mx-auto mx-lg-0 col-md-5 col-lg-6 event-box ml-sm-0">
        <p class="box-title mt-4 mt-sm-0">$title</p>
        <p class="mt-2">日程:&nbsp;$date</p>
        <p class="mt-2">時間:&nbsp;$time</p>
        <p class="mt-2">場所:&nbsp;$place</p>
        <p class="mt-2">費用:&nbsp;$price</p>
        <p class="text-center text-sm-left"><a href="$link" class="btn btn-custom outline-orange color-orange">more&nbsp;<i class="fas fa-angle-right"></i></a></p>
      </div>
    </div>
EOD;

  }

  return implode("", $row);
}
add_shortcode('latest_event', 'echo_latest_event');