$('.container_product').imagesLoaded(function() {
    $("#exzoom").exzoom({
        // thumbnail nav options
        "navWidth": 60,
        "navHeight": 60,
        "navItemNum": 5,
        "navItemMargin": 7,
        "navBorder": 1,

        // autoplay
        "autoPlay": true,

        // autoplay interval in milliseconds
        "autoPlayTimeout": 6000
    });
    $("#exzoom").removeClass('hidden')
});