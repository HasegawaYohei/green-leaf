<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package GREEN LEAF
 */
$title = '【' . get_field('date') . '】' . get_field('event_name');
$datetime = get_field('date') . '　' . get_field('start_time') . '〜' . get_field('end_time');
?>

<article class="row section-row mx-auto mb-6" id="post-<?php the_ID(); ?>">
	<div class="col-12 col-md-5">
		<img src="<?php the_field('image'); ?>" class="img-fluid">
	</div>
	<div class="col-12 col-md-7">
		<p class="section-title-noline mb-0 mb-md-5"><?php echo $title;  ?></p>
		<p class="">
			日時 : <?php echo $datetime; ?><br>
			場所 : <?php the_field('place'); ?><br>
			費用 : <?php the_field('price'); ?>円（税込）<br>
			<a class="btn btn-custom outline-orange color-orange" href="<?php the_permalink(); ?>">more&nbsp;<i class="fas fa-angle-right"></i></a>
		</p>
	</div>
</article>
