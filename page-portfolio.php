<?php get_header();
/*
    * Template Name: Portfolio (No Sidebars)
    */
    $imagenes = get_post_meta(get_the_ID(), 'MyAgency_portfolio_image_portfolio', true);
?>

<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_portfolio_main_title_portfolio' , true); ?>
                    </h1>
                    <div class="line"></div>
                    <p>
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_portfolio_description_title_portfolio' , true); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4">
        <?php foreach($imagenes as $id => $imagen): ?>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                <div class="portfolio-item image-zoom">
                    <div class="image-zoom-wrapper">
                        <img src="<?php echo $imagen; ?>" alt="image-gallery">
                    </div>
                    <?php $imagen = wp_get_attachment_image_url($id, 'full'); ?>
                    <a href="<?php echo $imagen; ?>" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                </div> <!-- card -->
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>