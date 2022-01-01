<?php
/**
 * Template Name: Term & Privacy
 */
?>
<div id="privacy-page">
    <?php get_header();?>
    <!-- end feature-wrapper -->
    <div class="privacy-content content">
        <main id="main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 privacy-menu">
                        <ul class="list list-group">
                            <?php
                            if (has_nav_menu( 'privacy' )) {
                                wp_nav_menu(
                                    array(
                                        'container'  => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'privacy',
                                        'add_li_class' => 'list-group-item'
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
                    <!-- end privacy-menu -->
                    <div class="col-md-9 content">
                                <?php

                                // Start the Loop.
                                while ( have_posts() ) :
                                    the_post();
//                                    $pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
//                                    $firstchild = $pagekids[0];
//                                    wp_redirect(get_permalink($firstchild->ID));
//                                    exit();
                                    ?>
                                    <header class="entry-header">
                                        <h1 class="text-title"><?php the_title(); ?></h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <?php
                                        the_content();

                                        wp_link_pages(
                                            array(
                                                'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
                                                'after'    => '</nav>',
                                                /* translators: %: Page number. */
                                                'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
                                            )
                                        );
                                        ?>
                                    </div><!-- .entry-content -->
                                    <?php

                                    if ( is_singular( 'attachment' ) ) {
                                        // Parent post navigation.
                                        the_post_navigation(
                                            array(
                                                /* translators: %s: Parent post link. */
                                                'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
                                            )
                                        );
                                    } elseif ( is_singular( 'post' ) ) {
                                        // Previous/next post navigation.
                                        the_post_navigation(
                                            array(
                                                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
                                                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
                                                    '<span class="post-title">%title</span>',
                                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
                                                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
                                                    '<span class="post-title">%title</span>',
                                            )
                                        );
                                    }

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) {
                                        comments_template();
                                    }

                                endwhile; // End the loop.
                                ?>
                    </div>
                    <!-- end content -->
                </div>
                <!-- end row -->
            </div> <!-- end container -->
        </main><!-- #main -->
    </div>
    <!-- end about-content -->

    <?php get_footer(); ?>
</div>
<!-- end privacy-page -->
