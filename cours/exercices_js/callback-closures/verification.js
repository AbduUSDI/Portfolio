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
        "Indice 1 : Une fonction passée comme paramètre et exécutée dans une autre est appelée 'callback'.",
        "Indice 2 : Une closure retourne une fonction imbriquée ayant accès aux variables de son parent."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>callback</code></p>
            <p>Réponse Question 2 : <code>fonction imbriquée</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
