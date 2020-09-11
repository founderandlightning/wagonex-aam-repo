$(document).ready(function () {
    $( ".insurance-sub-category" ).hide();
       
    $('.faq-sidebar li a').click(function() {
       $('.faq-sidebar li a').removeClass('active');
       $(this).addClass('active');
       var section = $(this).attr('value');
       var offset = 100;
       if (section == 'responsibility-section') {
           var offset = 400;
       }
       if (section.indexOf('insurance') == -1) {
           $( ".insurance-sub-category" ).hide('slow');
       }
       if (section == 'insurance-section') {
           $( ".insurance-sub-category" ).toggle('slow');
       }
       $('.faq-block').addClass('hide');
       $('.' + section).removeClass('hide');
       $('html, body').animate({
           scrollTop: $('.' + section).offset().top - parseInt(offset)
       }, 'slow');
    });
    
    $('#faq-select-category').change(function() {
        var section = $(this).val();
        if (section.indexOf('insurance') == -1) {
           $( ".insurance-sub-category" ).hide('slow');
        }
        if (section == 'insurance-section') {
            $( ".insurance-sub-category" ).toggle('slow');
        }
        $('.faq-block').addClass('hide');
        $('.' + section).removeClass('hide');
        $('html, body').animate({
            scrollTop: $('.' + section).offset().top - 100
        }, 'slow');
    });

    $("section.outer-container h6 a:contains('mycardirect')").html(function(_, text) {
        return  text.replace(/(mycardirect)/g, '<span class="text-grey">My<span class="text-green">car</span>direct</span>')
    });

    $("section.outer-container p:contains('mycardirect')").html(function(_, text) {
        return  text.replace(/(mycardirect )/g, '<span class="text-grey">My<span class="text-green">car</span>direct</span>')
    });

    $('.faq-sidebar').theiaStickySidebar({
        additionalMarginTop: 90,
        updateSidebarHeight: true
    });
}); 

$(document).scroll(function() {
    checkOffset();
});
 
function checkOffset() {
    var active_class = $('.faq-sidebar li a.active').attr('value');
    var benifit_section = $('.' + active_class).offset().top;
    var scroll_top = $(window).scrollTop();
    if (benifit_section < scroll_top) {
        resetSidebar();
    }
}
 