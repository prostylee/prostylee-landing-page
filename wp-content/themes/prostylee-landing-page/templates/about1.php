<?php
/**
 * Template Name: About
 */
?>
<div id="about-page">
    <?php get_header();?>
    <section id="feature-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 introduction">
                    <h1 class="text-title"><?php echo get_the_excerpt(); ?></h1>
                </div>
                <!-- end introduction -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end feature-wrapper -->
    <div class="about-content content">
        <main id="main-wrapper">
            <div class="container">
                <?php

                // Start the Loop.
                while ( have_posts() ) :
                    the_post();

                    ?>
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
            </div> <!-- end container -->
        </main><!-- #main -->
    </div>
    <!-- end about-content -->

    <?php get_footer(); ?>
</div>
<!-- end about-wrapper -->
