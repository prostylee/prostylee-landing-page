        <footer id="prostylee-footer-wrapper">
            <section id="feature-footer">
                <div class="container">
                    <div class="inner-feature">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 put-installation">
                                <h2 class="header text-center">Thế giới thời trang hiện đại đang đợi bạn tải xuống ngay bây giờ!</h3>
                                <div class="download-app text-center">
                                    <?php get_template_part( 'components/platform', 'store', array(
                                            'data' => array(
                                                'google_play' => 'google_play_color.png',
                                                'app_store' => 'app_store_color.png'
                                            )
                                    ) ); ?>
                                </div>
                            </div>
                            <!-- end put-installation -->
                            <div class="col-sm-12 col-md-6 footer-banner">
                                <img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/footer_banner.png" alt=""/>
                            </div>
                            <!-- end footer-banner -->
                        </div>
                    </div>
                    <!-- end inner-feature -->
                </div>
            </section>
            <!-- end feature-footer -->
            <footer id="bottom-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 footer-widget about-widget">
                            <div id="footer-logo">
                                <img src="http://192.168.1.13:8080/wordpress/prostylee-landing-page/wp-content/themes/prostylee-landing-page/assets/images/footer_logo.png" alt="" class="img">
                            </div>
                            <div class="description">
                                <p>Giới thiệu ngắn về ưng dụng. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec eget mauris et mauris maximus sodales. Aliquam vehicula pharetra leo, at elementu.</p>
                            </div>
                            <p class="copyright">&copy; <?php echo date('Y');?> Prostylee. All rights reserved</p>

                        </div>
                        <!-- end about-widget -->
                        <div class="col-md-3 col-sm-12 footer-widget contact-widget">
                            <h5 class="widget-header">Liên hệ với chúng tôi</h5>
                            <div class="address-box">
                                <ul class="list list-group">
                                    <li class="address">
                                        <p><i class="fas fa-map-marker-alt"></i> Số 11, Nguyển Công Trứ, Phường Nguyễn Thái Bình, Quận 1, Thành Phố Hồ Chí Minh</p>
                                    </li>
                                    <li class="phone">
                                        <p><i class="fas fa-phone"></i> (+84) 123 456 890</p>
                                    </li>
                                    <li class="email">
                                        <p><i class="fas fa-envelope"></i> support@prostylee.com</p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="socials list list-group">
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram-square"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            </ul><!-- end footer-socials -->
                            <!-- end address -->
                        </div>
                        <!-- end contact -->
                        <div class="col-md-3 col-sm-12 footer-widget categories-widget">
                            <h3 class="widget-header">Sản phẩm</h3>
                            <ul class="list list-group">
                                <li class="list-group-item">
                                    <a href="">Người mua</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Người bán</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Tải ứng dụng</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end categories-widget -->

                        <div class="col-md-3 col-sm-12 footer-widget categories-widget">
                            <h3 class="widget-header">Prostylee</h3>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="">về chúng tôi</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Liên hện chúng tôi</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Liên kết đối tác</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Chính sách bảo mật</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Điều khoản sử dụng</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Hướng dẫn sử dụng</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">yêu cầu hỗ trợ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end categories-widget -->
                    </div>
                </div>
                <!-- end container -->
            </footer>
            <!-- end bottom-widgets -->
            <footer id="copyright-mobile">
               <div class="container">
                   <p>&copy; <?php echo date('Y');?> Prostylee. All rights reserved</p>
               </div>
            </footer>
        </footer>
        <!-- end prostylee-footer-wrapper -->
    </div>
<!-- end prostylee-wrapper -->
        <script>
            AOS.init({
                duration: 1000,
            });
        </script>

        <?php wp_footer(); ?>
</body>

</html>


