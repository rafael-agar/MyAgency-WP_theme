<?php
    /*
    * Template Name: About Us (No Sidebars)
    */
    get_header();
?>

<?php while(have_posts()): the_post(); ?>
    
    
<section id="about" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold"><?php the_title(); ?></h1>
                    <div class="line"></div>
                    <p>
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_services_description_title_services' , true); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-4" data-aos="fade-down" data-aos-delay="50">
                <img src="<?php echo get_post_meta( get_the_ID(), 'MyAgency_about_icons_image_about' , true); ?>" alt="">
            </div>
            <div data-aos="fade-down" data-aos-delay="150" class="col-lg-6">
                <h1>
                <?php echo get_post_meta( get_the_ID(), 'MyAgency_about_icons_titulo_icons' , true); ?>
                </h1>
                <p class="mt-3 mb-4">
                <?php echo get_post_meta( get_the_ID(), 'MyAgency_about_icons_description_titulo_icons' , true); ?>
                </p>

                <div class="row justify-content-between align-items-center">
                    <div class="pt-4 mb-3">
                        <!-- iterando los iconos -->
                        <?php 
                            $iconos = get_post_meta( get_the_ID(), 'MyAgency_about_icons_about' , true); 
                                foreach($iconos as $icono):
                        ?>
                            <div class="d-flex mb-3 ">
                                <div class="iconbox me-4">
                                    <img src="<?php echo $icono['image_icon']; ?>" class="ri-mail-send-fill">
                                </div>
                                <div class="mb-3">
                                    <h5><?php echo $icono['title_icon']; ?></h5>
                                    <p><?php echo $icono['description_icon']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>