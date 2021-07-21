<div id="top-navigation">
    <?php
    if (has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' )) { ?>
        <nav class="navbar navbar-expand-md fixed-top"
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
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
                <div>
                    <!-- end container -->
        </nav>
        <!-- end navbar -->
        <?php
    }
    ?>
</div>
<!-- end top-navigation -->
