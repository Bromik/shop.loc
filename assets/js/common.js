jQuery(document).ready(function () {
    jQuery('.flexslider').flexslider({
        animation: "fade",
        slideshowSpeed: 4000,
        slideshow: true,
        animationSpeed: 500,
        touch: true,
        pauseOnHover: true,
        controlNav: true
    });
    jQuery('.flexslider').flexslider({
        animation: "fade",
        controlNav: false
    });
    jQuery(".list-sidebar-products .products-grid").owlCarousel({
        dots: false,
        nav: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });



    setInterval(function () {
        jQuery("#CartContainer").load("index.php #CartContainer");
    }, 5000);


    jQuery(function ($) {
        // THUMB SCROLLER
        jQuery(".product-single_thumbnails").owlCarousel({
            dots: false,
            nav: true,
            items: 4,
            itemsTablet: [767, 3],
            itemsTabletSmall: [721, 2]
        });

        // PRODUCT GALLERY ZOOM
        if ($(window).width() > 767) {
            $(".product-single .ProductPhotoImg").elevateZoom({
                gallery: 'ProductThumbs',
                zoomWindowWidth: 100,
                zoomWindowHeight: 100,
                cursor: 'pointer',
                galleryActiveClass: 'active',
                zoomType: "inner",

                imageCrossfade: true,
                loadingIcon: 'assets/images/ajax_loader.gif'
            });
        }

        //PASS IMAGES TO FANCYBOX
        $(".product-single .ProductPhotoImg").bind("click", function (e) {
            var ez = $('.ProductPhotoImg').data('elevateZoom');
            $.fancybox(ez.getGalleryList());
            return false;
        });

        //REMOVE ZOOM EFFECT ON MOBILE
        $(window).resize(zoomInit);
        function zoomInit() {
            if ($(this).width() < 767) {
                $('.zoomContainer').remove();
                $(".ProductPhotoImg").removeData('elevateZoom');
                $(".ProductPhotoImg").removeData('zoomImage');
                $(".product-single .ProductPhotoImg").off();
            }
        }

        // QUICK VIEW GALLERY
        $('.ProductThumbs a').click(function () {
            $('.product-single_photos .ProductPhotoImg').attr('src', $(this).attr('href'));
        });
    });
});