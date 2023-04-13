<?php  get_header(); ?>

     <?php while(have_posts()): the_post(); ?>

   
          <?php get_template_part('template-parts/contenido', 'page');
          
          // printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true ) );
          ?>


          <section class="section-padding">
          <div class="container ">
               <div class="post-container ">
                    <?php the_post_thumbnail('none',array('class','w-100')) ?>
                         <div class="post-content mb-3">
                    <h1 class="post-title mt-4"><?php the_title(); ?></h1>
                    <p class="post-description">
                    <?php echo get_post_meta(get_the_ID(), 'MyAgency_classes_block_class', true); ?>
                    </p>

               </div>
               <div class="card-body">
               
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

                        </p>
                            <?php echo the_content(); ?>
                        </p>

                    </div>
                    <h4 class="mb-3">Instructors: </h4>
                    <?php $instructor_ID = get_post_meta(get_the_ID(), 'MyAgency_classes_Instructor_class', true); 
                     
                         $args = array(
                              'post_type' =>'Instructors',
                              'post__in'       => $instructor_ID,
                              'posts_per_page' => 5
                         );

                         $instructor = new WP_Query($args);

                         while($instructor->have_posts()): $instructor->the_post();
                    ?>
                    <div class="d-inline team-member image-zoom">
                         <h5 class="mt-4"><?php the_title(); ?></h5>
                         <div class="shadow figure image-zoom-wrapper">
                         <?php the_post_thumbnail('medium',array('class','img-fluid ')) ?>
                         </div>
                         
                    </div>
                    
                    <?php endwhile; wp_reset_postdata();?>
                
               </div>

          </div>
          <div class="d-flex col-sm-5 col-md-3 justify-content-end mt-5">
               <a 
               href="<?php echo get_permalink(get_page_by_title('classes')); ?>" 
               class="btn bg-dark d-block d-md-inline text-white">More Classes</a>
          </div>
          
          </section>

          
          

     <?php endwhile; ?>

<?php  get_footer(); ?>