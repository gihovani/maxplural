let filtro = null;
let changeShowcase = false;

function checkFilteredPhotos() {
    filtrar(filtro);
}

function filtrar(item) {
    let itens = $('.filter-box-content-item');
    itens.removeClass('show');
    itens.each(function () {
        if ($(this).data('filtered') === item) {
            $(this).addClass('show');
        }
    });
    $('.filter-box-nav span').click(function () {
        filtro = $(this).data('filter');
        $('.filter-box-nav span').removeClass('active');
        $(this).addClass('active');
        filtrar(filtro);
    });
}

function ativaThumb(srcImg, changeShowcase) {
    $('.thumbs-box img').each(function () {
        if ($(this).attr('src') === srcImg) {
            $(this).addClass('active');
        }
    });
    if (changeShowcase === true) {
        $('.showcase img').attr('src', srcImg);
    }
}

function thumbNavigate() {
    $('.thumbs-box img').click(function () {
        let imgUrl = $(this).attr('src');
        $('.thumbs-box img').removeClass('active');
        $(this).addClass('active');
        changeShowcase = true;
        ativaThumb(imgUrl, changeShowcase);
    });
}

function desmontaModal() {
    $('.zoomModal').remove();
}

function montaModal(srcImg) {
    let body = $('body');
    body.remove('.zoomModal');
    body.append('<div class="zoomModal d-flex">' +
        '<div class="backdrop" onclick="desmontaModal()"></div>' +
        '<div class="container relative" id="zoomModalWrapper">' +
        '<span class="closeModal" onclick="desmontaModal()"><img src="../assets/imgs/close-dark.svg" alt=""></span>' +
        '<div class="zoomModalBox" >' +
        '<div class="showcase">' +
        '<img class="w-100" src="' + srcImg + '" alt="">' +
        '</div>' +
        '<div class="thumbs text-center">' +
        '<div class="thumbs-box"></div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    $('.filter-box-content-item.show').each(function () {
        let imgThumb = $(this).find('img').attr('src');
        let thumb = '<img src="' + imgThumb + '" alt="thumb" />';
        $('.zoomModalBox .thumbs .thumbs-box').append(thumb);
    });
    ativaThumb(srcImg, changeShowcase);
    thumbNavigate();
}

function zoom() {
    $('.filter-box-content-item').click(function () {
        let srcImg = $(this).find('img').attr('src');
        montaModal(srcImg);
    });
}

$(function () {
    filtro = $('.filter-box-nav .active').data('filter');
    checkFilteredPhotos();
    zoom();
});
