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
        "Indice 1 : Utilisez 'get' suivi de 'ById' pour sélectionner un élément par son ID.",
        "Indice 2 : Pour sélectionner une classe, utilisez 'getElementsByClassName'.",
        "Indice 3 : Pour modifier le texte, pensez à 'content'."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>getElementById</code></p>
            <p>Réponse Question 2 : <code>getElementsByClassName</code></p>
            <p>Réponse Question 3 : <code>textContent</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
