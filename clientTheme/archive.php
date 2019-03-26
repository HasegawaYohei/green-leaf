
<?php
/**
 * The template for displaying archive pages.
 * @package GREEN LEAF
 */
get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">
  <div class="container-flud">
    <div class="row">
      <div class="col-12">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/event-header-sp.png" class="page-header-bg d-block d-sm-none">
        <img src="https://green-leaf.info/wp-content/uploads/2019/03/event-header.png" class="page-header-bg d-none d-sm-block">
      </div>
      <div class="col-12">
        <div class="page-header-text">イベント</div>
        <div class="page-header-text-underline"></div>
      </div>
    </div>
  </div>
	<div class="container-flud" id="content" tabindex="-1">
		<div class="row">
			<main class="col-12 mt-3" id="main">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop-templates/content', get_post_format() ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
      </main><!-- #main -->
    </div>
    <div class="row section-row mx-auto">
      <footer style="height: 40px;" class="mx-auto">
        <?php the_posts_pagination( array(
          'mid_size' => 2,
          'prev_text' => '&lt;',
          'next_text' => '&gt;',
        )); ?>
      </footer>
		</div><!-- #primary -->
  </div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>