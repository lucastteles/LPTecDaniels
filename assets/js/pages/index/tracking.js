window.dataLayer = window.dataLayer || [];

    document.addEventListener('click', function(e) {

      const link = e.target.closest('a');
      if (!link) return;

      if (link.href.includes('api.whatsapp.com') || 
          link.href.includes('wa.me')) {

        dataLayer.push({
          event: 'whatsapp_click',
          page_location: window.location.href,
          page_path: window.location.pathname,
          link_url: link.href,
          link_text: link.innerText.trim()
        });

      }

    });