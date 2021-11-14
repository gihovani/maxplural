// $('.status-box-itens__item').each(function(){
//     let i;
//
//     for (i = 0; i < status; i++){
//
//
//         console.log(i)
//     }
// });
function increment() {
    let etapas = $(".status-box-itens__item");
    let statusTotal = 0;
    let t = 0;
    let $valorTotal = $('.status-box-total .etapa-status span.value');
    let $barraTotal = $('.status-box-total .etapa-status span.progress');
    etapas.each(function (index) {
        let i = 0;
        let status = $('.status-box-itens__item').eq(index).find('.etapa-status').data('status');
        let progress = $(".status-box-itens__item:eq(" + index + ") span.value");
        let progressBar = $(".status-box-itens__item:eq(" + index + ") span.progress");
        statusTotal = statusTotal + (status / etapas.length);
        setTimeout(function () {
            setInterval(function () {
                if (i > status) {
                    clearInterval(this);
                } else {
                    let progressStatus = i - 100;
                    let marginValue = i - 15;
                    progress.text(i + '%');
                    progressBar.attr('style', 'transform:translateX(' + progressStatus + '%);');
                    if (i > 10) {
                        progress.addClass('colorWhite')
                    }
                    if (i > 15) {
                        progress.attr('style', 'margin-left:' + marginValue + "%;");
                    }
                    (++i);
                }
            }, 35);
        }, 2000);
    });
    setTimeout(function () {
        setInterval(function () {
            if (t > statusTotal) {
                clearInterval(this);
            } else {
                let progressTotal = t - 100;
                let progressTotalValueMargin = t - 5;
                $valorTotal.text(t + "%");
                $barraTotal.css('transform', 'translateX(' + progressTotal + "%)");
                if (t > 2) {
                    $valorTotal.addClass('colorWhite')
                }
                if (t > 5) {
                    $valorTotal.attr('style', 'margin-left:' + progressTotalValueMargin + "%;");
                }
                (++t);
            }
        }, 50);
    }, 2500);
}

increment();
