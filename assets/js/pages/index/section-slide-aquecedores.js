const btnAvancar = document.querySelector('.acao.avancar');
  const btnVoltar = document.querySelector('.acao.voltar');

  const imagens = document.querySelectorAll('.itens-aquecedores img');
  const textos = document.querySelectorAll('.texto-slide');

  function atualizarTexto() {
    const imagemAtiva = document.querySelector('.itens-aquecedores img.primeiro');
    if (!imagemAtiva) return;

    const index = Number(imagemAtiva.dataset.index);

    textos.forEach((texto, i) => {
      texto.classList.toggle('ativo', i === index);
    });
  }

  function avancar() {
    imagens.forEach(img => {
      if (img.classList.contains('primeiro')) {
        img.classList.replace('primeiro', 'terceiro');
      } else if (img.classList.contains('terceiro')) {
        img.classList.replace('terceiro', 'segundo');
      } else if (img.classList.contains('segundo')) {
        img.classList.replace('segundo', 'primeiro');
      }
    });

    atualizarTexto();
  }

  function voltar() {
    imagens.forEach(img => {
      if (img.classList.contains('primeiro')) {
        img.classList.replace('primeiro', 'segundo');
      } else if (img.classList.contains('segundo')) {
        img.classList.replace('segundo', 'terceiro');
      } else if (img.classList.contains('terceiro')) {
        img.classList.replace('terceiro', 'primeiro');
      }
    });

    atualizarTexto();
  }

  btnAvancar.addEventListener('click', avancar);
  btnVoltar.addEventListener('click', voltar);

  atualizarTexto();