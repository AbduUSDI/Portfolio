function verifierReponses() {
    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseQ1 = "créer";
    const bonneReponseQ2 = "supprimer";
    const bonneReponseQ3 = "pour éviter des erreurs si la base de données existe déjà ou n'existe pas";

    let resultat = "";

    if (q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou.includes("éviter")) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : CREATE DATABASE sert à initialiser une nouvelle base.",
        "Indice 2 : DROP DATABASE permet de supprimer une base existante.",
        "Indice 3 : IF EXISTS et IF NOT EXISTS sont utiles pour éviter les erreurs si la base de données existe déjà ou non."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Gestion de Bases de Données :</strong></p>
            <ul>
                <li>Q1 : CREATE DATABASE est utilisé pour créer une nouvelle base de données.</li>
                <li>Q2 : DROP DATABASE est utilisé pour supprimer une base de données existante.</li>
                <li>Q3 : IF EXISTS et IF NOT EXISTS sont utilisés pour éviter les erreurs si la base de données existe déjà ou non.</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
