<?php get_header(); ?>

  <!-- FRONT PAGE IMAGE SLIDER -->
  <section class="image-slider-container">
    <div class="image-slider">
      <div class="image-slide image-slider-hampton"></div>
      <div class="image-slide image-slider-twickenham"></div>
      <div class="image-slide image-slider-kingston"></div>
      <div class="image-slide image-slider-teddington"></div>
      <div class="image-slide image-slider-feltham"></div>
      <div class="image-slide image-slider-hampton"></div>
    </div>
  </section>

  <!-- FRONT PAGE LOCATION POST GRID - get and display all the locations in a grid -->
  <section class="front-page-location-post-grid">

    <!-- Hampton Court Posts Grid Section -->
    <div class="front-page-hampton-court-post-container">
      <div class="front-page-hampton-court-post-card-wrapper">
        <?php 
          $hamptonPost = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'category_name' => 'hampton-court'
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

    <!-- Twickenham Posts Grid Section -->
    <!-- End of Twickenham Posts Grid Section -->

    <!-- Kingston Posts Grid Section -->
    <!-- End of Kingston Posts Grid Section -->

    <!-- Teddington Posts Grid Section -->
    <!-- End of Teddington Posts Grid Section -->

    <!-- Feltham Posts Grid Section -->
    <!-- End of Feltham Posts Grid Section -->
  </section>

  
<?php get_footer(); ?>