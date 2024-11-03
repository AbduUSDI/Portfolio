function verifierReponses() {
    const salaireCondition = document.getElementById("salaire_condition").value.trim();
    const salaryFilter = document.getElementById("salary_filter").value.trim();

    const virtualTable = document.getElementById("virtual_table").value.trim().toLowerCase();
    const queryResult = document.getElementById("query_result").value.trim().toLowerCase();
    const simplifyQueries = document.getElementById("simplify_queries").value.trim().toLowerCase();
    const sensitiveData = document.getElementById("sensitive_data").value.trim().toLowerCase();

    const bonneReponseSalaireCondition = ">"; // Condition de salaire supérieur à 40000
    const bonneReponseSalaryFilter = ">"; // Condition de filtre de salaire supérieur à 50000

    const bonneReponseVirtualTable = "table virtuelle";
    const bonneReponseQueryResult = "requête";
    const bonneReponseSimplifyQueries = "simplifier";
    const bonneReponseSensitiveData = "données sensibles";

    let resultat = "";

    if (
        salaireCondition === bonneReponseSalaireCondition &&
        salaryFilter === bonneReponseSalaryFilter &&
        virtualTable === bonneReponseVirtualTable &&
        queryResult === bonneReponseQueryResult &&
        simplifyQueries === bonneReponseSimplifyQueries &&
        sensitiveData === bonneReponseSensitiveData
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Les vues permettent de masquer la complexité des requêtes.",
        "Indice 2 : Utilisez DROP VIEW pour supprimer une vue existante.",
        "Indice 3 : Les vues peuvent simplifier l'accès aux données tout en protégeant les informations sensibles."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Vues en SQL :</strong></p>
            <ul>
                <li><strong>Création de vue pour employés avec salaire > 40000 :</strong></li>
                <pre><code>
CREATE VIEW Vue_Employes_Salaires AS
SELECT nom, prenom, salaire
FROM Employes
WHERE salaire > 40000;
                </code></pre>
                <li><strong>Utilisation de vue pour les employés avec salaire > 50000 :</strong></li>
                <pre><code>
SELECT * FROM Vue_Employes_Salaires
WHERE salaire > 50000;
                </code></pre>
                <li><strong>Suppression de la vue :</strong></li>
                <pre><code>
DROP VIEW Vue_Employes_Salaires;
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>
                    Une vue en SQL est une <strong>table virtuelle</strong> qui affiche le résultat d'une <strong>requête</strong>. Les vues sont particulièrement utiles pour <strong>simplifier</strong> les requêtes complexes, et elles permettent de protéger les <strong>données sensibles</strong> en masquant certaines colonnes.
                </p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
