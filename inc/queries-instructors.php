<?php

function myagency_query_instructors($cantidad_inst = -1){
    $args_inst = array(
        'post_type' => 'Instructors',
        'posts_per_page' => $cantidad_inst
    );

    $instructors = new WP_Query($args_inst);

    while($instructors->have_posts()): $instructors->the_post(); ?>
    
        <div class="container">
            <div class="card_instructor card mb-3" style="width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <?php the_post_thumbnail('none',array('class','img-fluid')) ?>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php the_title(); ?>
                        </h5>
                        <p class="card-text">
                        <?php echo get_post_meta(get_the_ID(), 'MyAgency_instructors_review_instructor', true); ?>
                        </p>
                        <p class="card-text"><small class="text-muted">
                        <?php echo get_post_meta(get_the_ID(), 'MyAgency_instructors_instructor_email', true); ?>
                        </small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        

    <?php 
    endwhile; wp_reset_postdata();
}