
<?php get_header();?>
  <!--==========================
    Intro Section
  ============================-->
	
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
		  <?php
wp_reset_query();
$i=1;
$args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$homeslider = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div class="carousel-item <?php if($i==1) echo 'active'; ?>">

          
            <div class="carousel-background"><img src="<?php echo $homeslider; ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php the_title();?></h2>
                <p><?php the_content() ?></p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

         <?php 
	 $i++;
	endwhile; ?>

          

          

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo $homeslider; ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php the_title();?></h2>
                <p><?php the_content() ?></p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
	
  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->

    <section id="featured-services">
      <div class="container">
        <div class="row">
	<?php
	$i=1;
$args = array( 'post_type' => 'xyz', 'posts_per_page' => 10 );
 $emo=array('ion-ios-bookmarks-outline','ion-ios-stopwatch-outline','ion-ios-heart-outline');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
          <div class="col-lg-4 box ">
            
			 <i class="<?php echo $emo[$i-1]; ?>"></i>
            <h4 class="title"><a href=""><?php the_title(); ?></a></h4>
            <p class="description"><?php the_content(); ?></p>
          </div>
  <?php 
  $i++;
  endwhile; ?>

   <!---       <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href=""><?php the_title(); ?></a></h4>
            <p class="description"><?php the_content(); ?></p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href=""><?php the_title(); ?></a></h4>
            <p class="description"><?php the_content(); ?></p>
          </div>  --->

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
											<?php
wp_reset_query();
$args5 = array( 'post_type' => 'aboutus', 'posts_per_page' => 10 );
$loop5 = new WP_Query( $args5 );
while ( $loop5->have_posts() ) : $loop5->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </header>
<?php endwhile; ?>
        <div class="row about-cols">
					<?php
					$i=1;
wp_reset_query();
$args2 = array( 'post_type' => 'topFeature', 'posts_per_page' => 15 );
$emo=array('ion-ios-speedometer-outline','ion-ios-list-outline','ion-ios-eye-outline');
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$topFeature = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo $topFeature; ?>" alt="" class="img-fluid">
                <div class="icon"><i class="<?php echo $emo[$i-1]; ?>"></i></div>
              </div>
              <h2 class="title"><a href="#"><?php the_title(); ?></a></h2>
              <p><?php the_content(); ?>
                
              </p>
            </div>
          </div>
<?php
  $i++;
 endwhile; ?>
       

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
			<?php
