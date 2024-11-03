function verifierReponses() {
    const orderbyAscColumn = document.getElementById("orderby_asc_column").value.trim();
    const orderbyAscOrder = document.getElementById("orderby_asc_order").value.trim().toUpperCase();
    const orderbyDescColumn = document.getElementById("orderby_desc_column").value.trim();
    const orderbyDescOrder = document.getElementById("orderby_desc_order").value.trim().toUpperCase();
    const orderbyMultiColumn1 = document.getElementById("orderby_multi_column1").value.trim();
    const orderbyMultiOrder1 = document.getElementById("orderby_multi_order1").value.trim().toUpperCase();
    const orderbyMultiColumn2 = document.getElementById("orderby_multi_column2").value.trim();
    const orderbyMultiOrder2 = document.getElementById("orderby_multi_order2").value.trim().toUpperCase();

    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseAscColumn = "date_inscription";
    const bonneReponseAscOrder = "ASC";
    const bonneReponseDescColumn = "montant_total";
    const bonneReponseDescOrder = "DESC";
    const bonneReponseMultiColumn1 = "montant_total";
    const bonneReponseMultiOrder1 = "DESC";
    const bonneReponseMultiColumn2 = "nom";
    const bonneReponseMultiOrder2 = "ASC";

    const bonneReponseQ1 = "pour trier les résultats";
    const bonneReponseQ2 = "asc est croissant et desc est décroissant";
    const bonneReponseQ3 = "pour affiner le tri avec plusieurs critères";

    let resultat = "";

    if (orderbyAscColumn === bonneReponseAscColumn && orderbyAscOrder === bonneReponseAscOrder &&
        orderbyDescColumn === bonneReponseDescColumn && orderbyDescOrder === bonneReponseDescOrder &&
        orderbyMultiColumn1 === bonneReponseMultiColumn1 && orderbyMultiOrder1 === bonneReponseMultiOrder1 &&
        orderbyMultiColumn2 === bonneReponseMultiColumn2 && orderbyMultiOrder2 === bonneReponseMultiOrder2 &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : ORDER BY permet de trier selon une colonne.",
        "Indice 2 : ASC tri les résultats de manière croissante, DESC de manière décroissante.",
        "Indice 3 : Utiliser plusieurs colonnes permet de trier par plusieurs critères."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses ORDER BY :</strong></p>
            <ul>
                <li>ORDER BY Ascendant : date_inscription ASC</li>
                <li>ORDER BY Descendant : montant_total DESC</li>
                <li>ORDER BY avec plusieurs colonnes : montant_total DESC, nom ASC</li>
                <li>Q1 : pour trier les résultats</li>
                <li>Q2 : ASC est croissant et DESC est décroissant</li>
                <li>Q3 : pour affiner le tri avec plusieurs critères</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
