<div class="inner-feature">
    <div class="row">
        <div class="col-sm-12 col-md-6 put-installation">
            <h3 class="header text-center">Thế giới thời trang hiện đại đang đợi bạn tải xuống ngay bây giờ!</h3>
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
            <img src="<?php echo get_template_directory_uri();?>/assets/images/footer_banner.png" alt=""/>
        </div>
        <!-- end footer-banner -->
    </div>
</div>
<!-- end inner-feature -->
