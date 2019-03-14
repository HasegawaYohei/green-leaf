<?php
/**
 * Template Name: お問い合わせページテンプレート
 * @package GREEN LEAF
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">
  <div class="container-flud">
    <div class="row">
      <div class="col-12">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/contact-header-sp.png" class="page-header-bg d-block d-sm-none">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/contact-header.png" class="page-header-bg d-none d-sm-block">
      </div>
      <div class="col-12">
        <div class="page-header-text"><?php the_title(); ?></div>
        <div class="page-header-text-underline"></div>
      </div>
    </div>
  </div>

  <div class="container-flud">
    <div class="row">
      <div class="col-11 mx-auto section-box">
          <div class="row">
            <div class="to-top" id="toTop"><span><i class="fas fa-angle-right"></i></span></div>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile;?>
          </div>
        </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>
