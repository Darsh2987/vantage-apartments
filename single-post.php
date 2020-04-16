<?php get_header(); ?>

<svg class="svg-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(0, 183, 141, 0.1)" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,58.7C480,85,600,139,720,181.3C840,224,960,256,1080,229.3C1200,203,1320,117,1380,74.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

<svg class="svg-middle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(0, 183, 141, 0.2)" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,58.7C480,85,600,139,720,181.3C840,224,960,256,1080,229.3C1200,203,1320,117,1380,74.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

<svg class="svg-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(0, 183, 141, 0.3)" fill-opacity="1" d="M0,32L60,32C120,32,240,32,360,58.7C480,85,600,139,720,181.3C840,224,960,256,1080,229.3C1200,203,1320,117,1380,74.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

<?php
  while(have_posts()) {
    the_post(); ?>
    <section class="single-post-container">
      <div class="single-post-content">
        <div class="single-post-heading-and-info">
          <h1 class="single-post-heading"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  <?php }
?>

<?php get_footer(); ?>