wp_reset_query();
$args = array( 'post_type' => 'ourservices', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$ourserviceimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
        <header class="section-header wow fadeInUp">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </header>
<?php endwhile; ?>
        <div class="row">
																	<?php 
																	$i=1;
wp_reset_query();
$args3 = array( 'post_type' => 'aboutcompany', 'posts_per_page' => 11 );
  $emo=array('ion-ios-analytics-outline','ion-ios-bookmarks-outline','ion-ios-paper-outline','ion-ios-speedometer-outline','ion-ios-barcode-outline','ion-ios-people-outline');
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$aboutcompany = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="<?php echo $emo[$i-1]; ?>"></i></div>
            <h4 class="title"><a href=""><?php the_title(); ?></a></h4>
            <p class="description"><?php the_content(); ?></p>
          </div>
		  <?php
$i++;
		  endwhile; ?>
         

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'Call_Action', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$Call_Action = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
      <div class="container text-center">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
	  <?php endwhile; ?>
    </section><!-- #call-to-action -->

    <!--=======================\===f
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">
																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'Our_Skills', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$Our_Skills = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
        <header class="section-header">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </header>
  <?php endwhile; ?>
        <div class="skills-content">

             <?php
          wp_reset_query();
          $i=1;
          $emo=array('bg-success','bg-info','bg-warning','bg-danger');
          $args = array( 'post_type' => 'skill_con_biz', 'posts_per_page' => 10 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          $skill_con_biz = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $slimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $p=get_the_content();
          ?>

          <div class="progress">
            <div class="progress-bar <?php echo $emo[$i-1]; ?>" role="progressbar" aria-valuenow="<?php echo $p;?>" aria-valuemin="0" aria-valuemax="<?php echo $p; ?>">
              <span class="skill"><?php the_title(); ?><i class="val"><?php echo $p; ?>%</i></span>
            </div>
          </div>
             <?php
              $i++;
              endwhile; ?>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">
																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'Facts', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$Facts = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
        <header class="section-header">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </header>
  <?php endwhile; ?>
        <div class="row counters">
		   <?php
          wp_reset_query();
          $args = array( 'post_type' => 'fact_count', 'posts_per_page' => 10 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          $fact_count = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $slimg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
         
          ?>

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php the_content();?></span>
            <p><?php the_title();?></p>
  				</div>
 <?php endwhile; ?>
          

  			</div>
			
																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'normal_slider', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$normal_slider = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
        <div class="facts-img">
          <img src="<?php echo $normal_slider; ?>" alt="" class="img-fluid">
        </div>
 <?php endwhile; ?>
      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_bloginfo('template_url');?>/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_bloginfo('template_url');?>/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'Our_Clients', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$Our_Clients = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
        <header class="section-header">
          <h3><?php the_title();?></h3>
        </header>
<?php endwhile; ?>

        <div class="owl-carousel clients-carousel">
																				<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'Our_Clients_logo', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$Our_Clients_logo = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
          <img src="<?php echo $Our_Clients_logo; ?>" alt="">
         
		   <?php endwhile; ?>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'Testimonials', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$Testimonials = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
        <header class="section-header">
          <h3><?php the_title();?></h3>
        </header>
<?php endwhile; ?>
        <div class="owl-carousel testimonials-carousel">
					<?php
wp_reset_query();
$args2 = array( 'post_type' => 'Testimonials_slider', 'posts_per_page' => 15 );
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$Testimonials_slider = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
          <div class="testimonial-item">
            <img src="<?php echo  $Testimonials_slider; ?>" alt="">
            <h3><?php the_title();?>Saul Goodman</h3>
           
            <p>
              <img src="<?php echo get_bloginfo('template_url');?>/img/quote-sign-left.png" class="quote-sign-left" alt="">
              <?php the_content(); ?>
              <img src="<?php echo get_bloginfo('template_url');?>/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
<?php endwhile; ?>  

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
	  																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'ourteam', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$ourteam = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
        <div class="section-header wow fadeInUp">
          <h3><?php the_title();?></h3>
          <p><?php the_content(); ?></p>
        </div>
<?php endwhile; ?>

        <div class="row">
	  																		<?php 
wp_reset_query();
$args3 = array( 'post_type' => 'team_slider', 'posts_per_page' => 11 );
$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$team_slider = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?php echo $team_slider; ?>" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php the_title();?></h4>
                  <span><?php the_content(); ?></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php endwhile; ?>
         


         
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
	  																		<?php 
																		
wp_reset_query();
$args3 = array( 'post_type' => 'contact_us', 'posts_per_page' => 11 );

$loop3 = new WP_Query( $args3 );
while ( $loop3->have_posts() ) : $loop3->the_post();
$contact_us = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
        <div class="section-header">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
<?php endwhile; ?>
        <div class="row contact-info">
					<?php
					$i=1;
wp_reset_query();
$args2 = array( 'post_type' => 'our_info', 'posts_per_page' => 15 );
$emo=array('ion-ios-location-outline','ion-ios-telephone-outline','ion-ios-email-outline');
$loop2 = new WP_Query( $args2 );
while ( $loop2->have_posts() ) : $loop2->the_post();
$our_info = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
          <div class="col-md-4">
            <div class="contact-address">
              <i class="<?php echo $emo[$i-1]; ?>"></i>
              <h3><?php the_title(); ?></h3>
              <address><?php the_content(); ?></address>
            </div>
          </div>
<?php 
 $i++;
endwhile; ?>
         

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
 <?php get_footer();?>