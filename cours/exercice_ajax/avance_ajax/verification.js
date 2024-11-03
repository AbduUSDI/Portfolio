// Fonction pour vérifier les réponses aux questions AJAX Avancés
function verifierReponseAvance(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim();
    const resultId = `${questionId}-result`;
    if (reponse.toLowerCase() === bonneReponse.toLowerCase()) {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-success">Bonne réponse !</div>`;
    } else {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-danger">Mauvaise réponse. Essayez encore !</div>`;
    }
}

// Fonction pour afficher les indices des exercices AJAX Avancés
function afficherIndiceAvance(niveau) {
    const indices = [
        "Indice 1 : Cette structure permet de capturer les erreurs en ajoutant un bloc de code spécifique.",
        "Indice 2 : Cette syntaxe asynchrone utilise les mots-clés async et await.",
        "Indice 3 : Le format de données utilisé pour échanger des informations entre client et serveur en AJAX.",
        "Indice 4 : Cet objet en JavaScript est utilisé pour représenter une opération asynchrone.",
        "Indice 5 : Méthode permettant d'utiliser un délai maximal pour une requête avec Promise."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses des exercices AJAX Avancés
function afficherReponsesAvance() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>try...catch</code></p>
            <p>Réponse Question 2 : <code>Async/Await</code></p>
            <p>Réponse Question 3 : <code>JSON</code></p>
            <p>Réponse Question 4 : <code>Promise</code></p>
            <p>Réponse Question 5 : <code>Promise.race</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
