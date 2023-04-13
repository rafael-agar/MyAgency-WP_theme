<?php  get_header(); ?>

     <?php while(have_posts()): the_post(); ?>

   
          <?php get_template_part('template-parts/contenido', 'page');
          
          // printf( '<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true ) );
          ?>

          <section class="section-padding">
          <div class="container">
                    <div class="card mb-3" style="max-width: 540px;">
                         <div class="row g-0">
                              <div class="col-md-4">
                                   <img src="..." class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                   <div class="card-body">
                                   <h5 class="card-title"><?php the_title(); ?></h5>
                                   <p class="card-text"><small class="text-muted">
                                        <?php echo get_post_meta(get_the_ID(), 'MyAgency_instructors_instructor_email', true); ?>
                                   </small></p>
                                   <p class="card-text">
                                   <?php echo get_post_meta(get_the_ID(), 'MyAgency_instructors_review_instructor', true); ?>
                                   </p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

          
          


     <?php endwhile; ?>

<?php  get_footer(); ?>