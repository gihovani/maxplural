$(function () {
    $('.fake-input, form .dropdown-button').on('click', function () {
        let selectToOpen = $(this).data('select-id');
        $('form .dropdown-button[data-select-id="' + selectToOpen + '"],.fake-input[data-select-id="' + selectToOpen + '"],#select-input-' + selectToOpen).toggleClass('active');
    });

    $('form ul li').on('click', function () {
        let itemSelecionado = $(this).data('value');
        let nomeItemSelecionado = $(this).text();
        let ul = $(this).parent('ul');
        let selectId = ul.data('id');
        let inputId = ul.attr('id');
        let fakeInput = $('.fake-input[data-select-id="' + selectId + '"]');
        $('form input.' + inputId).val(itemSelecionado);
        $('form .dropdown-button[data-select-id="' + selectId + '"],.fake-input[data-select-id="' + selectId + '"],#select-input-' + selectId).toggleClass('active');
        fakeInput.text(nomeItemSelecionado);
        fakeInput.attr('data-selected', itemSelecionado);
    })
});
