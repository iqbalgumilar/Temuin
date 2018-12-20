<!-- js -->
<script src="{{ url('/assets/flexart/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ url('/assets/flexart/js/bootstrap.js') }}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<!-- search overlay -->
<script src="{{ url('/assets/flexart/js/modernizr-2.6.2.min.js') }}"></script>
<!-- //search overlay -->

<!--search jQuery-->
<script src="{{ url('/assets/flexart/js/classie-search.js') }}"></script>
<script src="{{ url('/assets/flexart/js/demo1-search.js') }}"></script>
<!--//search jQuery-->

<!-- dropdown nav -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- banner slider js -->
<script src="{{ url('/assets/flexart/js/minimal-slider.js') }}"></script>
<!-- //banner slider js -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="{{ url('/assets/flexart/js/waypoints.min.js') }}"></script>
<script src="{{ url('/assets/flexart/js/counterup.min.js') }}"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 100,
            time: 1000
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->

<!-- start-smoth-scrolling -->
<script src="{{ url('/assets/flexart/js/SmoothScroll.min.js') }}"></script>
<script src="{{ url('/assets/flexart/js/move-top.js') }}"></script>
<script src="{{ url('/assets/flexart/js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->
