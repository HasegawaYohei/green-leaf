<?php
/**
 * Template Name: 商品紹介ページテンプレート
 * @package GREEN LEAF
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">
  <div class="container-flud">
    <div class="row">
      <div class="col-12">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/product-all-header-sp.png" class="page-header-bg d-block d-sm-none">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/product-all-header.png" class="page-header-bg d-none d-sm-block">
      </div>
      <div class="col-12">
        <div class="page-header-text">商品紹介</div>
        <div class="page-header-text-underline"></div>
      </div>
    </div>
  </div>

  <div class="container-flud">
    <div class="row">
      <div class="col-12 mx-auto section-box">
        <div class="col-11 col-md-9 mx-auto lh-2">
          <div class="to-top" id="toTop"><span><i class="fas fa-angle-right"></i></span></div>
          <p>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile;?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-flud py-5 bg-white">
    <div class="row">
      <?php
        $taxonomies = 'item-category'; // タクソノミー（カテゴリー）スラッグを指定
        $args = array(
          'hide_empty' => false, // 空のタームを出力しない場合はtrue
        );
        $terms = get_terms( $taxonomies , $args );
        foreach ($terms as $term) :?>
          <div class="col-12 mx-auto section-box">
            <?php
            $args = array(
              'post_type'     => 'item',
              'taxonomy'      => $taxonomies,
              'term'          => $term->slug,
              'posts_per_page'=> 5
            );
            $item_posts = get_posts( $args );
            if ( $item_posts ) {
              echo '<p class="text-center color-orange section-title my-4 mg-lg-5">'.$term->name.'</p>';
            ?>
            <div class="row item-list">
              <?php for ( $i = 0; $i < 3; $i++) : ?>
              <?php $post = $item_posts[$i]; setup_postdata( $post ); ?>
              <?php if ($post): ?>
                <div class="col-12 col-sm-4 mt-3 mt-sm-0 text-center">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field('image'); ?>" alt="商品画像" class="img-fluid">
                    <p class="text-bold"><?php the_title(); ?></p>
                  </a>
                </div>
              <?php endif; ?>
              <?php endfor;
            } ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
