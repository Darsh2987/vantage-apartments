<?php get_header(); ?>

<?php
  while(have_posts()) {
    the_post(); ?>
    <section class="single-post-container">
      <div class="single-post-content">
        <div class="single-post-heading-and-info">
          <h1 class="single-post-heading"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  <?php }
?>

<?php get_footer(); ?>