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
  
  <div class="contact-front-page-background-container">
    <div class="contact-hero">
      <img src="<?php echo get_template_directory_uri(); ?>/images/hero-va-logo-transparent.png" alt="Vantage Apartments">
      <p class="address"><strong>Head Office:</strong> Portland Road Studios, 51 Portland Road, Kingston upon Thames KT1 2SH</p>
      <p class="contact-hero-phone-number"><i class="fas fa-phone-alt"></i>020 3773 4899</p>
      <p class="email-strapline">For further information or to place a booking request at any of our Greater London serviced apartments, please contact us by phone or email</p>
      <p class="contact-hero-email"><a href="mailto:res@vantageapartments.com"><i class="far fa-envelope"></i>res@vantageapartments.com</a>
    </div>
    <div class="contact-front-page-background background-zoom"></div>
  </div>

<?php get_footer(); ?>

  