function verifierReponses() {
    const subqueryWhere = document.getElementById("subquery_where").value.trim();
    const subqueryHaving = document.getElementById("subquery_having").value.trim();
    const subqueryCorrelated = document.getElementById("subquery_correlated").value.trim();

    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseWhere = "> 500";
    const bonneReponseHaving = "> 1000";
    const bonneReponseCorrelated = ">";

    const bonneReponseQ1 = "pour filtrer en fonction de données d'une autre table";
    const bonneReponseQ2 = "une sous-requête corrélée dépend de la requête principale";
    const bonneReponseQ3 = "pour filtrer les groupes après l'agrégation";

    let resultat = "";

    if (subqueryWhere === bonneReponseWhere && subqueryHaving === bonneReponseHaving &&
        subqueryCorrelated === bonneReponseCorrelated &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Les sous-requêtes dans WHERE sont utilisées pour filtrer en fonction d'autres données.",
        "Indice 2 : Une sous-requête corrélée se réfère à la requête principale, contrairement à une non corrélée.",
        "Indice 3 : HAVING s'utilise pour filtrer les résultats agrégés."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Sous-requêtes :</strong></p>
            <ul>
                <li>Sous-requête dans WHERE : montant > 500</li>
                <li>Sous-requête avec HAVING : total_montant > 1000</li>
                <li>Sous-requête corrélée : date_commande > date_inscription</li>
                <li>Q1 : pour filtrer en fonction de données d'une autre table</li>
                <li>Q2 : une sous-requête corrélée dépend de la requête principale</li>
                <li>Q3 : pour filtrer les groupes après l'agrégation</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
