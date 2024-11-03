// Fonction pour vérifier les réponses aux questions
function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId)?.value.trim();
    const resultId = `${questionId}-result`;

    // Vérification si la réponse est correcte
    if (reponse !== undefined) {
        if (reponse === bonneReponse) {
            document.getElementById(resultId).innerHTML = `<div class="alert alert-success">Bonne réponse !</div>`;
        } else {
            document.getElementById(resultId).innerHTML = `<div class="alert alert-danger">Mauvaise réponse. Essayez encore !</div>`;
        }
    } else {
        console.error("L'élément avec l'ID fourni n'existe pas.");
    }
}

// Fonction pour afficher les indices
function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : La méthode pour convertir un objet en JSON commence par 'JSON'.",
        "Indice 2 : Pour ajouter une propriété, utilisez l'opérateur de point."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>JSON.stringify</code></p>
            <p>Réponse Question 2 : <code>utilisateur.email = 'example@example.com'</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}
