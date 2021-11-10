function initSlider() {
	$('.slider-1').slick({
		slidesToShow:1,
		slidesToScroll:1,
		arrows:true,
		dots:false,
		prevArrow:$('.prev'),
		nextArrow:$('.next'),
		infinite:false
	});
	$('.slider-3').slick({
		slidesToShow:3,
		slidesToScroll:1,
		arrows:false,
		dots:false,
		autoplay: false,
		responsive: [
		    {
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
		    },
		    {
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
		    }
	    ]
	});
}
function ancora() {
    var page = $('html, body');
    var urlHash = window.location.hash.replace('#', '');
	$('.anchor').click(function () {
        page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 180
        }, 500);
        
        return false;
        console.log($(this).parent());
    });
    if (urlHash.length > 0) {
        page.animate({
            scrollTop: $('#' + urlHash).offset().top - 150
        }, 500);
    }

}

function hoverEmpreendimentos() {
	$('#empreendimentos .item').mouseenter(function(){
		$('#empreendimentos .item').addClass('item-inativo').removeClass('item-ativo');
		$(this).addClass('item-ativo').removeClass('item-inativo');
	});	
}

function toggleMenu() {
	$('.hamburguerMenu,.closeMenu,.closeMenu .anchor').click(function(){
		$('body').toggleClass('scrollYLock');
		$('nav').toggleClass('actived');
	});
}

function toggleTabs() {
	$('#tabs .tab').click(function(){
		var tab = $(this).attr('id');
		$("#tabs .tab, .tab-content").removeClass('active');
		$(".tab-content[data-target='" + tab +"']").addClass('active');
		$(this).addClass('active');
	});
}

function scrollHomePage(scroll) {
	if (scroll >= 50) {
		$('header').addClass('bg-opaco');
	}else{
		$('header').removeClass('bg-opaco');
	}
}

function srollInterno(scroll) {
	if (scroll >= 120) {
		$('header').addClass('bg-opaco');
	}else{
		$('header').addClass('bg-opaco');
	}
}

function checkUrlToHeader() {
	var url = window.location.href;
	var urlArray = url.split('/');
	var urlArrayLastItem = urlArray.length -1;
	var urlPage = urlArray[urlArrayLastItem];
	var scroll = $(window).scrollTop();

	if(urlPage !== "index.html"){
		var headerHeight = $('header').innerHeight() - 57;
		srollInterno(scroll);
		$('.content').attr('style','padding-top:'+ headerHeight +'px;');
		$(window).on('scroll', function(e){
			scroll = $(window).scrollTop();
			srollInterno(scroll);
		});	
	}else{
		scrollHomePage(scroll);
		$(window).on('scroll', function(e){
			scroll = $(window).scrollTop();
			scrollHomePage(scroll);
		});	
	}
}

document.addEventListener('DOMContentLoaded',function(event){
	initSlider();
	hoverEmpreendimentos();
	toggleMenu();
	ancora();
	toggleTabs();
	checkUrlToHeader();
});