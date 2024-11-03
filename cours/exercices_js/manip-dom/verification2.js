// Fonction pour vérifier les réponses aux questions
function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim();
    const resultId = `${questionId}-result`;

    if (reponse === bonneReponse) {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-success">Bonne réponse !</div>`;
    } else {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-danger">Mauvaise réponse. Essayez encore !</div>`;
    }
}

// Fonction pour afficher les indices
function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : La création d'un élément utilise 'create' suivi de 'Element'.",
        "Indice 2 : Pour ajouter une classe, regardez 'classList'.",
        "Indice 3 : Le clonage se fait avec 'cloneNode'."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>createElement</code></p>
            <p>Réponse Question 2 : <code>classList.add</code></p>
            <p>Réponse Question 3 : <code>cloneNode</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
