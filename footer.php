    <footer>
      <div class="footer-content">

        <nav class="nav footer-content-nav">
          <?php wp_nav_menu(array('menu' => 'main-nav')); ?>
          <?php wp_nav_menu(array('menu' => 'location-nav')); ?>
          <?php wp_nav_menu(array('menu' => 'privacy-policy')); ?>
        </nav>

        <div class="footer-content-wp-post">
          <?php 
            $footerPost = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => 'footer'
            ));

            while($footerPost->have_posts()) {
              $footerPost->the_post(); ?>
              <?php echo get_the_content(); ?>
            <?php }
          ?>
        </div>

      </div>

      <div class="copyright">
        <p>Copyright © <span id="fullyear"></span> <strong>Vantage Apartments</strong> All rights reserved</p>
      </div>
    </footer>
  
    <?php wp_footer(); ?>
  </body>
</html>