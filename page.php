<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

    <main class="contenedor secction">
        <?php
            get_template('template-parts/content','page');
        ?>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>

