<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<div class="single-page">
    <?php get_header(); ?>
    <div class="container">
        <main id="main-wrapper">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content/content-single' );

                if ( is_attachment() ) {
                    // Parent post navigation.
                    the_post_navigation(
                        array(
                            /* translators: %s: Parent post link. */
                            'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
                        )
                    );
                }

                // If comments are open or there is at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

                // Previous/next post navigation.


            endwhile; // End of the loop. ?>

           <div class="related-posts">
               <h3 class="related-header">Related posts</h3>
               <div class="row post-list">
                   <?php
                   $related = get_posts(
                       array(
                           'category__in' => wp_get_post_categories($post->ID),
                           'numberposts' => 8,
                           "post__not_in" => array($post->ID)
                       )
                   );
                   if ($related) {
                       foreach($related as $post) {
                           $categories = is_array(get_the_category($post->ID)) ? get_the_category($post->ID) : array();
                           setup_postdata($post); ?>
                           <div class="card col-md-3 post-item">
                               <a href="<?php the_permalink();?>" title="<?php the_title()?>">
                                   <?php the_post_thumbnail("post-thumbnail", array("class" => "card-img-top"));?>
                               </a>
                               <div class="card-body">
                                    <?php
                                        if ($categories) {
                                            ?>
                                            <a class="category" href="<?php echo get_tag_link($categories[0] -> term_id)?>"><?php echo $categories[0]->name;?></a>
                                            <?php
                                        }
                                    ?>
                                   <h5 class="card-title"><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(), 8)?></a></h5>
                               </div>
                           </div>
                           <?php
                       }
                   }
                   wp_reset_postdata();
                   ?>
               </div>
               <!-- end post-list -->
           </div>
            <!-- end related-posts -->
        </main>
        <!-- main-wrapper -->
    </div>
    <!-- end container -->

    <?php get_footer(); ?>


</div>
