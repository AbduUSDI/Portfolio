// Désactiver le défilement de la page principale lors de l’interaction avec l’iframe
document.querySelectorAll('.game-iframe').forEach(gameIframe => {
    // Ajouter un événement de focus pour l'iframe
    gameIframe.addEventListener('focus', () => {
        document.body.style.overflow = 'hidden'; // Désactiver le scroll de la page principale
    });

    // Ajouter un événement de blur (perte de focus) pour l'iframe
    gameIframe.addEventListener('blur', () => {
        document.body.style.overflow = 'auto'; // Réactiver le scroll de la page principale
    });

    // Empêcher le scroll lors de la navigation dans l'iframe par la souris
    gameIframe.addEventListener('mouseenter', () => {
        document.body.style.overflow = 'hidden';
    });
    gameIframe.addEventListener('mouseleave', () => {
        document.body.style.overflow = 'auto';
    });
});
