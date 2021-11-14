$(".fake-input, form .dropdown-button").on("click", function(){
   var selectToOpen = $(this).data('select-id');
   $('form .dropdown-button[data-select-id="'+selectToOpen+'"],.fake-input[data-select-id="'+selectToOpen+'"],#lista-tabelas-'+selectToOpen).toggleClass('active');
});
(function selectTabela(){
   $('form ul li').on('click', function(){
      var itemSelecionado = $(this).data('value');
      var nomeItemSelecionado = $(this).text();
      var selectId = $(this).parent("ul").data('id');

      var fakeInput = $('.fake-input[data-select-id="'+selectId+'"]');
      $('form .dropdown-button[data-select-id="'+selectId+'"],.fake-input[data-select-id="'+selectId+'"],#lista-tabelas-'+selectId).toggleClass('active');
      fakeInput.text(nomeItemSelecionado);
      fakeInput.attr('data-selected',itemSelecionado);
   });
})();