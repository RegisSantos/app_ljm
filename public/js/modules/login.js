document.addEventListener("DOMContentLoaded", (event) => {
  
  console.log("login.js loaded!");

  // Adiciona um ouvinte de evento de clique ao ícone de alternância de senha  
  $('#togglePassword').on('click', function() {

    console.log("Toggle password visibility clicked");
    
    // alternar o atributo type
    const iPass = $('#iPass');
    const type = iPass.attr('type') === 'password' ? 'text' : 'password';
    iPass.attr('type', type);
    
    // alterar o ícone
    $(this).toggleClass('bi-eye bi-eye-slash');
  });

  // Transiciona entre os passos do login
  $('#fPass').on('click', function() {
    
    // Oculta o passo 1 e mostra o passo 2
    $('#step-1').removeClass('d-block').addClass('d-none');
    $('#step-2').removeClass('d-none').addClass('d-block');
  });

  $('#backToLogin').on('click', function() {
    
    // Oculta o passo 2 e mostra o passo 1
    $('#step-2').removeClass('d-block').addClass('d-none');
    $('#step-1').removeClass('d-none').addClass('d-block');
  });
});