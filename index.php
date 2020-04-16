<?php get_header(); ?>

  <!-- FRONT PAGE IMAGE SLIDER -->
  <section class="image-slider-container">
  <?php echo do_shortcode('[metaslider id="270"]'); ?>
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
                  <a class="mobile-front-page-location-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <h2 class="mobile-front-page-location-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="mobile-location-post-card-info"><?php echo get_the_content(); ?></div>
                </div>
            <?php }
          ?>
        </div>
      </div>
    </div>
    <!--END OF MOBILE and TABLET VIEW --- FRONT PAGE LOCATIONS POST GRID - get and display all the LOCATIONS in a grid --- MOBILE and TABLET VIEW -->

    <!--DESKTOP VIEW --- FRONT PAGE APARTMENTS POST GRID - get and display all the APARTMENTS in a grid --- DESKTOP VIEW -->
    <div class="front-page-apartments-post-container">

      <!-- Twickenham Posts Grid Section -->
      <div class="front-page-apartments-post-card-container twickenham">
        <div class="front-page-apartments-post-card-heading-links">
          <p class="front-page-apartments-heading">Twickenham Apartments</p>
          <?php wp_nav_menu( array( 'menu' => 'twickenham' ) ); ?>
        </div>
        <div class="front-page-apartments-post-card-wrapper">
          <?php 
            $twickenhamPost = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'category_name' => 'twickenham-apartments'
            ))
          ?>
          <?php
            while($twickenhamPost->have_posts()) {
              $twickenhamPost->the_post(); ?>
                <div class="front-page-apartments-post-card">
                  <p class="front-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p class="front-page-apartments-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
                  <div class="front-page-post-card-excerpt"><?php the_excerpt(); ?></div>
                </div>
            <?php }
          ?>
        </div>
      </div>
      <!-- End of Twickenham Posts Grid Section -->

      <!-- Hampton Court Posts Grid Section -->
      <div class="front-page-apartments-post-card-container hampton-court">
        <div class="front-page-apartments-post-card-heading-links">
          <p class="front-page-apartments-heading">Hampton Court Apartments</p>
          <?php wp_nav_menu( array( 'menu' => 'hampton-court' ) ); ?>
        </div>
        <div class="front-page-apartments-post-card-wrapper">
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
                <div class="front-page-apartments-post-card">
                  <p class="front-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p class="front-page-apartments-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
                  <div class="front-page-post-card-excerpt"><?php the_excerpt(); ?></div>
                </div>
            <?php }
          ?>
        </div>
      </div>
      <!-- End of Hampton Court Posts Grid Section -->

      <!-- Kingston Posts Grid Section -->
      <div class="front-page-apartments-post-card-container kingston">
        <div class="front-page-apartments-post-card-heading-links">
          <p class="front-page-apartments-heading">Kingston Apartments</p>
          <?php wp_nav_menu( array( 'menu' => 'kingston' ) ); ?>
        </div>
        <div class="front-page-apartments-post-card-wrapper">
          <?php 
            $kingstonPost = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'category_name' => 'kingston-apartments'
            ))
          ?>
          <?php
            while($kingstonPost->have_posts()) {
              $kingstonPost->the_post(); ?>
                <div class="front-page-apartments-post-card">
                  <p class="front-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p class="front-page-apartments-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
                  <div class="front-page-post-card-excerpt"><?php the_excerpt(); ?></div>
                </div>
            <?php }
          ?>
        </div>
      </div>
      <!-- End of Kingston Posts Grid Section -->

      <!-- Teddington Posts Grid Section -->
      <div class="front-page-apartments-post-card-container teddington">
        <div class="front-page-apartments-post-card-heading-links">
          <p class="front-page-apartments-heading">Teddington Apartments</p>
          <?php wp_nav_menu( array( 'menu' => 'teddington' ) ); ?>
        </div>
        <div class="front-page-apartments-post-card-wrapper">
          <?php 
            $teddingtonPost = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'category_name' => 'teddington-apartments'
            ))
          ?>
          <?php
            while($teddingtonPost->have_posts()) {
              $teddingtonPost->the_post(); ?>
                <div class="front-page-apartments-post-card">
                  <p class="front-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p class="front-page-apartments-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
                  <div class="front-page-post-card-excerpt"><?php the_excerpt(); ?></div>
                </div>
            <?php }
          ?>
        </div>
      </div>
      <!-- End of Teddington Posts Grid Section -->

      <!-- Feltham Posts Grid Section -->
      <div class="front-page-apartments-post-card-container feltham">
        <div class="front-page-apartments-post-card-heading-links">
          <p class="front-page-apartments-heading">Feltham Apartments</p>
          <?php wp_nav_menu( array( 'menu' => 'feltham' ) ); ?>
        </div>
        <div class="front-page-apartments-post-card-wrapper">
          <?php 
            $felthamPost = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'category_name' => 'feltham-apartments'
            ))
          ?>
          <?php
            while($felthamPost->have_posts()) {
              $felthamPost->the_post(); ?>
                <div class="front-page-apartments-post-card">
                  <p class="front-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p class="front-page-apartments-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
                  <div class="front-page-post-card-excerpt"><?php the_excerpt(); ?></div>
                </div>
            <?php }
          ?>
        </div>
      </div>
      <!-- End of Feltham Posts Grid Section -->
    </div>
    <!--END OF DESKTOP VIEW --- FRONT PAGE APARTMENTS POST GRID - get and display all the APARTMENTS in a grid --- DESKTOP VIEW -->
  </section>

  
<?php get_footer(); ?>