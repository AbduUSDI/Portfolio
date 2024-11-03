function verifierReponses() {
    const errorCheck = document.getElementById("error_check").value.trim().toLowerCase();
    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseErrorCheck = "error";
    const bonneReponseQ1 = "démarrer";
    const bonneReponseQ2 = "valider";
    const bonneReponseQ3 = "annuler";

    let resultat = "";

    if (errorCheck === bonneReponseErrorCheck && q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : BEGIN TRANSACTION démarre une transaction.",
        "Indice 2 : COMMIT enregistre tous les changements.",
        "Indice 3 : ROLLBACK annule les changements en cas d'erreur."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Gestion de Transactions :</strong></p>
            <ul>
                <li><strong>BEGIN TRANSACTION et COMMIT :</strong> Insérer une commande puis valider les changements.</li>
                <li><strong>BEGIN TRANSACTION et ROLLBACK :</strong> Mettre à jour une commande puis annuler les changements.</li>
                <li><strong>Gestion d'erreur :</strong> Si une erreur survient, annuler la transaction, sinon valider.</li>
                <li><strong>Questions :</strong></li>
                <ul>
                    <li>Q1 : BEGIN TRANSACTION est utilisé pour démarrer une transaction.</li>
                    <li>Q2 : COMMIT est utilisé pour valider les changements.</li>
                    <li>Q3 : ROLLBACK est utilisé pour annuler les changements en cas d'erreur.</li>
                </ul>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
