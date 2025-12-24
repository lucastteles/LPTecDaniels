(function () {
  const nav = document.querySelector("nav");
  const botaoMenu = nav.querySelector("button.menu");
  const opcoes = nav.querySelector("div.opcoes");
  const links = opcoes.querySelectorAll("a, button.hospedar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 500) {
      nav.classList.add("scroll");
    } else {
      nav.classList.remove("scroll");
    }
  });

  window.addEventListener('scroll', () => {
    const altura = window.scrollY
    if (altura < 500) nav.classList.remove('scrollDois')
    else nav.classList.add('scrollDois')
  })

  botaoMenu.addEventListener("click", function () {
    botaoMenu.classList.toggle("ativo");
    opcoes.classList.toggle("mostrar");
  });

  links.forEach((el) => {
    el.addEventListener("click", function () {
      botaoMenu.classList.remove("ativo");
      opcoes.classList.remove("mostrar");
    });
  });
})();
