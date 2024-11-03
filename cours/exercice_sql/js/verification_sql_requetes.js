function verifierReponses() {
    // Récupère les valeurs des champs pour les requêtes SQL
    const selectColumns = document.getElementById("select_columns").value.trim().toLowerCase();
    const whereValue = document.getElementById("where_value").value.trim().toLowerCase();
    const limitValue = document.getElementById("limit_value").value.trim();
    const orderColumn = document.getElementById("order_column").value.trim().toLowerCase();

    // Récupère les réponses aux questions sur les commandes SQL
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    const q4 = document.getElementById("q4").value.trim().toLowerCase();

    // Réponses attendues
    const bonneReponseSelectColumns = "nom, prenom";
    const bonneReponseWhereValue = "'paris'";
    const bonneReponseLimitValue = "5";
    const bonneReponseOrderColumn = "nom";

    const bonneReponseQ1 = "insert";
    const bonneReponseQ2 = "truncate";
    const bonneReponseQ3 = "commit";
    const bonneReponseQ4 = "describe";

    let resultat = "";

    // Vérifie chaque réponse
    if (selectColumns === bonneReponseSelectColumns && whereValue === bonneReponseWhereValue &&
        limitValue === bonneReponseLimitValue && orderColumn === bonneReponseOrderColumn &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3 && q4 === bonneReponseQ4) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
        if (selectColumns !== bonneReponseSelectColumns) {
            resultat += "<p>Astuce pour SELECT : Utilisez les noms de colonnes corrects séparés par une virgule.</p>";
        }
        if (whereValue !== bonneReponseWhereValue) {
            resultat += "<p>Astuce pour WHERE : Assurez-vous que le texte est en majuscules et entre guillemets simples.</p>";
        }
        if (limitValue !== bonneReponseLimitValue) {
            resultat += "<p>Astuce pour LIMIT : Indiquez le nombre de lignes à afficher.</p>";
        }
        if (orderColumn !== bonneReponseOrderColumn) {
            resultat += "<p>Astuce pour ORDER BY : Assurez-vous de trier par nom.</p>";
        }
        if (q1 !== bonneReponseQ1) {
            resultat += "<p>Astuce pour Question 1 : Utilisez la commande pour ajouter des lignes.</p>";
        }
        if (q2 !== bonneReponseQ2) {
            resultat += "<p>Astuce pour Question 2 : Indiquez la commande qui supprime les données sans supprimer la structure.</p>";
        }
        if (q3 !== bonneReponseQ3) {
            resultat += "<p>Astuce pour Question 3 : Pensez à la commande de validation.</p>";
        }
        if (q4 !== bonneReponseQ4) {
            resultat += "<p>Astuce pour Question 4 : Utilisez la commande pour afficher la structure.</p>";
        }
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Vérifiez les noms de colonnes à sélectionner dans SELECT.",
        "Indice 2 : WHERE fonctionne avec des chaînes de texte entre guillemets simples.",
        "Indice 3 : LIMIT spécifie le nombre maximum de lignes à afficher."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponse SELECT</strong> : <code>nom, prenom</code></p>
            <p><strong>Réponse WHERE</strong> : <code>'Paris'</code></p>
            <p><strong>Réponse LIMIT</strong> : <code>5</code></p>
            <p><strong>Réponse ORDER BY</strong> : <code>nom</code></p>
            <p><strong>Commandes SQL :</strong></p>
            <ul>
                <li>Question 1 : INSERT</li>
                <li>Question 2 : TRUNCATE</li>
                <li>Question 3 : COMMIT</li>
                <li>Question 4 : DESCRIBE</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
