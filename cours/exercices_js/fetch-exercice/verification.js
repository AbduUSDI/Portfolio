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
        "Indice 1 : La méthode commence par 'f'.",
        "Indice 2 : Utilisez un bloc pour capturer les erreurs après une tentative de fetch.",
        "Indice 3 : La réponse JSON est obtenue avec une méthode de l’objet `response`."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses correctes
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>fetch</code></p>
            <p>Réponse Question 2 : <code>catch</code></p>
            <p>Réponse Question 3 : <code>response.json()</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
