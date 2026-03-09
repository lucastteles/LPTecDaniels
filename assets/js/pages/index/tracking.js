// Botão de orçamento
document.querySelectorAll('.btn-whatsapp').forEach(button => {
  button.addEventListener('click', function () {
    dataLayer.push({ 'event': 'whatsapp_click' });

    window.open(
      'https://api.whatsapp.com/send?phone=5521986171050&text=Ol%C3%A1,%20gostaria%20de%20solicitar%20um%20or%C3%A7amento%20para%20visita%20t%C3%A9cnica',
      '_blank'
    );
  });
});

// Botões de produto 
document.querySelectorAll('.btn-whatsapp-produto').forEach(button => {
  button.addEventListener('click', function () {
    dataLayer.push({ 'event': 'whatsapp_click' });
  });
});