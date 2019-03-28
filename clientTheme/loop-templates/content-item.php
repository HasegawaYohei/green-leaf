<?php
/**
 * Single post partial template.
 *
 * @package GREEN LEAF
 */

?>
<article id="post-<?php the_ID(); ?>">
	<main class="row">
		<div class="col-11 col-sm-12 mx-auto">
			<div class="row">
				<div class="col-11 col-sm-12 mx-auto">
					<img src="<?php the_field('image'); ?>" alt="商品画像" class="img-fluid" style="width: 100%">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-11 col-md-12 mx-auto">
					<p class="section-title-noline"><?php the_field('item_name'); ?></p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-11 col-sm-12 mx-auto">
					<p class="text-bold"><?php the_field('description_title'); ?></p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-11 col-sm-12 lh-2 mx-auto">
					<p><?php the_field('description1'); ?></p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-11 col-sm-12 item-box lh-2 mx-auto">
					<p><?php the_field('description2'); ?></p>
				</div>
			</div>
		</div>
	</main>
	<div class="mt-4">
		<p class="text-center">
			<a class="btn btn-large outline-green color-green mt-3" href="<?php the_field(''); ?>">オンラインショップへ</a>
		</p>
	</div>
	<div class="mt-4">
	<?php
		$current_tags = get_the_tags();
		if ( $current_tags ) :
			foreach ( $current_tags as $tag ) {
				$current_tag_list[] = $tag->term_id;
			}
			$args = array(
				'tag__in'        => $current_tag_list,
				'post__not_in'   => array( $post->ID ),
				'posts_per_page' => 5,
			);
			$related_posts = new WP_Query( $args );
			if( $related_posts->have_posts() ) :
	?>
		<h3>関連商品</h3>
		<ul id="related-item">
			<?php
				while ( $related_posts->have_posts() ) :
					$related_posts->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
		</ul>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	</div>
	<div class="mt-4">
		<p class="text-center">
			<a class="btn btn-wide outline-orange color-orange mt-3" href="https://green-leaf.info/tea/">商品紹介 一覧へ&nbsp;<i class="fas fa-angle-right"></i></a>
		</p>
	</div>
</article>
