    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="./assets/images/logo-white.svg" alt=""></a>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, hic!</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                            <a href="#"><i class="ri-dribbble-fill"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <?php get_sidebar(); ?>

                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">MENU</h5>
                        <div class="line"></div>
                        <?php $args = array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul>%3$s</ul>'
                        );
                        wp_nav_menu( $args );
                    
                        ?>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        
                        <ul>
                            <li><?php dynamic_sidebar('widget_address') ?></li>
                            <li>
                                <a href="tel:$phone = dynamic_sidebar('widget_phone');">
                                <?php dynamic_sidebar('widget_phone') ?>
                                </a>
                            </li>
                            <li><?php echo get_site_url(); ?></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Designed By <a href="https://www.rafaelagar.com">Rafael Agar</a></p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">© Copyright <?php echo get_bloginfo( '/' ); ?>. All Rights Reserved<?php echo date('Y'); ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>