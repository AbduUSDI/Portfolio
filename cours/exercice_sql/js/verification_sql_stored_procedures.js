function verifierReponses() {
    const salaireEmploye = document.getElementById("salaire_employe").value.trim();
    const sqlCommands = document.getElementById("sql_commands").value.trim().toLowerCase();
    const createProcedure = document.getElementById("create_procedure").value.trim().toLowerCase();
    const callProcedure = document.getElementById("call_procedure").value.trim().toLowerCase();
    const dropProcedure = document.getElementById("drop_procedure").value.trim().toLowerCase();

    const bonneReponseSalaireEmploye = "45000";
    const bonneReponseSqlCommands = "commandes";
    const bonneReponseCreateProcedure = "create procedure";
    const bonneReponseCallProcedure = "call";
    const bonneReponseDropProcedure = "drop procedure";

    let resultat = "";

    if (
        salaireEmploye === bonneReponseSalaireEmploye &&
        sqlCommands === bonneReponseSqlCommands &&
        createProcedure === bonneReponseCreateProcedure &&
        callProcedure === bonneReponseCallProcedure &&
        dropProcedure === bonneReponseDropProcedure
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Utilisez CREATE PROCEDURE pour créer une procédure.",
        "Indice 2 : CALL exécute la procédure, DROP PROCEDURE la supprime.",
        "Indice 3 : Les procédures stockées centralisent les opérations SQL pour une réutilisation facile."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Procédures Stockées en SQL :</strong></p>
            <ul>
                <li><strong>Création de la procédure AjouterEmploye :</strong></li>
                <pre><code>
CREATE PROCEDURE AjouterEmploye(IN nom VARCHAR(50), IN prenom VARCHAR(50), IN salaire DECIMAL(10,2))
BEGIN
    INSERT INTO Employes (nom, prenom, salaire)
    VALUES (nom, prenom, salaire);
END;
                </code></pre>
                <li><strong>Exécution de la procédure AjouterEmploye :</strong></li>
                <pre><code>
CALL AjouterEmploye('Jean', 'Dupont', 45000);
                </code></pre>
                <li><strong>Suppression de la procédure AjouterEmploye :</strong></li>
                <pre><code>
DROP PROCEDURE AjouterEmploye;
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>
                    Une procédure stockée est un ensemble de <strong>commandes</strong> SQL regroupées pour être exécutées comme une seule unité.
                    La commande <strong>CREATE PROCEDURE</strong> permet de créer une procédure stockée, tandis que la commande <strong>CALL</strong> exécute la procédure.
                    En cas de besoin, la commande <strong>DROP PROCEDURE</strong> peut être utilisée pour supprimer une procédure stockée.
                </p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
