(() => {
  const slide = document.querySelector('.slide');
  const items = slide.querySelectorAll('.item');
  const btnAvancar = document.querySelector('.avancar-servicos');
  const btnVoltar = document.querySelector('.voltar-servicos');

  const itemWidthWithMargin = 320;
  let currentIndex = 1;

  function updateItemSelecionado() {
    items.forEach(item => item.classList.remove('primario'));
    if (items[currentIndex]) {
      items[currentIndex].classList.add('primario');
    }

    btnVoltar.disabled = currentIndex === 0;
    btnAvancar.disabled = currentIndex === items.length - 1;
  }

  function centralizarItem(index) {
    const slideWidth = slide.clientWidth;
    const scrollPosition = (itemWidthWithMargin * index) - (slideWidth / 2) + (itemWidthWithMargin / 2);
    slide.scrollLeft = scrollPosition;
  }

  btnAvancar.addEventListener('click', () => {
    if (currentIndex < items.length - 1) {
      currentIndex++;
      centralizarItem(currentIndex);
      updateItemSelecionado();
    }
  });

  btnVoltar.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      centralizarItem(currentIndex);
      updateItemSelecionado();
    }
  });

  
})();
