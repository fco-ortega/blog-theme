<?php get_header(); ?>

<div class="home-slider">
	<?php $sliders = get_field('group_slider'); ?>
	<?php if ($sliders) : ?>
		<?php foreach ($sliders as $slider) : ?>
			<?php
			$image = $slider['image'];
			$caption = $slider['caption'];
			$link = $slider['link'];
			?>
			<div class="card border-0 rounded-0 home-slider-card">
				<img class="card-img border-0 rounded-0 home-slider-img" src="<?php echo $image; ?>">
				<div class="card-img-overlay home-slider-overlay">
					<p class="card-text home-slider-text"><?php echo $caption; ?></p>
					<a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_attr($link['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>

<article class="content px-3 py-5 p-md-5">
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			the_content();
		}
	}
	?>
</article>


<?php get_footer(); ?>