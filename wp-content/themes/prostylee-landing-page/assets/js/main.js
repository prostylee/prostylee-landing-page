jQuery(function($){
    $(document).ready(function(e) {
        $(".navbar-toggler").click(function() {
            $("#mobile-nav").animate({ left: 0})
            $(".footer-nav").animate({ left: 0})
        });
        $(".close-btn").click(function() {
            $("#mobile-nav").animate({ left:'-100%'})
            $(".footer-nav").animate({ left: '-100%'})
        });
    })
});
