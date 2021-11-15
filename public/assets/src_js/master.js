function initSlider() {
    $('.slider-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: false
    });
    $('.slider-1__only-dots').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinite: true
    });
    $('.slider-3').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 600
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 600
            }
        }]
    });
}

function ancora() {
    let page = $('html, body');
    let urlHash = window.location.hash.replace('#', '');
    $('.anchor').click(function () {
        page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 180
        }, 500);

        return false;
    });
    if (urlHash.length > 0) {
        page.animate({
            scrollTop: $('#' + urlHash).offset().top - 150
        }, 500);
    }

}

function hoverEmpreendimentos() {
    $('#empreendimentos .item').mouseenter(function () {
        $('#empreendimentos .item').addClass('item-inativo').removeClass('item-ativo');
        $(this).addClass('item-ativo').removeClass('item-inativo');
    });
}

function toggleMenu() {
    $('.hamburguerMenu,.closeMenu,.closeMenu .anchor').click(function () {
        $('body').toggleClass('scrollYLock');
        $('nav').toggleClass('actived');
    });
}

function toggleTabs() {
    $('#tabs .tab').click(function () {
        let tab = $(this).attr('id');
        $('#tabs .tab, .tab-content').removeClass('active');
        $('.tab-content[data-target="' + tab + '"]').addClass('active');
        $(this).addClass('active');
    });
}

function scrollPage(scroll, scrollPos) {
    $('header').toggleClass('bg-opaco', (scroll >= scrollPos));
}

function checkUrlToHeader() {
    let url = window.location.href;
    let scroll = $(window).scrollTop();
    let baseUrl = $('#baseUrl').attr('href') + '/';
    if ((url !== baseUrl) && (url !== baseUrl + '?')) {
        let headerHeight = $('header').innerHeight() - 57;
        scrollPage(scroll, 0);
        $('.content').attr('style', 'padding-top:' + headerHeight + 'px;');
        $(window).on('scroll', function () {
            scroll = $(window).scrollTop();
            scrollPage(scroll, 0);
        });
    } else {
        scrollPage(scroll, 180);
        $(window).on('scroll', function () {
            scroll = $(window).scrollTop();
            scrollPage(scroll, 180);
        });
    }
}

function toggleSearchInput() {
    let input;
    $('#headerSearch .icon-search, #headerSearch input').click(function () {
        input = 'headerSearch';
        $('#' + input + ' form').addClass('active');
        return input;
    });
    $('#newsBox span').click(function () {
        input = 'newsBox';
        $('#' + input + ' form').addClass('active');
        return input;
    });
    $('body').click(function (e) {
        closeToggledInputs(input, e);
    });
}

function closeToggledInputs(input, e) {
    let inputForm = $('#' + input + ' form');
    if (input !== null && inputForm.hasClass('active')) {
        if (e.target.id === input)
            return;
        if ($(e.target).closest('#' + input).length)
            return;
        $('#headerSearch form, #newsBox form').removeClass('active');
    }
}

function loader() {
    setTimeout(function () {
        $('.loader').fadeOut();
    }, 300);
}

$(window).on('load', function () {
    initSlider();
    hoverEmpreendimentos();
    toggleMenu();
    ancora();
    toggleTabs();
    checkUrlToHeader();
    toggleSearchInput();
    loader();
});
