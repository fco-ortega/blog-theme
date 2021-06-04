<?php get_header(); ?>

<?php $sliders = get_field('group_slider'); ?>
<?php if ($sliders) : ?>
	<div id="carouselHome" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php $first = true; ?>
			<?php foreach ($sliders as $slider) : ?>
				<?php
				$image = $slider['image'];
				$caption = $slider['caption'];
				$link = $slider['link'];
				?>
				<div class="carousel-item <?php if ($first) echo "active"; ?>">
					<img class="d-block" src="<?php echo $image; ?>">
					<div class="carousel-caption">
						<p><?php echo $caption; ?></p>
						<a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_attr($link['title']); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<?php $first = false; ?>
			<?php endforeach; ?>
		</div>
		<a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<?php endif; ?>

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