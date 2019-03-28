<?php
/**
 * The template for displaying all single posts.
 *
 * @package green-leaf
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="single-wrapper">
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
	<div class="container-flud">
		<div class="row">
			<div class="col-12 mx-auto section-box">
				<div class="row section-row">
					<div class="col-11 col-sm-7 mx-auto">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'loop-templates/content', 'event' ); ?>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="col-11 col-sm-5 mt-5 mt-sm-0 mx-auto">
						<?php
							$taxonomies = 'event-category'; // タクソノミー（カテゴリー）スラッグを指定
							$args = array(
								'hide_empty' => false, // 空のタームを出力しない場合はtrue
							);
							$terms = get_terms( $taxonomies , $args );
							foreach ($terms as $term) :?>
								<div class="sidebar">
									<?php
									$args = array(
										'post_type'     => 'event',
										'taxonomy'      => $taxonomies,
										'term'          => $term->slug,
										'posts_per_page'=> 5
									);
									$event_posts = get_posts( $args );
									if ( $event_posts ) {
										echo '<p class="sidebar-title">'.$term->name.'</p>';
									?>
									<ul>
										<?php
											foreach ( $event_posts as $post ) :
												setup_postdata( $post ); ?>
												<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endforeach;
									} ?>
								</div>
							<?php endforeach; ?>
							<?php
								$args = array(
									'post_type' => 'event',
									'posts_per_page' => 5,
								);
								$event_posts = get_posts($args); ?>
								<div class="sidebar">
									<p class="sidebar-title">最新記事</p>
									<ul>
										<?php foreach ( $event_posts as $post ) : setup_postdata( $post ); ?>
											<li class="my-3"><a href="<?php the_permalink(); ?>">【<?php the_field('date'); ?>】<?php the_title(); ?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
