<?php
/**
 * Template Name: プログラム一覧ページテンプレート
 * @package GREEN LEAF
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">
  <div class="container-flud">
    <div class="row">
      <div class="col-12">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/program-header-sp.png" class="page-header-bg d-block d-sm-none">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/program-header.png" class="page-header-bg d-none d-sm-block">
      </div>
      <div class="col-12">
        <div class="page-header-text">プログラム紹介</div>
        <div class="page-header-text-underline"></div>
      </div>
    </div>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'loop-templates/content', 'page' ); ?>
  <?php endwhile;?>
</div>

<?php get_footer(); ?>
