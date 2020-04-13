<?php /* Template Name: Hampton Court */?>

<?php get_header(); ?>

  <!-- Hampton Court Posts Grid Section -->
  <div class="hampton-court-container">
    <h1 class="hampton-court-heading"><?php the_title(); ?></h1>
    <div class="hampton-court-page-main-info">
      <?php echo get_the_content(); ?>
    </div>
    <div class="hampton-court-post-card-container">
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
            <div class="hampton-court-post-card">
              <p><a class="hampton-court-post-card-post-card-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <p><a class="hampton-court-post-card-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
            </div>
        <?php }
      ?>
    </div>
  </div>
  <!-- End of Hampton Court Posts Grid Section -->

<?php get_footer(); ?>