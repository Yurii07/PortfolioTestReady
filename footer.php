<footer><!-- Footer -->

    <div class="container"><!--    container-fluid-->

        <div class="row"><!-- Grid row -->
            <div class="col-md">
                <div class="row">
                    <?php
                    wp_nav_menu(array(
                            'menu' => 'secondary',
                            'theme_location' => 'secondary',
                            'depth' => 2,
//                            'container'         => 'div',
//                            'container_class'   => 'collapse navbar-collapse',
//                            'container_id'      => 'bs-example-navbar-collapse-1',
//                            'menu_class'        => 'footer',
//                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())

                    ); ?>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="row">
                            <ul class="share_icons-wrap">
                                <li>
                                    <a href="#">
                                        <a class="share-icon facebook" href="#">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </a>

                                </li>
                                <li><a class="share-icon twitter " href="#"><span class="fab fa-twitter"></span></a></li>

                                <li><a class="share-icon googleplus" href="#"><span
                                                class="fab fa-google-plus-g"></span></a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <p><?php the_field('group'); ?><br>
                                <?php the_field('design'); ?></p>>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <h5 class="text-uppercase"> Техническая поддержка </h5>

                            <ul class="list-unstyled">
                                <li>
                                    <p>  <?php the_field('home_phone'); ?></p>
                                </li>
                                <li>
                                    <p> <?php the_field('text-field'); ?></p>
                                </li>

                            </ul>
                        </div>
                        <div class="row">
                            <h5 class="text-uppercase">Отдел по работе с клиентами</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <p> <?php the_field('home_phone_second'); ?></p>
                                </li>
                                <li>
                                    <p> <?php the_field('text-field2'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-uppercase">Адрес:</h5>
                        <address>
                           <p> <?php the_field('country'); ?>
                            <?php the_field('region'); ?>
                            <?php the_field('district'); ?>
                            <?php the_field('street'); ?>
                               <?php the_field('office'); ?></p>
                        </address>
                    </div>
                </div>

            </div>
        </div><!-- Grid row -->

    </div> <!--    container-fluid-->

</footer><!-- Footer -->


</body>
</html>



