 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    <!-- Frontpage Demo -->
   <script>
    
        $(document).ready(function($) {
          $("#owl-example").owlCarousel({
            singleItem : true,
            
            // Navigation
            navigation : true,
            navigationText : ["",""],
            rewindNav : true,
            scrollPerPage : false,

            pagination : false,
            paginationNumbers : false,
            
            //Lazy load
            lazyLoad : true,
            lazyFollow : true,
            lazyEffect : "fade",
            
            // Responsive
            responsive: true,
            responsiveRefreshRate : 0,
            responsiveBaseWidth: window,

            // Responsive
            autoPlay : true,
            stopOnHover : true,
          });
        });
            
        $("body").data("page", "frontpage");
    
    </script>
    <script>
    
        $(document).ready(function($) {
          $("#latest").owlCarousel({
            items : 3,
            singleItem : false,
            
            // Navigation
            navigation : true,
            navigationText : ["",""],
            rewindNav : false,
            scrollPerPage : false,

            pagination : false,
            paginationNumbers : false,
            
            //Lazy load
            lazyLoad : true,
            lazyFollow : true,
            lazyEffect : "fade",
            
            // Responsive
            responsive: true,
            responsiveRefreshRate : 0,
            responsiveBaseWidth: window,

            // Responsive
            autoPlay : false,
            stopOnHover : true,
          });
        });
            
        $("body").data("page", "frontpage");
    
    </script>


    <script src="owl/owl-carousel/owl.carousel.js"></script>