<?php

function myagency_query_classes($cantidad = -1){
    $args = array(
        'post_type' => 'myclasses_clases',
        'posts_per_page' => $cantidad
    );

    $classes = new WP_Query($args);

    while($classes->have_posts()): $classes->the_post(); ?>

        <div class="col-md-6 col-lg-4">
            <div class="card">
                <?php the_post_thumbnail('square',array('class','card-img-top')) ?>

                <div class="card-meta bg-dark p-3 text-light d-flex justify-content-between align-items-center">
                <?php 
                    $date = get_post_meta(get_the_ID(), 'MyAgency_classes_textdate_class', true);
                    $time = get_post_meta(get_the_ID(), 'MyAgency_classes_time_class_start', true);
                    $price = get_post_meta(get_the_ID(), 'MyAgency_classes_price_class', true);
                ?>
                    <div>
                        <p class="text-start m-0">
                            <?php echo "Start: " . $date . " - At: " . $time;?>
                        </p>
                    </div>
                        <span class="badge badge-secondary px-2 py-2 fs-5">
                            <?php echo "price: $" .$price; ?>
                        </span>
                    
                </div>
                <div class="card-body">
                        <h3 class="card-title">
                            <?php the_title(); ?>
                        </h3>
                        <p class="card-subtitle mb-2">
                            <?php echo get_post_meta(get_the_ID(), 'MyAgency_classes_subtitle_class', true);?>
                        </p>
                        <p class="card-text">
                            <?php echo wp_trim_words(get_the_content(), 30, '.'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn bg-dark d-block d-md-inline text-white">Más Información.</a>
                </div>
            </div>
        </div><!--.col-md-4-->


    <?php 
    endwhile; wp_reset_postdata();
}

