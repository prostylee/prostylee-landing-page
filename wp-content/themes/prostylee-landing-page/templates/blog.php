<?php
/**
 * Template Name: Blog
 */
?>
<div id="blog-page">
    <?php get_header();?>
    <section class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 header">
                    <h1 class="text-title"><?php echo the_title(); ?></h1>
                </div>
                <!-- end introduction -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end header-section -->
    <div class="blog-content content">
        <main id="main-wrapper">
            <div class="container">
                <div class="blog-nav">
                    <ul class="nav">
                        <?php
                        if (has_nav_menu( 'blog' )) {
                            wp_nav_menu(
                                array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'blog',
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
                <!-- end blog-nav -->
                <div class="posts-wrapper">
                    <div class="posts-section">
                        <div class="row feature-posts post-list">
                            <div class="col-md-6 feature-post-item card post-item">
                                <a href="http://localhost:8080/wordpress/prostylee-landing-page/hello-world/">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/feature_1.png" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <a href="" class="category">Sản phẩm</a>
                                    <h2 class="card-title"><a href="http://localhost:8080/wordpress/prostylee-landing-page/hello-world/">Adidas aims for DTC to be 50% of sales by 2025</a></h2>
                                </div>
                            </div>
                            <div class="col-md-6 feature-post-list post-list">
                                <div class="row">
                                    <div class="col-md-6 card post-item">
                                        <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_1.png" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <a class="category" href="">Khách hàng</a>
                                            <h5 class="card-title"><a href="#">Lord & Taylor to relaunch online, with help from RTW Retailwinds</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6 card post-item">
                                        <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_2.png" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <a class="category" href="">Khuyến mãi</a>
                                            <h5 class="card-title"><a href="#">Boxes: the backbone of e-commerce</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature-post-list -->

                        </div>
                        <!-- end feature-posts -->
                        <div class="row post-list">
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_3.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Khách hàng</a>
                                    <h5 class="card-title"><a href="#">Mashable launches shoppable virtual home featuring Walmart products</a></h5>
                                </div>
                            </div>
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_4.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Đối tác</a>
                                    <h5 class="card-title"><a href="#">What is the new retail playbook in a post-pandemic world?</a></h5>
                                </div>
                            </div>
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_5.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Sản phẩm</a>
                                    <h5 class="card-title"><a href="#">'Relevance is key': Why Nordstrom has gone all-in on DTC brands</a></h5>
                                </div>
                            </div>
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/feature_2.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Cập nhật</a>
                                    <h5 class="card-title"><a href="#">'Dick's sales spiked 10% last year, but the retailer warns of possible slowdown</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- end post-list -->
                    </div>
                    <!--end posts-section -->

                    <div class="posts-section">
                        <div class="row feature-posts post-list">
                            <div class="col-md-6 feature-post-list">
                                <div class="row">
                                    <div class="col-md-6 card post-item">
                                        <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_1.png" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <a class="category" href="">Khách hàng</a>
                                            <h5 class="card-title"><a href="#">Lord & Taylor to relaunch online, with help from RTW Retailwinds</a></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6 card post-item">
                                        <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_2.png" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <a class="category" href="">Khuyến mãi</a>
                                            <h5 class="card-title"><a href="#">Boxes: the backbone of e-commerce</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature-post-list -->
                            <div class="col-md-6 feature-post-item card post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/feature_2.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Sản phẩm</a>
                                    <h2 class="card-title"><a href="#">Private equity pours $500M into Saks Fifth Avenue's e-commerce spinoff</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- end feature-posts -->
                        <div class="row post-list">
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_1.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Khách hàng</a>
                                    <h5 class="card-title"><a href="#">Mashable launches shoppable virtual home featuring Walmart products</a></h5>
                                </div>
                            </div>
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_2.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Đối tác</a>
                                    <h5 class="card-title"><a href="#">What is the new retail playbook in a post-pandemic world?</a></h5>
                                </div>
                            </div>
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_3.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Sản phẩm</a>
                                    <h5 class="card-title"><a href="#">'Relevance is key': Why Nordstrom has gone all-in on DTC brands</a></h5>
                                </div>
                            </div>
                            <div class="card col-md-3 post-item">
                                <a href=""> <img src="<?php echo get_template_directory_uri();?>/assets/images/item_4.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a class="category" href="">Cập nhật</a>
                                    <h5 class="card-title"><a href="#">Dick's sales spiked 10% last year, but the retailer warns of possible slowdown</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- end post-list -->
                    </div>
                    <!--end posts-section -->

                    <div class="load-more">
                        <button class="btn btn-load-more btn-primary">Tải thêm</button>
                    </div>
                </div>
                <!-- end posts-wrapper -->

            </div> <!-- end container -->
        </main><!-- #main -->
    </div>
    <!-- end blog-content -->

    <?php get_footer(); ?>
</div>
<!-- end blog-wrapper -->
