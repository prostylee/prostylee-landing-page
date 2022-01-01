jQuery(function($){
    $(document).ready(function(e) {
        const body = document.body;
        $(".navbar-toggler").click(function() {
            $("#mobile-nav").animate({ left: 0});
            $(".footer-nav").animate({ left: 0});
            $("#top-bar").hide();
            body.style.position = 'fixed';
        });
        $(".close-btn").click(function() {
            $("#mobile-nav").animate({ left:'-100%'});
            $(".footer-nav").animate({ left: '-100%'});
            $("#top-bar").show();
            body.style.position = '';
        });

        $(window).scroll(function() {
            $topBar = $('#top-bar');
            if ($(this).scrollTop() > $topBar.height()) {
                $('#top-bar .custom-logo').show();
            } else {
                $('#top-bar .custom-logo').hide();
            }
            $topBar.toggleClass('top-bar-scrolled', $(this).scrollTop() > $topBar.height());
        });
    })
});
