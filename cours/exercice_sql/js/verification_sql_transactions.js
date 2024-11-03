function verifierReponses() {
    const productName = document.getElementById("product_name").value.trim().toLowerCase();
    const productPrice = document.getElementById("product_price").value.trim();
    const clientName = document.getElementById("client_name").value.trim().toLowerCase();
    const clientEmail = document.getElementById("client_email").value.trim().toLowerCase();

    const atomicUnit = document.getElementById("atomic_unit").value.trim().toLowerCase();
    const beginCommand = document.getElementById("begin_command").value.trim().toLowerCase();
    const commitCommand = document.getElementById("commit_command").value.trim().toLowerCase();
    const rollbackCommand = document.getElementById("rollback_command").value.trim().toLowerCase();

    const bonneReponseAtomicUnit = "unité atomique";
    const bonneReponseBeginCommand = "begin";
    const bonneReponseCommitCommand = "commit";
    const bonneReponseRollbackCommand = "rollback";

    let resultat = "";

    if (
        atomicUnit === bonneReponseAtomicUnit &&
        beginCommand === bonneReponseBeginCommand &&
        commitCommand === bonneReponseCommitCommand &&
        rollbackCommand === bonneReponseRollbackCommand
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Une transaction commence par BEGIN et peut être validée par COMMIT.",
        "Indice 2 : ROLLBACK annule une transaction en cas d'erreur.",
        "Indice 3 : Les transactions garantissent que les opérations sont réalisées comme une unité indivisible."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Transactions SQL :</strong></p>
            <ul>
                <li><strong>Exemple de transaction avec COMMIT :</strong></li>
                <pre><code>
BEGIN;
INSERT INTO Produits (nom, prix)
VALUES ('exemple_produit', 100);
COMMIT;
                </code></pre>
                <li><strong>Exemple de transaction avec ROLLBACK :</strong></li>
                <pre><code>
BEGIN;
INSERT INTO Clients (nom, email)
VALUES ('exemple_client', 'client@example.com');
ROLLBACK;
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>
                    Une transaction en SQL est une série d'opérations exécutées comme une <strong>unité atomique</strong>.
                    La commande <strong>BEGIN</strong> démarre une transaction, tandis que la commande <strong>COMMIT</strong> valide toutes les modifications effectuées. En cas d'erreur, la commande <strong>ROLLBACK</strong> annule toutes les opérations de la transaction pour revenir à l'état initial, assurant ainsi l'intégrité des données.
                </p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
