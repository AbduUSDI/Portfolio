function verifierReponses() {
    const selectSimpleColumns = document.getElementById("select_simple_columns").value.trim();
    const selectSimpleId = document.getElementById("select_simple_id").value.trim();
    const selectMultipleStatus = document.getElementById("select_multiple_status").value.trim();
    const selectMultipleCommandes = document.getElementById("select_multiple_commandes").value.trim();
    const selectOrder = document.getElementById("select_order").value.trim();

    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseSimpleColumns = "nom, email";
    const bonneReponseSimpleId = "1";
    const bonneReponseMultipleStatus = "actif";
    const bonneReponseMultipleCommandes = "1";
    const bonneReponseOrder = "DESC";

    const bonneReponseQ1 = "éviter de récupérer trop de données";
    const bonneReponseQ2 = "pour lier des informations de plusieurs tables";
    const bonneReponseQ3 = "affiche les données dans un ordre logique";

    let resultat = "";

    if (selectSimpleColumns === bonneReponseSimpleColumns && selectSimpleId === bonneReponseSimpleId &&
        selectMultipleStatus === bonneReponseMultipleStatus && selectMultipleCommandes === bonneReponseMultipleCommandes &&
        selectOrder === bonneReponseOrder &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Sélectionner uniquement les colonnes nécessaires optimise la requête.",
        "Indice 2 : Une jointure est utilisée pour relier des informations de plusieurs tables.",
        "Indice 3 : L'ordre (ASC ou DESC) modifie la façon dont les résultats sont affichés."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Sélections :</strong></p>
            <ul>
                <li>Sélection Simple : nom, email pour l'ID 1</li>
                <li>Sélection avec Condition Multiple : statut = 'actif' et commandes >= 1</li>
                <li>Sélection avec Tri : date_inscription DESC</li>
                <li>Sélection avec Jointure : Clients.nom, Commandes.date_commande avec INNER JOIN</li>
                <li>Q1 : éviter de récupérer trop de données</li>
                <li>Q2 : pour lier des informations de plusieurs tables</li>
                <li>Q3 : affiche les données dans un ordre logique</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
