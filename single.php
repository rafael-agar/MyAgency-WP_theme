<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

    

<section id="services" class="section-padding border-top">
    <div class="container">
          
    <article class="entry">

        <h1 class="entry-titl mt-3">
            <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a>
        </h1>

        <div class="entry-img">
        <?php echo the_post_thumbnail('blog', array('class' => 'img-fluid sidebar')); ?>
        </div>

        <div class="entry-meta mt-3">
            
            <i class="bi bi-person"></i> 
            <a href="
            <?php echo 
                get_author_posts_url( get_the_author_meta('ID'), 
                get_the_author_meta( 'user_nicename' ) ); ?>
            ">
                <?php the_author(); ?>
            </a>

            <i class="bi bi-clock"></i> <a href="blog-single.html">
                <time datetime="2020-01-01">
                <?php the_time(get_option('date_format')) ?> - 
                </time></a>

            <i class="bi bi-chat-dots"></i> 
            <a href="blog-single.html">
                12 Comments
            </a>
            
        </div>

        <div class="entry-content mb-5" style="max-width: 1000px;">
            <p>
            <?php echo the_content(); ?>
            </p>
        </div>

        <div class="container">
            <?php 
                if(comments_open() || get_comments_number()):
                    comments_template();
                else:
                    echo '<p class="text-center">The comments are unavailabe</p>';
                endif;
            ?>
        </div>


    </article><!-- End blog entry -->

    </div><!--.row-->
</section>




<?php endwhile; ?>

<?php get_footer(); ?>

