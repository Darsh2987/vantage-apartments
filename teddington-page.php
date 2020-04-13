<?php /* Template Name: Teddington */?>

<?php get_header(); ?>

  <svg class="svg-bottome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E7F1EF" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,58.7C480,85,600,139,720,181.3C840,224,960,256,1080,229.3C1200,203,1320,117,1380,74.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

  <svg class="svg-middle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(127,180,168, 0.1)" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,58.7C480,85,600,139,720,181.3C840,224,960,256,1080,229.3C1200,203,1320,117,1380,74.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

  <svg class="svg-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(127,180,168, 0.3)" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,58.7C480,85,600,139,720,181.3C840,224,960,256,1080,229.3C1200,203,1320,117,1380,74.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

  <!-- Teddington Location Landing Page -->
  <div class="location-page-container">

    <!-- Get and Display the Location Page Title and Content -->
    <?php
      while(have_posts()) {
        the_post(); ?>
        <div class="location-page-content">
          <h1 class="location-page-heading"><?php the_title(); ?></h1>
          <div class="location-page-main-info">
            <?php echo get_the_content();?>
          </div>
        </div>
      <?php }
    ?>
    <!-- End of Get and Display the Location Page Title and Content -->

    <!-- Get and Display the Location APARTMENTS into a Grid Layout -->
    <div class="location-page-post-card-container">
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
            <div class="location-page-post-card">
              <p class="location-page-post-card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <div class="location-page-post-card-excerpt"><?php the_excerpt(); ?></div>
              <p class="location-page-post-card-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
            </div>
        <?php }
      ?>
    </div>
    <!-- End of Get and Display the Location APARTMENTS into a Grid Layout -->

  </div>
  <!-- End of Teddington Location Landing Page -->

<?php get_footer(); ?>