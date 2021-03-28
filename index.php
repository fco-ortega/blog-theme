<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">

	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			get_template_part('template-parts/content', 'archive');
		}
	}
	?>

	<nav class="blog-nav nav nav-justified my-5">
		<?php previous_posts_link('<i class="fas fa-long-arrow-alt-left"></i> Anterior'); ?>
		<?php next_posts_link('Siguiente <i class="fas fa-long-arrow-alt-right"></i>'); ?>
	</nav>
	
</article>

<?php get_footer(); ?>