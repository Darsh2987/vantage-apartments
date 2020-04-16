<?php /* Template Name: All Apartments */?>

<?php get_header(); ?>

  <div class="all-apartments-page-container">

    <!-- Get and Display the Location Page Title and Content -->
    <?php
      while(have_posts()) {
        the_post(); ?>
        <div class="all-apartments-page-content">
          <h1 class="all-apartments-page-heading"><?php the_title(); ?></h1>
        </div>
      <?php }
    ?>
    <!-- End of Get and Display the Location Page Title and Content -->

    <!-- Get and Display ALL APARTMENTS ACROSS THE SITE into a Grid Layout -->

    <!-- TWICKENHAM APARTEMTENTS -->
    <div class="all-apartments-page-post-card-wrapper">
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
            <div class="all-apartments-page-post-card">
              <h3 class="all-apartments-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="all-apartments-page-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
              <div class="all-apartments-page-post-card-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php }
      ?>
    </div>
    <!-- END OF TWICKENHAM APARTEMTENTS -->

    <!-- HAMPTON APARTEMTENTS -->
    <div class="all-apartments-page-post-card-wrapper">
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
            <div class="all-apartments-page-post-card">
              <h3 class="all-apartments-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="all-apartments-page-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
              <div class="all-apartments-page-post-card-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php }
      ?>
    </div>
    <!-- END OF HAMPTON APARTEMTENTS -->

    <!-- KINGSTON APARTEMTENTS -->
    <div class="all-apartments-page-post-card-wrapper">
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
            <div class="all-apartments-page-post-card">
              <h3 class="all-apartments-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="all-apartments-page-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
              <div class="all-apartments-page-post-card-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php }
      ?>
    </div>
    <!-- END OF KINGSTON APARTEMTENTS -->

    <!-- TEDDINGTON APARTEMTENTS -->
    <div class="all-apartments-page-post-card-wrapper">
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
            <div class="all-apartments-page-post-card">
              <h3 class="all-apartments-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="all-apartments-page-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
              <div class="all-apartments-page-post-card-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php }
      ?>
    </div>
    <!-- END OF TEDDINGTON APARTEMTENTS -->

    <!-- FELTHAM APARTEMTENTS -->
    <div class="all-apartments-page-post-card-wrapper">
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
            <div class="all-apartments-page-post-card">
              <h3 class="all-apartments-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="all-apartments-page-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
              <div class="all-apartments-page-post-card-excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php }
      ?>
    </div>
    <!-- END OF FELTHAM APARTEMTENTS -->


    <!-- Get and Display ALL APARTMENTS ACROSS THE SITE into a Grid Layout -->
  </div>

<?php get_footer(); ?>