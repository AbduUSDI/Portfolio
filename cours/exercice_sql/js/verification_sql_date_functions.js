function verifierReponses() {
    const dateaddDays = document.getElementById("dateadd_days").value.trim();
    const datediffDays = document.getElementById("datediff_days").value.trim();

    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseDateadd = "-7";
    const bonneReponseDatediff = "30";

    const bonneReponseQ1 = "date";
    const bonneReponseQ2 = "jours";
    const bonneReponseQ3 = "dates";

    let resultat = "";

    if (dateaddDays === bonneReponseDateadd && datediffDays === bonneReponseDatediff &&
        q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : NOW retourne la date et l'heure actuelles.",
        "Indice 2 : DATEADD permet d'ajouter ou soustraire des jours, mois, ou années.",
        "Indice 3 : DATEDIFF retourne la différence en jours entre deux dates."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Fonctions de Date :</strong></p>
            <ul>
                <li>DATEADD : -7 (pour les 7 derniers jours)</li>
                <li>DATEDIFF : 30 (pour plus de 30 jours)</li>
                <li>Q1 : NOW retourne la date actuelle.</li>
                <li>Q2 : DATEADD ajoute ou soustrait des jours à une date.</li>
                <li>Q3 : DATEDIFF retourne la différence entre deux dates.</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
