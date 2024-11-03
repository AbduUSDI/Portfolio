function verifierReponses() {
    // Récupère les valeurs des champs pour les contraintes
    const primaryKey = document.getElementById("primary_key").value.trim().toUpperCase();
    const uniqueKey = document.getElementById("unique_key").value.trim().toUpperCase();
    const foreignKey = document.getElementById("foreign_key").value.trim().toLowerCase();

    // Récupère les réponses aux questions
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    const q4 = document.getElementById("q4").value.trim().toLowerCase();

    // Réponses attendues
    const bonneReponsePrimaryKey = "PRIMARY KEY";
    const bonneReponseUniqueKey = "UNIQUE";
    const bonneReponseForeignKey = "client_id";

    const bonneReponseQ1 = "identification unique";
    const bonneReponseQ2 = "valeurs uniques";
    const bonneReponseQ3 = "intégrité référentielle";
    const bonneReponseQ4 = "éviter les doublons";

    let resultat = "";

    // Vérifie chaque réponse
    if (primaryKey === bonneReponsePrimaryKey && uniqueKey === bonneReponseUniqueKey &&
        foreignKey === bonneReponseForeignKey && q1 === bonneReponseQ1 &&
        q2 === bonneReponseQ2 && q3 === bonneReponseQ3 && q4 === bonneReponseQ4) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
        if (primaryKey !== bonneReponsePrimaryKey) {
            resultat += "<p>Astuce pour PRIMARY KEY : Assurez-vous d'indiquer 'PRIMARY KEY' pour la contrainte.</p>";
        }
        if (uniqueKey !== bonneReponseUniqueKey) {
            resultat += "<p>Astuce pour UNIQUE : Assurez-vous d'indiquer 'UNIQUE' pour garantir des valeurs uniques.</p>";
        }
        if (foreignKey !== bonneReponseForeignKey) {
            resultat += "<p>Astuce pour FOREIGN KEY : Référencez la colonne 'client_id' dans la table 'Clients'.</p>";
        }
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : PRIMARY KEY identifie chaque ligne de manière unique.",
        "Indice 2 : UNIQUE garantit des valeurs uniques dans une colonne.",
        "Indice 3 : FOREIGN KEY assure une relation entre deux tables."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Contraintes :</strong></p>
            <ul>
                <li>Contrainte PRIMARY KEY : PRIMARY KEY</li>
                <li>Contrainte UNIQUE : UNIQUE</li>
                <li>Contrainte FOREIGN KEY : client_id</li>
            </ul>
            <p><strong>Questions :</strong></p>
            <ul>
                <li>Question 1 : Identification unique</li>
                <li>Question 2 : Valeurs uniques</li>
                <li>Question 3 : Intégrité référentielle</li>
                <li>Question 4 : Éviter les doublons</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
