<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $logo[0] ?>"">


    <?php wp_head(); ?>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
                <!-- // l o g o -->
                <?php
                    if(function_exists('the_custom_logo')){
                        // the_custom_logo();
                        $custom_logo_id = get_theme_mod( 'custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        
                    }
                ?>
                <img src="<?php echo $logo[0] ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- m e n u -->
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav ms-auto">%3$s</ul>'
                            )
                        );
                    ?>

                    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-brand ms-lg-3">Contact</a>
                </div>
            </div>

            
        </div>
    </nav>

