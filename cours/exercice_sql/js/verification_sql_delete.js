function verifierReponses() {
    const deleteSimpleId = document.getElementById("delete_simple_id").value.trim();
    const deleteMultipleStatus = document.getElementById("delete_multiple_status").value.trim();
    const deleteMultipleCommandes = document.getElementById("delete_multiple_commandes").value.trim();
    const deleteSubqueryDate = document.getElementById("delete_subquery_date").value.trim();

    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseSimpleId = "1";
    const bonneReponseMultipleStatus = "inactif";
    const bonneReponseMultipleCommandes = "0";
    const bonneReponseSubqueryDate = "< '2022-01-01'";

    const bonneReponseQ1 = "éviter les suppressions accidentelles";
    const bonneReponseQ2 = "toutes les données peuvent être supprimées";
    const bonneReponseQ3 = "pour cibler des enregistrements spécifiques";

    let resultat = "";

    if (deleteSimpleId === bonneReponseSimpleId &&
        deleteMultipleStatus === bonneReponseMultipleStatus &&
        deleteMultipleCommandes === bonneReponseMultipleCommandes &&
        deleteSubqueryDate === bonneReponseSubqueryDate &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : WHERE est essentiel pour spécifier quel enregistrement supprimer.",
        "Indice 2 : Une suppression sans condition supprime tous les enregistrements.",
        "Indice 3 : Les sous-requêtes permettent de cibler des enregistrements liés à des critères précis."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Suppressions :</strong></p>
            <ul>
                <li>Suppression Simple : ID = 1</li>
                <li>Suppression avec Condition Multiple : statut = 'inactif' et commandes = 0</li>
                <li>Suppression avec Sous-requête : date_commande < '2022-01-01'</li>
                <li>Q1 : éviter les suppressions accidentelles</li>
                <li>Q2 : toutes les données peuvent être supprimées</li>
                <li>Q3 : pour cibler des enregistrements spécifiques</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
