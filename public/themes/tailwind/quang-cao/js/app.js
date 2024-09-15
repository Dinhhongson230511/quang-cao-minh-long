$('#header .ss-navbar-toggle').click(function(){
    $(this).parent().toggleClass('active');
});

//wow
new WOW().init();

if($(window).width() < 1200 ){
    $('#header .ss-navbar').removeClass('active');
    // $('#full-page').removeClass('full-page');
}

$('.ss-navbar-menu>ul>li>i').click(function(){
    $(this).next().toggleClass('active');
});

//slick
$('.slick-slider').slick({
    fade: true,
    cssEase: 'linear'
});
$('.slick-other').slick();

  $(document).ready(function() {
    $('#cate-filter').on('change', function() {
        window.location.href = $(this).find(':selected').data("url");
    });

    var titleNews = $("#title-detail-news").text();
    $('img').each(function(i) {
        $(this).attr('title', titleNews);
        $(this).attr('alt', titleNews);
    });
  });

if ($('#full-page').hasClass('full-page')){
    new fullpage('.full-page', {
        autoScrolling: true,
        scrollHorizontally: true,
        navigation: true,
        navigationPosition: 'right',
        css3: true,
        // responsiveWidth: 1200,
        // afterResponsive: function (isResponsive) {
        // },
        onLeave: function(index){
            if(index.index === 0){
                $('#service-slider').slick('slickGoTo', 0);
            }
            if(index.index === 1){
                $('#banner-slider').slick('slickGoTo', 0);
                $('#project-slider').slick('slickGoTo', 0);
                setTimeout(function(){ $('#project-slider').slick('slickGoTo', 1); }, 3000);
            }
            if(index.index === 2){
                $('#service-slider').slick('slickGoTo', 0);
                $('#highlight-slider').slick('slickGoTo', 0);
            }
            if(index.index === 3){
                $('#customer-slider').slick('slickGoTo', 0);
                $('#project-slider').slick('slickGoTo', 0);
                setTimeout(function(){ $('#project-slider').slick('slickGoTo', 1); }, 3000);
            }
            if(index.index === 4){
                $('#highlight-slider').slick('slickGoTo', 0);
                $('#customer-slider').slick('slickGoTo', 0);
            }
            if(index.index === 6){
                $('#customer-slider').slick('slickGoTo', 0);
                setTimeout(function(){
                    $('.main-wrapper .section-contact .section-footer').removeClass('active');
                    $('.main-wrapper .section-contact .container-master').removeClass('active');
                }, 500);
            }
        }
    });
}

if($(window).width() > 1199){
    var asideOffset = $('.news-detail_right').offset().top - 90;
    var asideWidth = $('.news-detail_right').width() + 80;
    var rt = ($(window).width() - ($('.news-detail_right').offset().left + $('.news-detail_right').outerWidth()));

    var heiLeft = $('.news-detail_left').height();

    $(window).scroll(function () {
        if ($(this).scrollTop() > asideOffset && $(this).scrollTop() < heiLeft - 700) {
            $('.news-detail_right').css({"position":"fixed","top":"100px","width":asideWidth,"right":rt});
        }
        else {
            $('.news-detail_right').css({ "position": "static" });
        }
    })
}

if($(window).width() > 991 && $(window).width() < 1200){
    var asideOffset = $('.news-detail_right').offset().top - 90;
    var asideWidth = $('.news-detail_right').width() + 40;
    var rt = ($(window).width() - ($('.news-detail_right').offset().left + $('.news-detail_right').outerWidth()));

    var heiLeft = $('.news-detail_left').height();

    $(window).scroll(function () {
        if ($(this).scrollTop() > asideOffset && $(this).scrollTop() < heiLeft - 700) {
            $('.news-detail_right').css({"position":"fixed","top":"100px","width":asideWidth,"right":rt});
        }
        else {
            $('.news-detail_right').css({ "position": "static" });
        }
    })
}



