<?php get_header(); ?>

<article class="content px-3 py-5 p-md-5">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('template-parts/content', 'archive');
    }
  } else {
  ?>
    <h1>No se ha encontrado la página</h1>
    <?php get_search_form(); ?>
  <?php
  }
  ?>
</article>

<?php get_footer(); ?>