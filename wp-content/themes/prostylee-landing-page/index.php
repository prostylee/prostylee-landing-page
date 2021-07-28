<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="prostylee-wrapper">
			<header id="prostylee-header-wrapper">
                <div id="top-navigation">
                    <?php get_template_part( 'header/top', 'navigation' ); ?>
                </div>
                <!-- end top-navigation -->

                <section id="feature-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 introduction">
                               <h2 class="text-title">
                                   <span class="text-focus">Trải nghiệm mua sắm </span>
                                   <spa>chưa từng có</spa>
                               </h2>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis eros et purus pretium fringilla.
                                </p>
                                <?php get_template_part( 'components/platform', 'store', null ); ?>
                            </div>
                            <!-- end introduction -->
                            <div class="col-md-8 banners">
                                <a href=""><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/feature_image.png" alt=""></a>
                            </div>
                            <!-- end videos -->
                        </div>
                    </div>
                    <!-- end container -->
                </section>
                <!-- end feature-wrapper -->
			</header>
			<!-- end prostylee-header-wrapper -->
            <main id="main-wrapper">
                <section class="component choose-us-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 inner-choose-us">
                                <h5 class="question-text">Tại sao chọn chúng tôi?</h5>
                                <h3 class="heading">Shopping our way to safety</h3>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis eros et purus pretium fringilla.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 section-left">
                                <a href=""><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/choose_us.png" alt=""></a>
                            </div>
                            <div class="col-md-6 section-right benefits">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="icon-item"><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/sample.png" alt=""></span>
                                        <span class="text">Đơn giản và dễ dùng</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="icon-item"><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/quickly.png" alt=""></span>
                                        <span class="text">Nhanh chóng, an toàn</span></li>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="icon-item"><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/anywhere.png" alt=""></span>
                                        <span class="text">Mọi lúc mọi nơi</span>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="icon-item"><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/good_brand.png" alt=""></span>
                                        <span class="text">Hàng chính hãng, thương hiệu uy tín</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->
                </section>
                <!-- end component choose-us-section-->
                <section id="hot-features">
                    <section class="hot-header">
                        <div class="container">
                            <h5 class="hot-note">Tính năng nổi bật</h5>
                            <h3 class="hot-slogan">Nâng tầm trải nghiệm mua sắm online của bạn</h3>
                        </div>
                    </section>
                    <!-- end hot-header -->
                    <section class="component shopping-passion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 section-left">
                                    <div class="box-image">
                                        <a href=""><img src="<?php //echo get_template_directory_uri();?>http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/hot_features.png" alt=""></a>
                                    </div>
                                    <!-- end box-image -->
                                </div>
                                <div class="col-md-6 section-right">
                                    <span class="icon"><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/feature_icon.png" alt=""></span>
                                    <h3 class="heading">Thỏa sức mua sắm</h3>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et quo unde! Aliquid error facere nemo quae reprehenderit. Maiores, sequi!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end container -->
                    </section>
                    <!-- end shopping-passion -->

                    <section class="component inspirations">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-15 col-sm-12">
                                    <div class="box-image">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/feature_image.png" alt=""></a>
                                    </div>
                                    <!-- end box-image -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 section-right">
                                    <span class="icon"><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/love.png" alt=""></span>
                                    <h3 class="heading">Cảm hứng mỗi ngày từ bạn bè và cộng đồng thời trang</h3>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et quo unde! Aliquid error facere nemo quae reprehenderit. Maiores, sequi!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end container -->
                    </section>
                    <!-- end inspirations -->

                    <section class="component product-post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 section-right">
                                    <div class="box-image">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/product_post.png" alt=""></a>
                                    </div>
                                    <!-- end box-image -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 section-left">
                                    <span class="icon"><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/post_icon.png" alt=""></span>
                                    <h3 class="heading">Đăng sản phẩm và mua bán một cách dễ dàng</h3>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et quo unde! Aliquid error facere nemo quae reprehenderit. Maiores, sequi!</p>
                                </div>
                            </div>
                        </div>
                        <!-- end container -->
                    </section>
                    <!-- end product-post -->
                </section>
                <!-- end host-features -->
                <section id="how-to-install">
                    <div class="container">
                        <div class="row box-header">
                            <div class="col-md-12 cold-sm-12 header">
                                <h5 class="question-text">How we work?</h5>
                                <h3 class="heading">Bắt đầu tham gia chỉ trong<br/> 3 bước đơn giản</h3>
                            </div>
                        </div>
                        <!-- end box-header -->
                        <div class="row installation-steps">
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">1. Tải ứng dựng</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis eros et purus pretium fringilla.</p>
                                        <img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/step_1.png" alt="" class="card-img-bottom"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">2. Đăng ký, đăng nhập</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis eros et purus pretium fringilla.</p>
                                        <img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/step_2.png" alt="" class="card-img-bottom"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">3. Trải nghiệm ứng dụng</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis eros et purus pretium fringilla.</p>
                                        <img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page//assets/images/step_3.png" alt="" class="card-img-bottom"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end installation-steps -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end how-to-install -->
                <section id="brands-partners" class="component">
                    <div class="container">
                        <div class="row">
                            <div class="box-header col-md-12 col-sm-12">
                                <h3 class="heading">
                                    <span class="partners-count">+1,000</span> thương hiệu, của hàng uy tín chất lượng
                                </h3>
                            </div>
                            <!-- end box-header -->
                            <div class="box-content partners">
                                    <div class="card">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/partner.png" class="card-img-top" alt=""></a>
                                    </div>
                                    <div class="card">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/partner.png" class="card-img-top" alt=""></a>
                                    </div>
                                    <div class="card">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/partner.png" class="card-img-top" alt=""></a>
                                    </div>
                                    <div class="card">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/partner.png" class="card-img-top" alt=""></a>
                                    </div>
                                    <div class="card">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/partner.png" class="card-img-top" alt=""></a>
                                    </div>
                                    <div class="card">
                                        <a href=""><img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/partner.png" class="card-img-top" alt=""></a>
                                    </div>
                            </div>
                            <!-- end end partners -->
                        </div>
                    </div>
                    <!-- end container -->
                </section>
                <!-- end brands-partners -->
            </main>
            <!-- end main-wrapper -->
        <?php get_footer();?>






