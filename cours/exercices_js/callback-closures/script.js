// Fonction pour exécuter un callback
function executeCallback(callback, message) {
    callback(message);
}

function logMessage(message) {
    document.getElementById("callback-result").innerHTML = `<div class="alert alert-info">${message}</div>`;
}

// Fonction pour créer une closure de compteur
function createCounter() {
    let count = 0;
    return function() {
        count++;
        return count;
    };
}

const incrementCounter = createCounter();

function incrementCounterDisplay() {
    const count = incrementCounter();
    document.getElementById("closure-result").innerHTML = `<div class="alert alert-info">Compteur : ${count}</div>`;
}
