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
        "Indice 1 : Pour convertir un objet en JSON, pensez à 'string'.",
        "Indice 2 : Pour lire depuis localStorage, cherchez 'get'.",
        "Indice 3 : Pour transformer une chaîne JSON en objet, pensez à 'parse'."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>JSON.stringify</code></p>
            <p>Réponse Question 2 : <code>localStorage.getItem</code></p>
            <p>Réponse Question 3 : <code>JSON.parse</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
