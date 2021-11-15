
$(".fake-input, form .dropdown-button").on("click", function () {
    let selectToOpen = $(this).data('select-id');
    $('form .dropdown-button[data-select-id="' + selectToOpen + '"],.fake-input[data-select-id="' + selectToOpen + '"],#select-input-' + selectToOpen).toggleClass('active');
});
(function selectTabela() {
    $('form ul li').on('click', function () {
        let itemSelecionado = $(this).data('value');
        let nomeItemSelecionado = $(this).text();
        let selectId = $(this).parent("ul").data('id');
        let inputId = $(this).parent('ul').attr('id');
        let fakeInput = $('.fake-input[data-select-id="' + selectId + '"]');
        $('form input.'+inputId).val(itemSelecionado);
        $('form .dropdown-button[data-select-id="' + selectId + '"],.fake-input[data-select-id="' + selectId + '"],#select-input-' + selectId).toggleClass('active');
        fakeInput.text(nomeItemSelecionado);
        fakeInput.attr('data-selected', itemSelecionado);
    });
})();

function submitForm(button){
    let formSubmetido = button.closest('form');

    if(true){
        formSubmetido.classList.add('sucesso');

        setTimeout(function(){
            formSubmetido.remove();
            $('.card').addClass('show');
        },1000);
    }else{
        $('.formgroup,.input-group').append('<span class="error">dado inválido ou incorreto</span>');
    }

}