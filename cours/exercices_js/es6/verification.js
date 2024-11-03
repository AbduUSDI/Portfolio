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
        "Indice 1 : `let` permet de changer la valeur d'une variable, mais pas `const`.",
        "Indice 2 : Utilisez la syntaxe de déstructuration : `const { nom, age } = utilisateur;`."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponses() {
    document.getElementById("reponses").innerHTML = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : let permet de redéfinir la valeur, const ne change pas</p>
            <p>Réponse Question 2 : const { nom, age } = utilisateur</p>
        </div>`;
}
