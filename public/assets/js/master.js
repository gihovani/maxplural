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
	if (scroll >= 180) {
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
	var scroll = $(window).scrollTop();
	if((url !== "http://localhost:8081/") && (url !== "http://localhost:8081/?")){
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
function toggleSearchInput() {
	var input;
	$('#headerSearch .icon-search, #headerSearch input').click(function(e){
		input = 'headerSearch';
		$('#'+input+' form').addClass('active');
		return input;
	});
	$('#newsBox span').click(function(e){
		input = 'newsBox';
		$('#'+input+' form').addClass('active');
		return input;
	});
	$('body').click(function(e){
		closeToggledInputs(input,e);
	});

}

function closeToggledInputs(input,e) {
	var inputForm = $('#'+input + ' form');
	if(input !== null && inputForm.hasClass('active')) {
		if (e.target.id == input)
			return;
		if ($(e.target).closest('#' + input).length)
			return;
		$('#headerSearch form, #newsBox form').removeClass('active');
	}
}


document.addEventListener('DOMContentLoaded',function(event){
	initSlider();
	hoverEmpreendimentos();
	toggleMenu();
	ancora();
	toggleTabs();
	checkUrlToHeader();
	toggleSearchInput();
});