function verifierReponses() {
    const havingCondition = document.getElementById("having_condition").value.trim();
    const havingCountCondition = document.getElementById("having_count_condition").value.trim();

    const havingClause = document.getElementById("having_clause").value.trim().toLowerCase();
    const filterGroups = document.getElementById("filter_groups").value.trim().toLowerCase();
    const groupBy = document.getElementById("group_by").value.trim().toLowerCase();
    const whereClause = document.getElementById("where_clause").value.trim().toLowerCase();
    const aggregatedResults = document.getElementById("aggregated_results").value.trim().toLowerCase();

    const bonneReponseHavingCondition = ">"; // Condition de prix moyen supérieur à 50
    const bonneReponseHavingCountCondition = ">"; // Condition de plus de 5 commandes

    const bonneReponseHavingClause = "having";
    const bonneReponseFilterGroups = "filtrer";
    const bonneReponseGroupBy = "group by";
    const bonneReponseWhereClause = "where";
    const bonneReponseAggregatedResults = "résultats agrégés";

    let resultat = "";

    if (
        havingCondition === bonneReponseHavingCondition &&
        havingCountCondition === bonneReponseHavingCountCondition &&
        havingClause === bonneReponseHavingClause &&
        filterGroups === bonneReponseFilterGroups &&
        groupBy === bonneReponseGroupBy &&
        whereClause === bonneReponseWhereClause &&
        aggregatedResults === bonneReponseAggregatedResults
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : HAVING s'utilise après GROUP BY pour filtrer les résultats agrégés.",
        "Indice 2 : Utilisez une condition de comparaison (comme > ou =) dans la clause HAVING.",
        "Indice 3 : WHERE s'applique aux lignes individuelles avant l'agrégation, HAVING filtre après."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Clause HAVING :</strong></p>
            <ul>
                <li><strong>Requête avec HAVING pour prix moyen supérieur à 50 :</strong></li>
                <pre><code>
SELECT categorie, AVG(prix) AS prix_moyen
FROM Produits
GROUP BY categorie
HAVING prix_moyen > 50;
                </code></pre>
                <li><strong>Requête avec HAVING pour clients ayant passé plus de 5 commandes :</strong></li>
                <pre><code>
SELECT client_id, COUNT(commande_id) AS nombre_commandes
FROM Commandes
GROUP BY client_id
HAVING nombre_commandes > 5;
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>
                    La clause <strong>HAVING</strong> est utilisée pour <strong>filtrer</strong> les groupes de données après avoir appliqué la clause <strong>GROUP BY</strong>.
                    Contrairement à la clause <strong>WHERE</strong>, qui agit sur les lignes individuelles, la clause HAVING permet de filtrer les <strong>résultats agrégés</strong> après l'agrégation.
                </p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
