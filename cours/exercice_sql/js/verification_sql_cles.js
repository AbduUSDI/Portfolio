function verifierReponses() {
    // Récupère les valeurs des champs pour les clés primaires et étrangères
    const primaryKey1 = document.getElementById("primary_key1").value.trim().toUpperCase();
    const foreignKey1 = document.getElementById("foreign_key1").value.trim().toLowerCase();
    const foreignKey2 = document.getElementById("foreign_key2").value.trim().toLowerCase();
    const foreignKey3 = document.getElementById("foreign_key3").value.trim().toLowerCase();

    // Récupère les réponses aux questions
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    const q4 = document.getElementById("q4").value.trim().toLowerCase();

    // Réponses attendues
    const bonneReponsePrimary1 = "PRIMARY KEY";
    const bonneReponseForeign1 = "client_id";
    const bonneReponseForeign2 = "etudiant_id";
    const bonneReponseForeign3 = "cours_id";

    const bonneReponseQ1 = "identification unique";
    const bonneReponseQ2 = "intégrité référentielle";
    const bonneReponseQ3 = "plusieurs à plusieurs";
    const bonneReponseQ4 = "éviter les incohérences";

    let resultat = "";

    // Vérifie chaque réponse
    if (primaryKey1 === bonneReponsePrimary1 && foreignKey1 === bonneReponseForeign1 &&
        foreignKey2 === bonneReponseForeign2 && foreignKey3 === bonneReponseForeign3 &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3 && q4 === bonneReponseQ4) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
        if (primaryKey1 !== bonneReponsePrimary1) {
            resultat += "<p>Astuce pour Clé Primaire : Entrez 'PRIMARY KEY' pour définir une clé primaire.</p>";
        }
        if (foreignKey1 !== bonneReponseForeign1) {
            resultat += "<p>Astuce pour Clé Étrangère : Vérifiez la colonne 'client_id' dans la table 'Commandes'.</p>";
        }
        if (foreignKey2 !== bonneReponseForeign2) {
            resultat += "<p>Astuce pour Clé Étrangère : Référencez la clé primaire de 'Etudiants' dans 'Inscription'.</p>";
        }
        if (foreignKey3 !== bonneReponseForeign3) {
            resultat += "<p>Astuce pour Clé Étrangère : Référencez la clé primaire de 'Cours' dans 'Inscription'.</p>";
        }
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : PRIMARY KEY crée une clé primaire unique pour la table.",
        "Indice 2 : FOREIGN KEY relie deux tables via une clé étrangère.",
        "Indice 3 : La table d'association utilise deux clés étrangères pour une relation N:N."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Clés :</strong></p>
            <ul>
                <li>Clé Primaire de Clients : PRIMARY KEY</li>
                <li>Clé Étrangère de Commandes : client_id</li>
                <li>Clé Étrangère de Inscription : etudiant_id</li>
                <li>Clé Étrangère de Inscription : cours_id</li>
            </ul>
            <p><strong>Questions :</strong></p>
            <ul>
                <li>Question 1 : Identification unique</li>
                <li>Question 2 : Intégrité référentielle</li>
                <li>Question 3 : Plusieurs à plusieurs</li>
                <li>Question 4 : Éviter les incohérences</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
