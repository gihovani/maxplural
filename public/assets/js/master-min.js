function initSlider(){$(".slider-1").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!1,prevArrow:$(".prev"),nextArrow:$(".next"),infinite:!1}),$(".slider-1__only-dots").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,infinite:!0}),$(".slider-3").slick({slidesToShow:3,slidesToScroll:1,arrows:!1,dots:!1,autoplay:!1,responsive:[{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0,dots:!1,autoplay:!0,autoplaySpeed:5e3,speed:600}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1,autoplay:!0,autoplaySpeed:5e3,speed:600}}]})}function ancora(){let e=$("html, body"),o=window.location.hash.replace("#","");$(".anchor").click(function(){return e.animate({scrollTop:$($.attr(this,"href")).offset().top-180},500),!1}),o.length>0&&e.animate({scrollTop:$("#"+o).offset().top-150},500)}function hoverEmpreendimentos(){$("#empreendimentos .item").mouseenter(function(){$("#empreendimentos .item").addClass("item-inativo").removeClass("item-ativo"),$(this).addClass("item-ativo").removeClass("item-inativo")})}function toggleMenu(){$(".hamburguerMenu,.closeMenu,.closeMenu .anchor").click(function(){$("body").toggleClass("scrollYLock"),$("nav").toggleClass("actived")})}function toggleTabs(){$("#tabs .tab").click(function(){let e=$(this).attr("id");$("#tabs .tab, .tab-content").removeClass("active"),$(".tab-content[data-target='"+e+"']").addClass("active"),$(this).addClass("active")})}function scrollHomePage(e){e>=180?$("header").addClass("bg-opaco"):$("header").removeClass("bg-opaco")}function srollInterno(e){$("header").addClass("bg-opaco")}function checkUrlToHeader(){let e=window.location.href,o=$(window).scrollTop();"http://localhost:8081/"!==e&&"http://localhost:8081/?"!==e?setTimeout(function(){let e=$("header").innerHeight()-57;srollInterno(o),$(".content").attr("style","padding-top:"+e+"px;"),$(window).on("scroll",function(){srollInterno(o=$(window).scrollTop())})},90):(scrollHomePage(o),$(window).on("scroll",function(){scrollHomePage(o=$(window).scrollTop())}))}function toggleSearchInput(){let e;$("#headerSearch .icon-search, #headerSearch input").click(function(){return e="headerSearch",$("#"+e+" form").addClass("active"),e}),$("#newsBox span").click(function(){return e="newsBox",$("#"+e+" form").addClass("active"),e}),$("body").click(function(o){closeToggledInputs(e,o)})}function closeToggledInputs(e,o){let t=$("#"+e+" form");if(null!==e&&t.hasClass("active")){if(o.target.id===e)return;if($(o.target).closest("#"+e).length)return;$("#headerSearch form, #newsBox form").removeClass("active")}}function loader(){setTimeout(function(){$(".loader").fadeOut()},120)}document.addEventListener("DOMContentLoaded",function(){initSlider(),hoverEmpreendimentos(),toggleMenu(),ancora(),toggleTabs(),checkUrlToHeader(),toggleSearchInput(),loader()});