<?php

function myagency_query_instructors($cantidad_inst = -1){
    $args_inst = array(
        'post_type' => 'Instructors',
        'posts_per_page' => $cantidad_inst
    );

    $instructors = new WP_Query($args_inst);

    while($instructors->have_posts()): $instructors->the_post(); ?>
    




                <div class="box col-md-6 m-3 ">
                    <div class="box-top">
                        <?php the_post_thumbnail('none',array('class','img-fluid box-image')) ?>
                    <div class="title-flex">
                        <h3 class="box-title"><?php the_title(); ?></h3>
                        <!-- <p class="user-follow-info">17 Projects</p> -->
                    </div>
                    <p class="description">
                    <?php echo get_post_meta(get_the_ID(), 'MyAgency_instructors_review_instructor', true); ?>
                    </p>
                    </div>
                    <a 
                        href="<?php echo get_post_meta(get_the_ID(), 'MyAgency_instructors_instructor_email', true); ?>" 
                        class="button">
                        Follow Kelsie
                    </a>
                </div>





        

    <?php 
    endwhile; wp_reset_postdata();
}