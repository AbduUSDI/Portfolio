function verifierReponses() {
    const indexName = document.getElementById("index_name").value.trim().toLowerCase();
    const nomValue = document.getElementById("nom_value").value.trim().toLowerCase();
    const limitValue = document.getElementById("limit_value").value.trim();
    const nomValuePrepared = document.getElementById("nom_value_prepared").value.trim().toLowerCase();
    const prenomValuePrepared = document.getElementById("prenom_value_prepared").value.trim().toLowerCase();

    const indexing = document.getElementById("indexing").value.trim().toLowerCase();
    const speedUpSearch = document.getElementById("speed_up_search").value.trim().toLowerCase();
    const indexStructure = document.getElementById("index_structure").value.trim().toLowerCase();
    const queryAnalysis = document.getElementById("query_analysis").value.trim().toLowerCase();
    const explainUsage = document.getElementById("explain_usage").value.trim().toLowerCase();
    const executionPlan = document.getElementById("execution_plan").value.trim().toLowerCase();
    const limitClause = document.getElementById("limit_clause").value.trim().toLowerCase();
    const reduceDataLoad = document.getElementById("reduce_data_load").value.trim().toLowerCase();
    const preparedStatements = document.getElementById("prepared_statements").value.trim().toLowerCase();
    const differentParameters = document.getElementById("different_parameters").value.trim().toLowerCase();

    const bonneReponseIndexName = "idx_nom";
    const bonneReponseNomValue = "dupont";
    const bonneReponseLimitValue = "10";
    const bonneReponseNomValuePrepared = "dupont";
    const bonneReponsePrenomValuePrepared = "jean";

    const bonneReponseIndexing = "indexation";
    const bonneReponseSpeedUpSearch = "accélérer";
    const bonneReponseIndexStructure = "index";
    const bonneReponseQueryAnalysis = "analyse de requêtes";
    const bonneReponseExplainUsage = "explain";
    const bonneReponseExecutionPlan = "plan d'exécution";
    const bonneReponseLimitClause = "clauses limit";
    const bonneReponseReduceDataLoad = "réduire";
    const bonneReponsePreparedStatements = "requêtes préparées";
    const bonneReponseDifferentParameters = "paramètres différents";

    let resultat = "";

    if (
        indexName === bonneReponseIndexName &&
        nomValue === bonneReponseNomValue &&
        limitValue === bonneReponseLimitValue &&
        nomValuePrepared === bonneReponseNomValuePrepared &&
        prenomValuePrepared === bonneReponsePrenomValuePrepared &&
        indexing === bonneReponseIndexing &&
        speedUpSearch === bonneReponseSpeedUpSearch &&
        indexStructure === bonneReponseIndexStructure &&
        queryAnalysis === bonneReponseQueryAnalysis &&
        explainUsage === bonneReponseExplainUsage &&
        executionPlan === bonneReponseExecutionPlan &&
        limitClause === bonneReponseLimitClause &&
        reduceDataLoad === bonneReponseReduceDataLoad &&
        preparedStatements === bonneReponsePreparedStatements &&
        differentParameters === bonneReponseDifferentParameters
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Utilisez CREATE INDEX pour créer un index sur une colonne.",
        "Indice 2 : EXPLAIN permet d'analyser le plan d'exécution d'une requête.",
        "Indice 3 : Les requêtes préparées améliorent la performance lors de répétitions."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Optimisation des Requêtes :</strong></p>
            <ul>
                <li><strong>Création d'index :</strong></li>
                <pre><code>
CREATE INDEX idx_nom ON Employes(nom);
                </code></pre>
                <li><strong>Analyse de requête :</strong></li>
                <pre><code>
EXPLAIN SELECT * FROM Employes WHERE nom = 'Dupont';
                </code></pre>
                <li><strong>Limitation du résultat :</strong></li>
                <pre><code>
SELECT * FROM Employes LIMIT 10;
                </code></pre>
                <li><strong>Requêtes préparées :</strong></li>
                <pre><code>
PREPARE stmt FROM 'INSERT INTO Employes (nom, prenom) VALUES (?, ?)';
SET @nom = 'Dupont', @prenom = 'Jean';
EXECUTE stmt USING @nom, @prenom;
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>
                    L'<strong>indexation</strong> est une technique qui permet d'<strong>accélérer</strong> les recherches dans une table en créant des <strong>index</strong>.
                    L'<strong>analyse de requêtes</strong> à l'aide de <strong>EXPLAIN</strong> permet de comprendre le <strong>plan d'exécution</strong> de la requête et de repérer les goulots d'étranglement.
                </p>
                <p>
                    En utilisant des <strong>clauses LIMIT</strong> pour limiter les résultats, on peut <strong>réduire</strong> la charge de données traitées. Les <strong>requêtes préparées</strong> permettent d'exécuter plusieurs fois la même requête avec des <strong>paramètres différents</strong>, ce qui améliore les performances et la sécurité.
                </p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}

