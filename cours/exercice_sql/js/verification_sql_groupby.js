function verifierReponses() {
    const groupbyCount = document.getElementById("groupby_count").value.trim();
    const groupbySum = document.getElementById("groupby_sum").value.trim();
    const groupbyAvg = document.getElementById("groupby_avg").value.trim();
    const groupbyHaving = document.getElementById("groupby_having").value.trim();

    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseCount = "client_id";
    const bonneReponseSum = "client_id";
    const bonneReponseAvg = "produit";
    const bonneReponseHaving = "> 500";

    const bonneReponseQ1 = "pour regrouper les données en fonction d'une colonne";
    const bonneReponseQ2 = "group by regroupe les données, having filtre les groupes";
    const bonneReponseQ3 = "pour calculer la somme ou la moyenne dans chaque groupe";

    let resultat = "";

    if (groupbyCount === bonneReponseCount && groupbySum === bonneReponseSum &&
        groupbyAvg === bonneReponseAvg && groupbyHaving === bonneReponseHaving &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : GROUP BY permet de regrouper les données par valeur unique d'une colonne.",
        "Indice 2 : HAVING filtre les groupes après l'agrégation de données.",
        "Indice 3 : SUM et AVG calculent des valeurs dans chaque groupe."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses GROUP BY :</strong></p>
            <ul>
                <li>GROUP BY avec COUNT : client_id</li>
                <li>GROUP BY avec SUM : client_id</li>
                <li>GROUP BY avec AVG : produit</li>
                <li>GROUP BY avec HAVING : > 500</li>
                <li>Q1 : pour regrouper les données en fonction d'une colonne</li>
                <li>Q2 : GROUP BY regroupe les données, HAVING filtre les groupes après l'agrégation</li>
                <li>Q3 : pour calculer la somme ou la moyenne dans chaque groupe</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
