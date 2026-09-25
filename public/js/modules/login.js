document.addEventListener("DOMContentLoaded", (event) => {
  
  console.log("DOM fully loaded and parsed");

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
});