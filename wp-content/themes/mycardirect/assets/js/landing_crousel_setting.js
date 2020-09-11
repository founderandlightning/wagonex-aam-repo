$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        nav: true,
        autoplay:true,
        autoplayHoverPause:true,
        loop:true,
        center:true,
        items:1,
        smartSpeed: 1000,
        autoplaySpeed: 2000,
        responsive:{
           1200:{
                 items:3
           },
           769:{
                 items:2
           },
           768:{
                 items:1
           }
        }
    });
    
    $('.featured-vehicle-section .owl-next, .featured-vehicle-section .owl-prev').click(function() {
        getCarDetailUrl();
    });
    
    var owl_selector = $('.feature-vehicle');
    owl_selector.on('changed.owl.carousel', function(event) {
        var car_detail_url = $('.featured-vehicle-section .owl-stage .center').next().find('.white-box-container').attr('car_detail_url');
        $('.car-detail-path').attr('href', car_detail_url);
    })
});

function getCarDetailUrl() {
    var car_detail_url = $('.featured-vehicle-section .owl-stage .center .white-box-container').attr('car_detail_url');
    $('.car-detail-path').attr('href', car_detail_url);
}