function toggleTabs(){$("#tabs .tab").click(function(){let t=$(this).attr("id");$("#tabs .tab, .tab-content").removeClass("active"),$('.tab-content[data-target="'+t+'"]').addClass("active"),$(this).addClass("active")});let t=window.location.hash;$(t).length&&$(t).trigger("click")}$(function(){toggleTabs()});