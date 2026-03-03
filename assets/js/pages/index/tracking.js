// window.dataLayer = window.dataLayer || [];

//     document.addEventListener('click', function(e) {

//       const link = e.target.closest('a');
//       if (!link) return;

//       if (link.href.includes('api.whatsapp.com') || 
//           link.href.includes('wa.me')) {

//         dataLayer.push({
//           event: 'whatsapp_click',
//           page_location: window.location.href,
//           page_path: window.location.pathname,
//           link_url: link.href,
//           link_text: link.innerText.trim()
//         });

//       }

//     });

  window.dataLayer = window.dataLayer || [];

  document.querySelectorAll('.btn-whatsapp').forEach(button => {
    button.addEventListener('click', function(e) {

      e.preventDefault(); // 🔥 impede o <a> de abrir sozinho

      dataLayer.push({ 
        event: 'whatsapp_click' 
      });

      window.open(
        'https://api.whatsapp.com/send?phone=5521986171050&text=Gostaria+de+or%C3%A7amento+para+visita+t%C3%A9cnica',
        '_blank'
      );

    });
  });
