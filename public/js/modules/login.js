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
    if (typeof window.toggleFade === 'function') {
      window.toggleFade('step-1', 'step-2');
    } else {
      console.error('A função Window.toggleFade não está disponível');
    }
    
  });

  $('#backToLogin').on('click', function() {
    
    // Oculta o passo 2 e mostra o passo 1
    if (typeof window.toggleFade === 'function') {
      window.toggleFade('step-2', 'step-1');
    } else {
      console.error('A função Window.toggleFade não está disponível');
    }
  });
});