// Fonction pour vérifier les réponses
function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim();
    const resultId = `${questionId}-result`;
    const message = reponse.toLowerCase() === bonneReponse.toLowerCase() 
        ? "Bonne réponse !" 
        : "Mauvaise réponse, essayez encore.";
        
    document.getElementById(resultId).innerHTML = `<div class="alert alert-${reponse.toLowerCase() === bonneReponse.toLowerCase() ? 'success' : 'danger'}">${message}</div>`;
}

// Afficher des indices
function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Le bloc try...catch capture des erreurs lors de l'exécution du code.",
        "Indice 2 : Utilisez console.error pour afficher des erreurs dans la console."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Afficher toutes les réponses
function afficherReponses() {
    document.getElementById("reponses").innerHTML = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : Capturer et gérer les erreurs</p>
            <p>Réponse Question 2 : console.error</p>
        </div>`;
}
