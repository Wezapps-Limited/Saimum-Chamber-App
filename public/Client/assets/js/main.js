$(document).ready(function () {
    // banner section color change
    $('#carouselExampleAutoplaying').on('slid.bs.carousel', function () {
        var currentSlide = $(this).find('.carousel-item.active');
        var index = currentSlide.index();
        var colors = ["#FAF4E7", "#D59ED7",];
        $('.bannger-section').css('background-color', colors[index]);
        $('.bannger-section, .services-section .custom-shape-divider-top-1713715447 .shape-fill').css('fill', colors[index]);
    });

    // cookie
    $('.reject_cookie, .accept_cookie').on('click', function(){
        $('.site_cookie').fadeOut();
    })

    //  Accordion faq
    $(".accordion").on("click", ".title", function () {
        var $accordionItem = $(this).parent(".accordion-item");
        var $accordionInfo = $(this).next(".accordion-info");

        if ($accordionItem.hasClass("active")) {
            $accordionInfo.slideUp();
            $accordionItem.removeClass("active");
        } else {
            $(".accordion-info").slideUp();
            $(".accordion-item").removeClass("active");
            $accordionInfo.slideDown();
            $accordionItem.addClass("active");
        }
    });
});