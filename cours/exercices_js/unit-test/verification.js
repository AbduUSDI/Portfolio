// verification.js

// Fonction pour vérifier les réponses aux questions
function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim();
    const resultId = `${questionId}-result`;

    if (reponse.toLowerCase() === bonneReponse.toLowerCase()) {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-success">Bonne réponse !</div>`;
    } else {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-danger">Mauvaise réponse. Essayez encore !</div>`;
    }
}

// Fonction pour afficher les indices
function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : La fonction commence par un 'e' et est utilisée pour des vérifications.",
        "Indice 2 : Pour vérifier l'égalité, utilisez une méthode qui contient 'to'.",
        "Indice 3 : Les mots-clés de Jest sont très courts et faciles à mémoriser."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>expect</code></p>
            <p>Réponse Question 2 : <code>toBe</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
