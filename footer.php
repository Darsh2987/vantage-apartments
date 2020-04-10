    <footer>
      <div class="footer-content">

        <nav class="nav footer-content-nav">
          <ul>
          <li>Home</li>
          <li>Locations</li>
          <li>News</li>
          <li>FAQs</li>
          <li>Contact</li>
          </br>
          <li>Privacy Policy</li>
          </ul>
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