let filtro = null;
let changeShowcase = false;

function checkFilteredPhotos() {
    filtrar(filtro);
}

function filtrar(item) {
    let itens = $('.filter-box-content-item');
    itens.removeClass('show');
    itens.attr('data-show',false);
    itens.each(function () {
        if ($(this).data('filtered') === item) {
            $(this).addClass('show');
            $(this).attr('data-show',true);
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
// function hoverzoom(){
//     var showCase = $('.zoomModal.planta .showcase');
//     $('div.hoverZoom').remove();
//     showCase.append('<div class="hoverZoom"><img></div>');
//     var hoverZoom = $('.hoverZoom');
//     showCase.mouseover(function(e){
//         var imageToZoom = showCase.find('img').attr('src');
//         $('.hoverZoom img').attr('src',imageToZoom);
//     });
//     showCase.mousemove(function(e){
//         var showcaseWidthLimit = showCase.innerWidth();
//         var showcaseHeightLimit  = showCase.innerHeight();
//         var coordX = e.clientX - showCase[0].getBoundingClientRect().left;
//         var coordY = e.clientY - showCase[0].getBoundingClientRect().top;
//         var bgMousePositionX = Math.floor((coordX/showcaseWidthLimit)*100);
//         var bgMousePositionY = Math.floor((coordY/showcaseHeightLimit)*100);
//         // hoverZoom.attr('style','left:'+coordX+'px; top:'+coordY+'px;');
//         hoverZoom.addClass('active');
//         $('.zoomModalBox').addClass('hovered');
//         bgMousePositionX = ((bgMousePositionX < 25) ? 25 : bgMousePositionX);
//         bgMousePositionX = ((bgMousePositionX > 75) ? 75 : bgMousePositionX);
//         bgMousePositionY = ((bgMousePositionY < 10) ? 10 : bgMousePositionY);
//         bgMousePositionY = ((bgMousePositionY > 75) ? 75 : bgMousePositionY);
//         $('.hoverZoom img').attr('style','transform:scale(2) translate(-'+bgMousePositionX+'%, -'+bgMousePositionY+'%)');
//         if((coordX < 0 || coordX > showcaseWidthLimit) || (coordY < 0 || coordY > showcaseHeightLimit)){
//             hoverZoom.removeClass('active');
//             $('.zoomModalBox').removeClass('hovered');
//         }
//     });
//     showCase.mouseenter(function(){
//         hoverZoom.addClass('active');
//     }).mouseleave(function(){
//         hoverZoom.removeClass('active');
//     });
// }
function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);
    /*create lens:*/
    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    /*insert lens:*/
    img.parentElement.insertBefore(lens, img);
    /*calculate the ratio between result DIV and lens:*/
    cx = result.offsetWidth / lens.offsetWidth;
    cy = result.offsetHeight / lens.offsetHeight;
    /*set background properties for the result DIV:*/
    result.style.backgroundImage = "url('" + img.src + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
    /*execute a function when someone moves the cursor over the image, or the lens:*/
    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    /*and also for touch screens:*/
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);
    function moveLens(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        /*calculate the position of the lens:*/
        x = pos.x - (lens.offsetWidth / 2);
        y = pos.y - (lens.offsetHeight / 2);
        /*prevent the lens from being positioned outside the image:*/
        if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
        if (x < 0) {x = 0;}
        if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
        if (y < 0) {y = 0;}
        /*set the position of the lens:*/
        lens.style.left = x + "px";
        lens.style.top = y + "px";
        /*display what the lens "sees":*/
        result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }
    function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
    }
}

function montaModal(srcImg,section) {
    let body = $('body');
    body.remove('.zoomModal');
    body.append('<div class="zoomModal d-flex '+section+'">' +
        '<div class="backdrop" onclick="desmontaModal()"></div>' +
        '<div class="container relative" id="zoomModalWrapper">' +
        '<span class="closeModal" onclick="desmontaModal()"><img src="../assets/imgs/close-dark.svg" alt=""></span>' +
        '<div class="zoomModalBox" >' +
        '<div class="showcase">' +
        '<img id="imgRef" class="w-100" src="' + srcImg + '" alt="">' +
        '</div>' +
        '<div class="thumbs text-center">' +
        '<div class="thumbs-box"></div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div id="zoomedImg"></div>' +
        '<div></div>' +
        '</div>');
    if(section === 'planta'){
        $('#'+section+' .filter-box-content-item').each(function(){
            let imgThumb = $(this).find('img').attr('src');
            let thumb = '<img src="' + imgThumb + '" alt="thumb" />';
            $('.zoomModalBox .thumbs .thumbs-box').append(thumb);
        });
        $('.showcase').mouseenter(function(){
            imageZoom('imgRef', 'zoomedImg');
            $('#zoomedImg').addClass('active');
        }).mouseleave(function(){
            $('#zoomedImg').removeClass('active');
        });
    }else{
        $('#'+section+' .filter-box-content-item.show').each(function () {
            let imgThumb = $(this).find('img').attr('src');
            let thumb = '<img src="' + imgThumb + '" alt="thumb" />';
            $('.zoomModalBox .thumbs .thumbs-box').append(thumb);
        });
    }

    ativaThumb(srcImg, changeShowcase);
    thumbNavigate();
}

function zoom() {
    $('.filter-box-content-item').click(function () {
        let section = $(this).closest('section').attr('id');
        let srcImg = $(this).find('img').attr('src');
        montaModal(srcImg, section);
    });
}

$(function () {
    filtro = $('.filter-box-nav .active').data('filter');
    checkFilteredPhotos();
    zoom();
});
