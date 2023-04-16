<?php
    get_header();
          
?>       
    

       

    <section id="blog" class="blog section-padding justify-content-center">    
            <div class="container " data-aos="fade-up">


            <div class="section-title">
                <h1 class="display-4 fw-semibold text-center">Blog</h1>
                <div class="line"></div>
            </div>

            
            <div class="container">
                <div class="row align-items-start">
                    
                    <div class="col-lg-10">

                    <!-- ************************** -->
                    <? while(have_posts()): the_post(); ?>
                    <article class="entry">

                        <h1 class="entry-titl mt-3">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a>
                        </h1>

                        <div class="entry-img">
                        <?php echo the_post_thumbnail('blog', array('class' => 'img-fluid')); ?>
                        </div>

                        <div class="entry-meta">
                           
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

                        <div class="entry-content mb-5">
                            <p>
                            <?php echo get_the_excerpt(); ?>
                            </p>
                            <div class="read-more">
                            <a href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </div>

                        <hr class="mb-5"
                        style="border: 0;
                                height: 1px;
                                background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));"
                        >

                        </article><!-- End blog entry -->


                        <?php endwhile; ?>

                        
                            <ul class="pagination justify-content-center">

                                <span class="fs-3"><?php echo paginate_links(); ?></span>

                            </ul>
                        

                    </div> <!-- end ENTRY -->
                    

                    <div class="col-lg-2 sidebar">


                        <?php get_sidebar(); ?>


                    </div>

                </div>
            </div>

      </div>
    </section><!-- End Blog Section -->

        


        
<?
    get_footer();
?>

