function initSlider(){$(".slider-1").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:$(".prev"),nextArrow:$(".next"),infinite:!1,adaptiveHeight:!0}),$(".slider-1__only-dots").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,infinite:!0}),$(".slider-3").slick({slidesToShow:3,slidesToScroll:1,arrows:!1,dots:!1,autoplay:!1,responsive:[{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!1,autoplay:!0,autoplaySpeed:5e3,speed:600}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,autoplay:!0,autoplaySpeed:5e3,speed:600}}]})}function ancora(){let e=$("html, body"),o=window.location.hash.replace("#","");if($(".anchor").click(function(){return e.animate({scrollTop:$($.attr(this,"href")).offset().top-180},500),!1}),!o.length)return!1;let t=$("#"+o);if(!t.length)return!1;e.animate({scrollTop:t.offset().top-150},500)}function hoverEmpreendimentos(){$("#empreendimentos .item").mouseenter(function(){$("#empreendimentos .item").addClass("item-inativo").removeClass("item-ativo"),$(this).addClass("item-ativo").removeClass("item-inativo")})}function toggleMenu(){$(".hamburguerMenu,.closeMenu,.closeMenu .anchor").click(function(){$("nav").toggleClass("actived")})}function scrollPage(e,o){$("header").toggleClass("bg-opaco",e>=o)}function checkUrlToHeader(){let e=window.location.href,o=$(window).scrollTop(),t=$("#baseUrl").attr("href");if([t,t+"/",t+"?",t+"/?"].indexOf(e)<0){let e=$("header").innerHeight()-57;scrollPage(o,0),$(".content").attr("style","padding-top:"+e+"px;"),$(window).on("scroll",function(){scrollPage(o=$(window).scrollTop(),0)})}else scrollPage(o,180),$(window).on("scroll",function(){scrollPage(o=$(window).scrollTop(),180)})}function toggleSearchInput(){let e;$("#headerSearch .icon-search, #headerSearch input").click(function(){return e="headerSearch",$("#"+e+" form").addClass("active"),e}),$("#newsBox span").click(function(){return e="newsBox",$("#"+e+" form").addClass("active"),e}),$("body").click(function(o){closeToggledInputs(e,o)})}function closeToggledInputs(e,o){let t=$("#"+e+" form");if(null!==e&&t.hasClass("active")){if(o.target.id===e)return;if($(o.target).closest("#"+e).length)return;$("#headerSearch form, #newsBox form").removeClass("active")}}function loader(){setTimeout(function(){$(".loader").fadeOut()},300)}$(function(){initSlider(),hoverEmpreendimentos(),toggleMenu(),ancora(),checkUrlToHeader(),toggleSearchInput(),loader()});