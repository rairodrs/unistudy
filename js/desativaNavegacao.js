document.querySelectorAll('.barra-de-navegacao a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Impede a navegação do link
        // Você pode adicionar feedback visual ou uma mensagem se desejar
        console.log('Navegação desativada!');
    });
});