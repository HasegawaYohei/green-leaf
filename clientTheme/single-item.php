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
				<div class="row section-row">
					<div class="col-11 col-sm-7 mx-auto">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'loop-templates/content', 'item' ); ?>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="col-11 col-sm-5 mt-5 mt-sm-0 mx-auto">
						<?php
							$taxonomies = 'item-category'; // タクソノミー（カテゴリー）スラッグを指定
							$args = array(
									'hide_empty' => false, // 空のタームを出力しない場合はtrue
							);
							$terms = get_terms( $taxonomies , $args );
							foreach ($terms as $term) :?>
								<div class="sidebar">
									<?php
									$args = array(
										'post_type'     => 'item',
										'taxonomy'      => $taxonomies,
										'term'          => $term->slug,
										'posts_per_page'=> 5
									);
									$item_posts = get_posts( $args );
									if ( $item_posts ) {
										echo '<p class="sidebar-title">'.$term->name.'</p>';
									?>
									<ul>
										<?php
											foreach ( $item_posts as $post ) :
												setup_postdata( $post ); ?>
												<li class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endforeach;
									} ?>
								</div>
							<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
