<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article class="lh-2" id="post-<?php the_ID(); ?>">
  <header class="row">
		<div class="col-11 col-md-12 mx-auto">
			<p class="section-title-noline underline"><?php the_field('event_name'); ?></p>
		</div>
	</header>
	<main class="row">
		<div class="col-11 col-sm-12 mx-auto">
			<div class="row">
				<div class="col-12">日程<span class="colon"></span><?php the_field('date'); ?></div>
			</div>
			<div class="row">
				<div class="col-12">時間<span class="colon"></span><?php the_field('start_time'); ?> 〜 <?php the_field('end_time'); ?></div>
			</div>
			<div class="row">
				<div class="col-12">場所<span class="colon"></span><?php the_field('place'); ?></div>
			</div>
			<div class="row">
				<div class="col-12">費用<span class="colon"></span><?php the_field('price'); ?>円 (税込)</div>
			</div>
			<div class="row d-none my-2">
				<div class="col-12"><p class="text-center color-white py-2" style="background: gray">当イベントは終了しました</p></div>
			</div>
			<div class="row mt-3">
				<div class="col-12 col-sm-12 mx-auto">
					<img src="<?php the_field('image'); ?>" alt="イベントイメージ画像" class="img-fluid" style="width: 100%">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-12 col-sm-12 mx-auto">
					<p class="section-title-noline"><?php the_field('description_title'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 mx-auto">
					<p><?php the_field('description'); ?></p>
				</div>
			</div>
		</div>
	</main>
	<div class="mt-4">
		<p class="text-center">
			<a class="btn btn-large outline-green color-green mt-3">イベント申し込みへ&nbsp;<i class="fas fa-angle-down"></i></a>
		</p>
	</div>
</article>
