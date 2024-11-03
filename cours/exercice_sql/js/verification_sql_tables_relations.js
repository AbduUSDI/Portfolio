function verifierReponses() {
    // Récupère les valeurs des champs pour les relations SQL
    const relation1_1 = document.getElementById("relation1_1").value.trim();
    const relation1_N = document.getElementById("relation1_N").value.trim();
    const relationN_N1 = document.getElementById("relationN_N1").value.trim();
    const relationN_N2 = document.getElementById("relationN_N2").value.trim();

    // Récupère les réponses aux questions sur les bonnes pratiques
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    const q4 = document.getElementById("q4").value.trim().toLowerCase();

    // Réponses attendues
    const bonneReponse1_1 = "employe_id";
    const bonneReponse1_N = "client_id";
    const bonneReponseN_N1 = "employe_id";
    const bonneReponseN_N2 = "projet_id";

    const bonneReponseQ1 = "faciliter la compréhension";
    const bonneReponseQ2 = "réduire la redondance";
    const bonneReponseQ3 = "assurer l'intégrité référentielle";
    const bonneReponseQ4 = "améliorer les performances";

    let resultat = "";

    // Vérifie chaque réponse
    if (relation1_1 === bonneReponse1_1 && relation1_N === bonneReponse1_N &&
        relationN_N1 === bonneReponseN_N1 && relationN_N2 === bonneReponseN_N2 &&
        q1.includes(bonneReponseQ1) && q2.includes(bonneReponseQ2) &&
        q3.includes(bonneReponseQ3) && q4.includes(bonneReponseQ4)) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
        if (relation1_1 !== bonneReponse1_1) {
            resultat += "<p>Astuce pour Relation 1:1 : Référencez la clé primaire de la table Employes.</p>";
        }
        if (relation1_N !== bonneReponse1_N) {
            resultat += "<p>Astuce pour Relation 1:N : Référencez la clé primaire de la table Clients.</p>";
        }
        if (relationN_N1 !== bonneReponseN_N1) {
            resultat += "<p>Astuce pour Relation N:N : Référencez la clé primaire de Employes dans Affectations.</p>";
        }
        if (relationN_N2 !== bonneReponseN_N2) {
            resultat += "<p>Astuce pour Relation N:N : Référencez la clé primaire de Projets dans Affectations.</p>";
        }
        if (!q1.includes(bonneReponseQ1)) {
            resultat += "<p>Astuce pour la Question 1 : Un nom explicite aide à mieux comprendre la structure de la base de données.</p>";
        }
        if (!q2.includes(bonneReponseQ2)) {
            resultat += "<p>Astuce pour la Question 2 : La normalisation vise à minimiser la redondance dans les données.</p>";
        }
        if (!q3.includes(bonneReponseQ3)) {
            resultat += "<p>Astuce pour la Question 3 : Les clés étrangères garantissent que chaque relation est valide.</p>";
        }
        if (!q4.includes(bonneReponseQ4)) {
            resultat += "<p>Astuce pour la Question 4 : L'indexation accélère l'accès aux données fréquemment recherchées.</p>";
        }
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Utilisez la clé primaire de la première table dans la relation 1:1.",
        "Indice 2 : Utilisez la clé primaire de la première table dans la relation 1:N.",
        "Indice 3 : Dans une relation N:N, chaque clé étrangère fait référence à la clé primaire d'une autre table.",
        "Indice 4 : Pensez aux noms de colonnes et tables qui décrivent bien leur contenu et leur utilité.",
        "Indice 5 : Normaliser signifie structurer les données pour minimiser la redondance.",
        "Indice 6 : Les clés étrangères servent à lier les tables de manière sûre et cohérente.",
        "Indice 7 : L'indexation est utile pour les colonnes souvent utilisées dans des requêtes, surtout les jointures."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponse Relation 1:1</strong> : <code>employe_id</code></p>
            <p><strong>Réponse Relation 1:N</strong> : <code>client_id</code></p>
            <p><strong>Réponse Relation N:N</strong> : <code>employe_id</code> et <code>projet_id</code></p>
            <p><strong>Bonnes pratiques</strong> :</p>
            <ul>
                <li>Question 1 : Faciliter la compréhension pour les développeurs et analystes</li>
                <li>Question 2 : Normaliser les données pour éviter la redondance et maintenir la cohérence</li>
                <li>Question 3 : Les clés étrangères garantissent l'intégrité référentielle</li>
                <li>Question 4 : L'indexation améliore les performances de recherche, surtout pour les colonnes de clé étrangère</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
