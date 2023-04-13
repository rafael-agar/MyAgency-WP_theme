<?php 
/*
    * Template Name: Home (No Sidebars)
    */
get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<!-- HERO -->
<section class="min-vh-100 d-flex align-items-center text-center hero mb-5"
style="background-attachment: fixed; background-image: linear-gradient(to bottom, hsla(217, 27%, 21%, 0.678) ,hsla(0, 0%, 26%, 0.585)), url(<?php echo get_post_meta( get_the_ID(), 'MyAgency_home_image_hero', true ); ?>);"
>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 data-aos="fade-left" class="text-white fw-semibold display-1">
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_home_main_title_1', true ); ?>
                </h1>
                <h5 class="text-white mt-3 mb-4" data-aos="fade-right">
                <?php echo get_post_meta( get_the_ID(), 'MyAgency_home_main_title_2', true ); ?>
                </h5>
                <div data-aos="fade-up" data-aos-delay="50">
                    <a href="<?php echo get_site_url(); ?>" 
                        class="btn btn-brand me-2">
                        <?php echo get_post_meta( get_the_ID(), 'MyAgency_home_left_button', true ); ?>
                    </a>
                    <a href="<?php echo get_site_url() ."/portfolio"; ?>" 
                        class="btn btn-light ms-2">
                        <?php echo get_post_meta( get_the_ID(), 'MyAgency_home_right_button', true ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- WHO WE ARE -->
<section id="about" class="section-padding">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <h1 class="display-4 fw-semibold"><?php echo get_post_meta( get_the_ID(), 'MyAgency_home_who_title', true ); ?></h1>
            <div class="p-5 content bg-dark">
              <p class="text-white">
              <?php echo get_post_meta( get_the_ID(), 'MyAgency_home_who_text', true ); ?>
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200"
          style="webkit-box-shadow: 46px 46px 0px 0px rgba(0,0,0,0.85);
                -moz-box-shadow: 46px 46px 0px 0px rgba(0,0,0,0.85);
                box-shadow: 46px 46px 0px 0px rgba(0,0,0,0.85);"
          >
            <img src="<?php echo get_post_meta( get_the_ID(), 'MyAgency_home_who_image', true ); ?>" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->




<!-- COUNTER -->
<section id="counter" class="section-padding d-flex align-items-center text-center hero"
style="height: 400px; background-attachment: fixed; background-image: linear-gradient(to bottom, hsla(217, 27%, 21%, 0.678) ,hsla(0, 0%, 26%, 0.585)), url(<?php echo get_post_meta( get_the_ID(), 'MyAgency_home_image_home_increase', true ); ?>);">
    <div class="container text-center data-aos="fade-down" data-aos-delay="50"">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                <h1 class="text-white display-4">90,00+</h1>
                <h6 class="text-uppercase mb-0 text-white mt-3">Total</h6>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                <h1 class="text-white display-4">58K+</h1>
                <h6 class="text-uppercase mb-0 text-white mt-3">Trusted Clients</h6>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                <h1 class="text-white display-4">5M+</h1>
                <h6 class="text-uppercase mb-0 text-white mt-3">Success</h6>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                <h1 class="text-white display-4">100+</h1>
                <h6 class="text-uppercase mb-0 text-white mt-3">Team Members</h6>
            </div>
        </div>
    </div>
</section>




<!-- CLASES -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                <div class="section-title pt-5">

                    <?php 
                        $page_title = 'classes';
                        $page = get_page_by_title($page_title);

                        // Verifica si se encontró la página
                        if ($page) {
                            // Obtiene el título de la página
                            $page_title = get_the_title($page->ID); }
                    ?>

                    <h1 class="display-4 fw-semibold">
                        <?php echo $page_title; ?>
                    </h1>
                    <div class="line"></div>
                    <div class="container">
                        <div class="row pt-3 pb-5">
                            <?php myagency_query_classes(3); ?>
                        </div>
                        <div class="row justify-content-end">
                            <div class="d-flex col-sm-5 col-md-3 justify-content-end">
                                <a 
                                    href="<?php echo get_permalink(get_page_by_title('classes')); ?>" 
                                    class="btn bg-dark d-block d-md-inline text-white">More Classes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- BLOG -->
<section class="bg-light d-flex align-items-center text-center hero" style="height: 400px;" >
    <div class="container">
        
        
    
    </div>
</section>




<?php endwhile; ?>



<?php get_footer(); ?>