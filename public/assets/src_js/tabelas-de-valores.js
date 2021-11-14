$(".fake-input, form .dropdown-button").on("click", function () {
    let selectToOpen = $(this).data('select-id');
    $('form .dropdown-button[data-select-id="' + selectToOpen + '"],.fake-input[data-select-id="' + selectToOpen + '"],#lista-tabelas-' + selectToOpen).toggleClass('active');
});
(function selectTabela() {
    $('form ul li').on('click', function () {
        let itemSelecionado = $(this).data('value');
        let nomeItemSelecionado = $(this).text();
        let selectId = $(this).parent("ul").data('id');

        let fakeInput = $('.fake-input[data-select-id="' + selectId + '"]');
        $('form .dropdown-button[data-select-id="' + selectId + '"],.fake-input[data-select-id="' + selectId + '"],#lista-tabelas-' + selectId).toggleClass('active');
        fakeInput.text(nomeItemSelecionado);
        fakeInput.attr('data-selected', itemSelecionado);
    });
})();
