// worker.js

// Fonction de calcul
self.onmessage = function(event) {
    const limite = event.data;
    let somme = 0;

    // Calcul intensif
    for (let i = 1; i <= limite; i++) {
        somme += i;
    }

    // Envoi du résultat au thread principal
    self.postMessage(somme);
};
