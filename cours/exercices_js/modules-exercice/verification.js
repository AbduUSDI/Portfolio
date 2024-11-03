// verification.js

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
        "Indice 1 : La fonction d'addition est la plus simple, elle utilise le mot 'addition'.",
        "Indice 2 : Pour diviser, pensez à un terme mathématique commençant par 'divi'.",
        "Indice 3 : La soustraction est souvent opposée à l'addition."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>addition</code></p>
            <p>Réponse Question 2 : <code>division</code></p>
            <p>Réponse Question 3 : <code>soustraction</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
