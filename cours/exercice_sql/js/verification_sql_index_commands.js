function verifierReponses() {
    const indexColumn = document.getElementById("index_column").value.trim().toLowerCase();
    const uniqueIndexColumn = document.getElementById("unique_index_column").value.trim().toLowerCase();
    const multiIndexColumn1 = document.getElementById("multi_index_column1").value.trim().toLowerCase();
    const multiIndexColumn2 = document.getElementById("multi_index_column2").value.trim().toLowerCase();

    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseIndexColumn = "nom";
    const bonneReponseUniqueIndexColumn = "email";
    const bonneReponseMultiIndexColumn1 = "nom";
    const bonneReponseMultiIndexColumn2 = "prenom";

    const bonneReponseQ1 = "créer";
    const bonneReponseQ2 = "supprimer";
    const bonneReponseQ3 = "assurer l'unicité des valeurs";

    let resultat = "";

    if (indexColumn === bonneReponseIndexColumn && uniqueIndexColumn === bonneReponseUniqueIndexColumn &&
        multiIndexColumn1 === bonneReponseMultiIndexColumn1 && multiIndexColumn2 === bonneReponseMultiIndexColumn2 &&
        q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou.includes("unicité")) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : CREATE INDEX sert à créer un index sur une ou plusieurs colonnes.",
        "Indice 2 : DROP INDEX permet de supprimer un index existant.",
        "Indice 3 : Un index unique garantit qu'il n'y ait pas de valeurs dupliquées dans une colonne."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Gestion d'Index :</strong></p>
            <ul>
                <li><strong>CREATE INDEX :</strong> idx_nom ON Clients(nom)</li>
                <li><strong>DROP INDEX :</strong> idx_nom ON Clients</li>
                <li><strong>CREATE UNIQUE INDEX :</strong> idx_unique_email ON Clients(email)</li>
                <li><strong>CREATE INDEX :</strong> idx_nom_prenom ON Clients(nom, prenom)</li>
                <li><strong>Questions :</strong></li>
                <ul>
                    <li>Q1 : CREATE INDEX est utilisé pour créer un index.</li>
                    <li>Q2 : DROP INDEX est utilisé pour supprimer un index.</li>
                    <li>Q3 : Un index unique garantit l'unicité des valeurs dans une colonne.</li>
                </ul>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
