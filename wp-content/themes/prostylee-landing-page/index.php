<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmp   g.org/xfn/11">
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
                                <?php get_template_part( 'components/platform', 'store' ); ?>
                            </div>
                            <!-- end introduction -->
                            <div class="col-md-8 banners">
                                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/feature_image.png" alt=""></a>
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
                                <h3 class="heading">Shopping your our way to safety</h3>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quis?</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 section-left">
                                <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/choose_us.png" alt=""></a>
                            </div>
                            <div class="col-md-6 section-right benefits">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/images/sample.png" alt=""></span>
                                        <span class="text">Đơn giản và dễ dùng</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/images/quickly.png" alt=""></span>
                                        <span class="text">Nhanh chóng, an toàn</span></li>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/images/anywhere.png" alt=""></span>
                                        <span class="text">Mọi lúc mọi nơi</span>
                                    </li>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/images/good_brand.png" alt=""></span>
                                        <span class="text">Hàng chính hãng, thương hiệu uy tín</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->
                </section>
                <!-- end component choose-us-section-->
                <section class="component hot-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 inner-choose-us">
                                <h5 class="question-text">Tính năng nổi bật</h5>
                                <h3 class="heading">Nâng tầm trải nghiệm mua sắm online của bạn</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 section-left">
                                <div class="box-image">
                                    <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/hot_features.png" alt=""></a>
                                </div>
                                <!-- end box-image -->
                            </div>
                            <div class="col-md-6 section-right benefits">
                                <span class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/images/feature_icon.png" alt=""></span>
                                <h3 class="heading">Thỏa sức mua sắm</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et quo unde! Aliquid error facere nemo quae reprehenderit. Maiores, sequi!</p>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->
                </section>
                <!-- end host-features -->
            </main>
            <!-- end main-wrapper -->
			<footer id="prostylee-footer-wrapper">
				Footer
			</footer>
			<!-- end prostylee-footer-wrapper -->

			<div class="container">
				
			</div>
			<!-- end container -->
		</div>
		<!-- end prostylee-wrapper -->
	
	</body>
</html>








