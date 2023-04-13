<?php
    /*
    * Template Name: Contact (No Sidebars)
    */
    get_header();
?>

<?php while(have_posts()): the_post(); ?>
    
<section class="section-padding bg-light contact"
style="background-size: cover; background-image: linear-gradient(to bottom, hsla(217, 27%, 21%, 0.678) ,#8e8e8e), url(<?php echo get_post_meta( get_the_ID(), 'MyAgency_contact_image_contact' , true); ?>);"
>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 text-white fw-semibold">
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_contact_main_title_contact' , true); ?>
                    </h1>
                    <div class="line bg-white"></div>
                    <p class="text-white">
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_contact_description_title_contact' , true); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
            <div class="col-lg-8">
                <form action="#" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" placeholder="Enter first name">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" placeholder="Enter last name">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="email" class="form-control" placeholder="Enter Email address">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" placeholder="Enter subject">
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea name="message" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="form-group col-lg-12 d-grid">
                        <button class="btn btn-brand">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>