function verifierReponses() {
    const countColumn = document.getElementById("count_column").value.trim();
    const sumColumn = document.getElementById("sum_column").value.trim();
    const avgColumn = document.getElementById("avg_column").value.trim();
    const countGroupbyColumn = document.getElementById("count_groupby_column").value.trim();
    const groupbyColumn = document.getElementById("groupby_column").value.trim();

    const q1Trou1 = document.getElementById("q1_trou1").value.trim().toLowerCase();
    const q1Trou2 = document.getElementById("q1_trou2").value.trim().toLowerCase();
    const q2Trou1 = document.getElementById("q2_trou1").value.trim().toLowerCase();
    const q3Trou1 = document.getElementById("q3_trou1").value.trim().toLowerCase();

    const bonneReponseCount = "commande_id";
    const bonneReponseSum = "montant";
    const bonneReponseAvg = "montant";
    const bonneReponseCountGroupby = "commande_id";
    const bonneReponseGroupby = "client_id";

    const bonneReponseQ1Trou1 = "compter";
    const bonneReponseQ1Trou2 = "enregistrements";
    const bonneReponseQ2Trou1 = "moyenne";
    const bonneReponseQ3Trou1 = "regrouper";

    let resultat = "";

    if (countColumn === bonneReponseCount && sumColumn === bonneReponseSum &&
        avgColumn === bonneReponseAvg && countGroupbyColumn === bonneReponseCountGroupby &&
        groupbyColumn === bonneReponseGroupby &&
        q1Trou1 === bonneReponseQ1Trou1 && q1Trou2 === bonneReponseQ1Trou2 &&
        q2Trou1 === bonneReponseQ2Trou1 && q3Trou1 === bonneReponseQ3Trou1) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : COUNT est utilisé pour compter les enregistrements.",
        "Indice 2 : SUM additionne toutes les valeurs d'une colonne, AVG calcule la moyenne.",
        "Indice 3 : GROUP BY est utilisé pour regrouper les résultats par une colonne avant d'appliquer une fonction d'agrégat."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Fonctions d'Agrégats :</strong></p>
            <ul>
                <li>COUNT : commande_id</li>
                <li>SUM : montant</li>
                <li>AVG : montant</li>
                <li>COUNT avec GROUP BY : commande_id, GROUP BY client_id</li>
                <li>Q1 : La fonction COUNT est utilisée pour compter le nombre d'enregistrements dans une table.</li>
                <li>Q2 : SUM additionne toutes les valeurs d'une colonne, AVG calcule la moyenne.</li>
                <li>Q3 : GROUP BY est utilisée pour regrouper les résultats par une colonne avant d’appliquer une fonction d’agrégat.</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
