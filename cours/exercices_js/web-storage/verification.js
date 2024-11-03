// verification.js

// Fonction pour vérifier les réponses
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
        "Indice 1 : Pour sauvegarder, utilisez une méthode de localStorage qui commence par 'set'.",
        "Indice 2 : Utilisez une méthode qui supprime tout, similaire à celle de localStorage.",
        "Indice 3 : Pour obtenir une valeur, la méthode commence par 'get'."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses correctes
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>setItem</code></p>
            <p>Réponse Question 2 : <code>clear</code></p>
            <p>Réponse Question 3 : <code>getItem</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
