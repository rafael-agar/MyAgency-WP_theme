<?php
    /*
    * Template Name: Team Members (No Sidebars)
    */
    get_header();
?>

<?php while(have_posts()): the_post(); ?>
    
<section id="team" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">The <?php the_title(); ?></h1>
                    <div class="line"></div>
                    <p>
                    <?php echo get_post_meta( get_the_ID(), 'MyAgency_team_description_tdescription_title_team' , true); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4 text-center ">
            <?php 
                $teams = get_post_meta( get_the_ID(), 'MyAgency_team_team' , true); 
                foreach($teams as $team):
            ?>

            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <img src="<?php echo $team['icon_team']; ?>" alt="">
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">
                        <?php echo $team['title_team']; ?>
                        </h4>
                        <p class="mb-0 text-white">
                        <?php echo $team['description_team']; ?>
                        </p>
                    </div>
                </div>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>