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

  <section class="front-page-post-grid">

    <!--MOBILE and TABLET VIEW --- FRONT PAGE LOCATIONS POST GRID - get and display all the LOCATIONS in a grid --- MOBILE and TABLET VIEW -->
    <div class="mobile-front-page-location-post-container">
      <div class="mobile-front-page-location-post-card-wrapper">
        <div class="mobile-front-page-location-post-grid">
          <?php 
            $hamptonPost = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'category_name' => 'locations'
            ))
          ?>
          <?php
            while($hamptonPost->have_posts()) {
              $hamptonPost->the_post(); ?>
                <div class="mobile-front-page-location-post-card">
                  <p><a class="mobile-front-page-location-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p><a class="mobile-front-page-hampton-location-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
                </div>
            <?php }
          ?>
        </div>
      </div>
    </div>
    <!--END OF MOBILE and TABLET VIEW --- FRONT PAGE LOCATIONS POST GRID - get and display all the LOCATIONS in a grid --- MOBILE and TABLET VIEW -->

    <!--DESKTOP VIEW --- FRONT PAGE APARTMENTS POST GRID - get and display all the APARTMENTS in a grid --- DESKTOP VIEW -->
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

    <!-- Twickenham Posts Grid Section -->
    <!-- End of Twickenham Posts Grid Section -->

    <!-- Kingston Posts Grid Section -->
    <!-- End of Kingston Posts Grid Section -->

    <!-- Teddington Posts Grid Section -->
    <!-- End of Teddington Posts Grid Section -->

    <!-- Feltham Posts Grid Section -->
    <!-- End of Feltham Posts Grid Section -->
    
    <!--END OF DESKTOP VIEW --- FRONT PAGE APARTMENTS POST GRID - get and display all the APARTMENTS in a grid --- DESKTOP VIEW -->
  </section>

  
<?php get_footer(); ?>