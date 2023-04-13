<?php
    /*
    * Template Name: Services (No Sidebars)
    */
    get_header();
?>

<?php while(have_posts()): the_post(); ?> 
    
<section id="services" class="section-padding border-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold"><?php the_title(); ?></h1>
                    <div class="line"></div>
                    <p>
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_services_description_title_services' , true); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4 text-center">

            <?php 
                $services = get_post_meta( get_the_ID(), 'MyAgency_services_services' , true); 
                foreach($services as $service):
            ?>
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">

                <div class="service theme-shadow p-lg-5 p-4">

                    
                    <div class="iconbox">
                        <img src="<?php echo $service['icon_service']; ?>" class="ri-pen-nib-fill">
                        </img>
                    </div>
                    <h5 class="mt-4 mb-3"><?php echo $service['title_service']; ?></h5>
                    <p>
                    <?php echo $service['description_service']; ?>
                    </p>
                    
                </div>
                
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>