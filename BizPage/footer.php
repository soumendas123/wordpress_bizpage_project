 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'footer_right', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$footer_right = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
          <div class="col-lg-3 col-md-6 footer-info">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
<?php endwhile; ?>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
          <nav id="nav-menu-container">
	  
        
	   <?php wp_nav_menu( array( 'theme-location' => 'header-menu',
        		'menu_class'=>'nav-menu'

        ) ); ?>
	   
      </nav>
          </div>
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'footer_contact_us', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$footer_contact_us = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?>
           </p>

            <div class="social-links">
		<!--	<div><img src="<?php echo get_theme_mod('image_upload1'); ?>" alt=""></div> --->
              <a href="https://www.twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.google-plus.com/" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
<?php endwhile; ?>
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'Our_Newsletter', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$Our_Newsletter = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>
<?php endwhile; ?>
        </div>
      </div>
    </div>
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'Copyright', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$Copyright = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
    <div class="container">
      <div class="copyright">
       <?php the_content(); ?>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        --><?php the_title(); ?>
     
      </div>
    </div>
	<?php endwhile; ?>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo get_bloginfo('template_url');?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url');?>/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_bloginfo('template_url');?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo get_bloginfo('template_url');?>/js/main.js"></script>

</body>
</html>
