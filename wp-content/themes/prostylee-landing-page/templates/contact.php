<?php
/**
 * Template Name: Term & Privacy
 */
?>
<div id="contact-page">
    <?php get_header();?>
    <div class="contact-content content">
        <main id="main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 content">
                        <p class="title">Liên hệ với chúng tôi</p>
                        <h2 class="text-header">Let's get the conversation started</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis eros et purus pretium fringilla.</p>
                        <div class="form-group">
                            <label>LET’S WORK TOGETHER</label>
                            <p class="main-text">prostylee@mail.com</p>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>PHONE NUMBER</label>
                            <p class="main-text">+(01) 2345 678 901</p>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>Socials</label>
                            <ul class="socials list list-group">
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram-square"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            </ul><!-- end footer-socials -->
                        </div>
                        <!-- end form-group -->
                    </div>
                    <!-- end content -->
                    <div class="col-md-6 contact-form">
                        <h5 class="header">Chúng tôi có thể giúp gì cho bạn?</h5>
                        <?php echo do_shortcode('[wpforms id="150"]'); ?>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- end container -->
        </main><!-- #main -->
    </div>
    <!-- end contact-content -->

    <?php get_footer(); ?>
</div>
<!-- end contact-page -->
