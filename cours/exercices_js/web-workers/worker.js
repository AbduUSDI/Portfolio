// Calculer la somme des nombres jusqu'à un certain nombre
self.onmessage = function(event) {
    const limit = event.data;
    let sum = 0;
    for (let i = 1; i <= limit; i++) {
        sum += i;
    }
    postMessage(sum);
};
