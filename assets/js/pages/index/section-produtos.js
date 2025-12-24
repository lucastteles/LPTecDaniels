(function() {
  const sectionProdutos = document.querySelector("section.produtos");
  const toggle = sectionProdutos.querySelector("div.toggle");
  const itens = sectionProdutos.querySelector("div.itens");

  toggle.addEventListener("click", function() {
    itens.classList.toggle("ativo");
  });
})();