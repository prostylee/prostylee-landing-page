<?php
if (has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' )) { ?>
    <nav class="navbar navbar-expand-md" id="top-bar"
         aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>" role="navigation">
        <div class="container">
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <!-- end site-branding -->
            <button class="navbar-toggler">
                <i class="fas fa-bars toggle-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <?php
                    if (has_nav_menu( 'primary' )) {
                        wp_nav_menu(
                            array(
                                'container'  => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'primary',
                                'add_li_class' => 'nav-item'
                            )
                        );
                    } elseif ( ! has_nav_menu( 'expanded' ) ){
                        wp_list_pages(
                            array(
                                'match_menu_classes' => true,
                                'show_sub_menu_icons' => true,
                                'title_li' => false,
                                'walker'   => '',
                            )
                        );
                    }
                    ?>
                </ul>
            </div>
            <!-- end navbarCollapse -->
            <button class="btn btn-primary btn-download-app">Tải ứng dụng</button>
            </div>
             <!-- end container -->
    </nav>
    <!-- end navbar -->
    <nav id="mobile-nav" class="nav-overlay">
        <div class="container">
            <div class="site-branding">
                <i class="fas fa-times close-btn"></i>
                <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
            </div>
            <!-- end site-branding -->
            <div class="menu">
                <ul class="navbar-nav">
                    <?php
                    if (has_nav_menu( 'primary' )) {
                        wp_nav_menu(
                            array(
                                'container'  => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'primary',
                                'add_li_class' => 'nav-item'
                            )
                        );
                    } elseif ( ! has_nav_menu( 'expanded' ) ){
                        wp_list_pages(
                            array(
                                'match_menu_classes' => true,
                                'show_sub_menu_icons' => true,
                                'title_li' => false,
                                'walker'   => '',
                            )
                        );
                    }
                    ?>
                </ul>
            </div>
            <!-- end menu -->
            <div class="footer-nav">
                <div class="download-box">
                    <p class="text-center text-install">Tải ứng dụng</p>
                    <?php get_template_part( 'components/platform', 'store', null ); ?>
                </div>
                <!-- end download-box -->
                <div class="copyright-nav">
                    <div class="container">
                        <ul class="socials">
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <!-- end footer-socials -->
                        <p class="copyright">&copy;<?php echo date('Y');?> Prostylee. All rights reserved</p>
                    </div>
                </div>
                <!-- end copyright-nav -->

            </div>
            <!-- end footer-nav -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end mobile-nav -->
<?php } ?>
