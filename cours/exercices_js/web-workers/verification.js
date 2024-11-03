// Fonction pour vérifier la réponse
function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim();
    const resultId = `${questionId}-result`;
    const message = reponse === bonneReponse ? "Bonne réponse !" : "Mauvaise réponse, essayez encore.";

    document.getElementById(resultId).innerHTML = `<div class="alert alert-${reponse === bonneReponse ? 'success' : 'danger'}">${message}</div>`;
}

// Afficher des indices
function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Les Web Workers sont utilisés pour gérer des tâches sans bloquer l'interface utilisateur.",
        "Indice 2 : Utilisez `postMessage` pour envoyer des données au Worker."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Afficher toutes les réponses
function afficherReponses() {
    document.getElementById("reponses").innerHTML = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : Exécuter des tâches en arrière-plan</p>
            <p>Réponse Question 2 : postMessage</p>
        </div>`;
}
