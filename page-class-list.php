<?php
    /*
    * Template Name: Class List (No Sidebars)
    */
    get_header();
?>

<main class="section-padding" data-aos="fade-down" data-aos-delay="150">
<div class="container">
    <blockquote class="">
        <?php while(have_posts()): the_post(); 
            the_content();
            $titulo = get_the_title();
            endwhile;
            
        ?>
    </blockquote>
</div>

<section class="section-title">
        <h1 class="display-4 fw-semibold text-center"><?php echo $titulo; ?></h1>
        <div class="line"></div>
        <div class="container">
            <div class="row">
                <?php myagency_query_classes(); ?>
            </div>
        </div>
</section>
</main>

<?php get_footer(); ?>