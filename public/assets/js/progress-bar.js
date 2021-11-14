// $('.status-box-itens__item').each(function(){
//     var i;
//
//     for (i = 0; i < status; i++){
//
//
//         console.log(i)
//     }
// });
function increment(){
    var etapas = $(".status-box-itens__item");
    var statusTotal = 0;
    var t = 0;
    var $valorTotal = $('.status-box-total .etapa-status span.value');
    var $barraTotal = $('.status-box-total .etapa-status span.progress');
    etapas.each(function(index){
        var i = 0;
        var status = $('.status-box-itens__item').eq(index).find('.etapa-status').data('status');
        var progress = $(".status-box-itens__item:eq("+ index +") span.value");
        var progressBar = $(".status-box-itens__item:eq("+ index +") span.progress");
        statusTotal = statusTotal + (status / etapas.length);
        setTimeout(function(){
            setInterval(function(){
                if(i > status){
                    clearInterval(this);
                }else{
                    var progressStatus = i - 100;
                    var marginValue = i - 15;
                    progress.text(i+'%');
                    progressBar.attr('style','transform:translateX('+ progressStatus +'%);');
                    if(i > 10){
                        progress.addClass('colorWhite')
                    }
                    if(i > 15){
                        progress.attr('style','margin-left:'+marginValue+"%;");
                    }
                    (++i);
                }
            },35);
        },2000);
    });
    setTimeout(function (){
        setInterval(function(){
            if(t > statusTotal){
                clearInterval(this);
            }else{
                var progressTotal = t - 100;
                var progressTotalValueMargin = t - 5;
                $valorTotal.text(t+"%");
                $barraTotal.css('transform','translateX('+ progressTotal +"%)");
                if(t > 2){
                    $valorTotal.addClass('colorWhite')
                }
                if (t > 5){
                    $valorTotal.attr('style','margin-left:'+progressTotalValueMargin+"%;");
                }
                (++t);
            }
        },50);
    },2500);
}
increment();
