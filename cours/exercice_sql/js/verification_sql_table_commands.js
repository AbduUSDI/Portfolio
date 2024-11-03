function verifierReponses() {
    const clientIdType = document.getElementById("client_id_type").value.trim().toLowerCase();
    const nomType = document.getElementById("nom_type").value.trim().toLowerCase();
    const emailType = document.getElementById("email_type").value.trim().toLowerCase();
    const produitIdType = document.getElementById("produit_id_type").value.trim().toLowerCase();
    const nomProduitType = document.getElementById("nom_produit_type").value.trim().toLowerCase();
    const prixType = document.getElementById("prix_type").value.trim().toLowerCase();

    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseClientIdType = "int";
    const bonneReponseNomType = "varchar(50)";
    const bonneReponseEmailType = "varchar(100)";
    const bonneReponseProduitIdType = "int";
    const bonneReponseNomProduitType = "varchar(50)";
    const bonneReponsePrixType = "decimal(10,2)";

    const bonneReponseQ1 = "créer";
    const bonneReponseQ2 = "supprimer";
    const bonneReponseQ3 = "pour éviter des erreurs si la table existe déjà ou n'existe pas";

    let resultat = "";

    if (clientIdType === bonneReponseClientIdType && nomType === bonneReponseNomType && emailType === bonneReponseEmailType &&
        produitIdType === bonneReponseProduitIdType && nomProduitType === bonneReponseNomProduitType && prixType === bonneReponsePrixType &&
        q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou.includes("éviter")) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : CREATE TABLE sert à créer une nouvelle table.",
        "Indice 2 : DROP TABLE permet de supprimer une table existante.",
        "Indice 3 : IF EXISTS et IF NOT EXISTS permettent d'éviter des erreurs si la table existe déjà ou non."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Gestion de Tables :</strong></p>
            <ul>
                <li><strong>CREATE TABLE Clients :</strong></li>
                <ul>
                    <li>client_id : INT</li>
                    <li>nom : VARCHAR(50)</li>
                    <li>email : VARCHAR(100)</li>
                </ul>
                <li><strong>CREATE TABLE Produits IF NOT EXISTS :</strong></li>
                <ul>
                    <li>produit_id : INT</li>
                    <li>nom_produit : VARCHAR(50)</li>
                    <li>prix : DECIMAL(10,2)</li>
                </ul>
                <li><strong>DROP TABLE :</strong> Utilisé pour supprimer une table existante.</li>
                <li><strong>Questions :</strong></li>
                <ul>
                    <li>Q1 : CREATE TABLE est utilisé pour créer une nouvelle table.</li>
                    <li>Q2 : DROP TABLE est utilisé pour supprimer une table existante.</li>
                    <li>Q3 : IF EXISTS et IF NOT EXISTS sont utilisés pour éviter des erreurs si la table existe déjà ou non.</li>
                </ul>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
