// verification.js : Vérification des réponses

function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim().toLowerCase();
    const resultId = `${questionId}-result`;
    const message = reponse === bonneReponse.toLowerCase()
        ? "Bonne réponse !"
        : "Mauvaise réponse, essayez encore.";
        
    document.getElementById(resultId).innerHTML = `<div class="alert alert-${reponse === bonneReponse.toLowerCase() ? 'success' : 'danger'}">${message}</div>`;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Les Service Workers sont utilisés pour gérer les requêtes réseau et fournir une expérience hors ligne.",
        "Indice 2 : Les trois étapes du cycle de vie sont : installation, activation, et fonctionnement."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponses() {
    document.getElementById("reponses").innerHTML = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : Fournir une expérience hors ligne et gérer le cache</p>
            <p>Réponse Question 2 : Installation, activation, fonctionnement</p>
        </div>`;
}
