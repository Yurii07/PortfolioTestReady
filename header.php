<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<title>Testing</title>-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Exo+2:300,400" rel="stylesheet">

<!--    <link rel="stylesheet" href="--><?php //bloginfo( 'template_url' ); ?><!--/src/vendor/scss/font-awesome.scss" />-->
<!--    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->
<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/dist/js/vendor.js'"></script>-->

<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/dist/js/custom.js'"></script>-->


	<?php wp_head(); ?>
</head>
<body>

<header>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-3">
<!--            One of three columns-->
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-md-6">
<!--            One of three columns-->
            <nav class="navbar navbar-expand-lg ">



                <?php
                wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())

                );  ?>

            </nav>
        </div>
        <div class="col-md-3">
<!--            One of three columns-->
            <?php the_field('text-field'); ?><br>
            <?php the_field('text-field2'); ?><br>
            <a href="<?php the_field('Home'); ?>">Написать нам</a>
        </div>
    </div>



</div>
</header>