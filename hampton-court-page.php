<?php /* Template Name: Hampton Court */?>

<?php get_header(); ?>

  <!-- Hampton Court Posts Grid Section -->
  <div class="front-page-hampton-court-post-container">
    <div class="front-page-hampton-court-post-card-wrapper">
      <?php 
        $hamptonPost = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'category_name' => 'hampton-court-apartments'
        ))
      ?>
      <?php
        while($hamptonPost->have_posts()) {
          $hamptonPost->the_post(); ?>
            <div class="front-page-hampton-court-post-card">
              <h1 class="front-page-hampton-court-heading">Hampton Court</h1>
              <p><a class="front-page-post-card-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <p><a class="front-page-hampton-court-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
            </div>
        <?php }
      ?>
    </div>
  </div>
  <!-- End of Hampton Court Posts Grid Section -->

<?php get_footer(); ?>