$(function(){let t=$(".status-box-itens__item"),s=0,e=0,a=$(".status-box-total .etapa-status span.value"),n=$(".status-box-total .etapa-status span.progress");t.each(function(e){let a=0,n=$(".status-box-itens__item").eq(e).find(".etapa-status").data("status"),l=$(".status-box-itens__item:eq("+e+") span.value"),i=$(".status-box-itens__item:eq("+e+") span.progress");s+=n/t.length,setTimeout(function(){setInterval(function(){if(a>n)clearInterval(this);else{let t=a-100,s=a-15;l.text(a+"%"),i.attr("style","transform:translateX("+t+"%);"),a>10&&l.addClass("colorWhite"),a>15&&l.attr("style","margin-left:"+s+"%;"),++a}},35)},2e3)}),setTimeout(function(){setInterval(function(){if(e>s)clearInterval(this);else{let t=e-100,s=e-5;a.text(e+"%"),n.css("transform","translateX("+t+"%)"),e>2&&a.addClass("colorWhite"),e>5&&a.attr("style","margin-left:"+s+"%;"),++e}},50)},2500)});