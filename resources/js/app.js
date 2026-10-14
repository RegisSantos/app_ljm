document.addEventListener("DOMContentLoaded", (event) => {

    console.log("DOM fully loaded and parsed");
    console.log("app.js loaded!");
});

// alterna entre esconder e exibir elementos na DOM
function toggleFade(disparo, alvo) {

    let elDisparo = $('#' + disparo);
    let elAlvo = $('#' + alvo);

    limparCampos(elAlvo);

    // Oculta o passo 1 e mostra o passo 2
    elDisparo.fadeOut(400, function() {
      $(this).removeClass('d-block').addClass('d-none');
      elAlvo
        .removeClass('d-none')
        .hide()
        .fadeIn(400);
    });
}

// limpa campos da div que recebe fade out
function limparCampos(elDisparo) {

    // limpa os campos input, textarea, e retorna todos os campos selects para opção de valor vazio
    elDisparo.find('input', 'textarea', 'select').each(function() {
        const campo = $(this);

        if (campo.is('select')) {
            campo.val('');
        } else {
            campo.val('');
        }
    });
}

window.toggleFade = toggleFade;