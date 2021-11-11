$(".fake-input, form .dropdown-button").on("click", function(){
   $('form .dropdown-button,.fake-input,#lista-tabelas').toggleClass('active');
});
(function selectTabela(){
   $('#lista-tabelas li').on('click', function(){
      var itemSelecionado = $(this).data('value');
      var nomeItemSelecionado = $(this).text();
      var fakeInput = $('.fake-input');
      $('form .dropdown-button,.fake-input,#lista-tabelas').toggleClass('active');
      fakeInput.text(nomeItemSelecionado);
      fakeInput.attr('data-selected',itemSelecionado);
   });
})();