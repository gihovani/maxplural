let filtro=null,changeShowcase=!1;function checkFilteredPhotos(){filtrar(filtro)}function filtrar(t){let a=$(".filter-box-content-item");a.removeClass("show"),a.attr("data-show",!1),a.each(function(){$(this).data("filtered")===t&&($(this).addClass("show"),$(this).attr("data-show",!0))}),$(".filter-box-nav span").click(function(){filtro=$(this).data("filter"),$(".filter-box-nav span").removeClass("active"),$(this).addClass("active"),filtrar(filtro)})}function ativaThumb(t,a){$(".thumbs-box img").each(function(){$(this).attr("src")===t&&$(this).addClass("active")}),!0===a&&$(".showcase img").attr("src",t)}function thumbNavigate(){$(".thumbs-box img").click(function(){let t=$(this).attr("src");$(".thumbs-box img").removeClass("active"),$(this).addClass("active"),ativaThumb(t,changeShowcase=!0)})}function desmontaModal(){$(".zoomModal").remove()}function montaModal(t,a){let o=$("body");o.remove(".zoomModal"),o.append('<div class="zoomModal d-flex"><div class="backdrop" onclick="desmontaModal()"></div><div class="container relative" id="zoomModalWrapper"><span class="closeModal" onclick="desmontaModal()"><img src="../assets/imgs/close-dark.svg" alt=""></span><div class="zoomModalBox" ><div class="showcase"><img class="w-100" src="'+t+'" alt=""></div><div class="thumbs text-center"><div class="thumbs-box"></div></div></div></div></div>'),"planta"===a?$("#"+a+" .filter-box-content-item").each(function(){let t='<img src="'+$(this).find("img").attr("src")+'" alt="thumb" />';$(".zoomModalBox .thumbs .thumbs-box").append(t)}):$("#"+a+" .filter-box-content-item.show").each(function(){let t='<img src="'+$(this).find("img").attr("src")+'" alt="thumb" />';$(".zoomModalBox .thumbs .thumbs-box").append(t)}),ativaThumb(t,changeShowcase),thumbNavigate()}function zoom(){$(".filter-box-content-item").click(function(){let t=$(this).closest("section").attr("id");montaModal($(this).find("img").attr("src"),t)})}$(function(){filtro=$(".filter-box-nav .active").data("filter"),checkFilteredPhotos(),zoom()});