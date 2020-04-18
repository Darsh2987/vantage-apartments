<?php get_header(); ?>

  <!-- FRONT PAGE IMAGE SLIDER -->
  <section class="image-slider-container">
    <?php echo do_shortcode('[metaslider id="345"]'); ?>
  </section>

  <div id="front-page-opener" class="front-page-opener-container">
    <?php 
      $openerPost = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => 1,
        'category_name' => 'front-page-opener'
      ))
    ?>
    <?php 
      while($openerPost->have_posts()) {
        $openerPost->the_post(); ?>
        <p class="front-page-opener"><?php echo get_the_content(); ?></p>
      <?php }
    ?>
  </div>

  <!-- Get and Display ALL APARTMENTS ACROSS THE SITE into a Grid Layout -->
  <div class="all-apartments-page-container">

    <div class="all-apartments-page-post-card-wrapper">
      <?php 
        $felthamPost = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'category_name' => 'all-apartments'
        ))
      ?>  
      <?php
        while($felthamPost->have_posts()) {
          $felthamPost->the_post(); ?>
            <div class="all-apartments-page-post-card">
              <h3 class="all-apartments-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="all-apartments-page-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
              <div class="all-apartments-page-post-card-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php }
      ?>
    </div>

  </div>
  <!-- Get and Display ALL APARTMENTS ACROSS THE SITE into a Grid Layout -->

<?php get_footer(); ?>

  