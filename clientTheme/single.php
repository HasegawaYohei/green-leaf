<?php
/**
 * The template for displaying all single posts.
 *
 * @package GREEN LEAF
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="container-flud">
		<div class="row">
			<div class="col-12 mx-auto section-box">
				<div class="row section-row">
					<div class="col-11 col-sm-6 mx-auto">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'loop-templates/content', 'event' ); ?>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="col-11 col-sm-5 mx-auto">
						<?php get_template_part( 'global-templates/event-sidebar' ); ?>
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
