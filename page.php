
<?php get_header(); ?>


<div class="page-container">
  <?php
  while(have_posts()) {
      the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php }
  ?>
</div>

<?php get_footer(); ?>