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
        "Indice 1 : Utilisée avant Fetch, la méthode la plus ancienne est abrégée en XHR.",
        "Indice 2 : La méthode moderne utilise les Promises de manière native.",
        "Indice 3 : Pour simplifier les Promises, la syntaxe utilise les mots-clés async et await.",
        "Indice 4 : Cet objet représente une opération asynchrone avec des méthodes then et catch."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>XMLHttpRequest</code></p>
            <p>Réponse Question 2 : <code>Fetch API</code></p>
            <p>Réponse Question 3 : <code>Async/Await</code></p>
            <p>Réponse Question 4 : <code>Promise</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
