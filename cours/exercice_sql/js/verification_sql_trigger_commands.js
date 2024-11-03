function verifierReponses() {
    const triggerName1 = document.getElementById("trigger_name_1").value.trim().toLowerCase();
    const tableName1 = document.getElementById("table_name_1").value.trim().toLowerCase();
    const checkEmail = document.getElementById("check_email").value.trim().toLowerCase();

    const triggerName2 = document.getElementById("trigger_name_2").value.trim().toLowerCase();
    const tableName2 = document.getElementById("table_name_2").value.trim().toLowerCase();
    const historyTable = document.getElementById("history_table").value.trim().toLowerCase();
    const columnId = document.getElementById("column_id").value.trim().toLowerCase();
    const oldAmount = document.getElementById("old_amount").value.trim().toLowerCase();

    const triggerName3 = document.getElementById("trigger_name_3").value.trim().toLowerCase();

    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseTriggerName1 = "before_insert_clients";
    const bonneReponseTableName1 = "clients";
    const bonneReponseCheckEmail = "new.email is null";

    const bonneReponseTriggerName2 = "after_update_commandes";
    const bonneReponseTableName2 = "commandes";
    const bonneReponseHistoryTable = "historiquecommandes";
    const bonneReponseColumnId = "commande_id";
    const bonneReponseOldAmount = "montant";

    const bonneReponseTriggerName3 = "before_insert_clients";

    const bonneReponseQ1 = "créer";
    const bonneReponseQ2 = "supprimer";
    const bonneReponseQ3 = "conserver un historique des changements";

    let resultat = "";

    if (
        triggerName1 === bonneReponseTriggerName1 && tableName1 === bonneReponseTableName1 && checkEmail === bonneReponseCheckEmail &&
        triggerName2 === bonneReponseTriggerName2 && tableName2 === bonneReponseTableName2 && historyTable === bonneReponseHistoryTable &&
        columnId === bonneReponseColumnId && oldAmount === bonneReponseOldAmount &&
        triggerName3 === bonneReponseTriggerName3 &&
        q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou.includes("historique")
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : CREATE TRIGGER est utilisé pour créer un déclencheur.",
        "Indice 2 : DROP TRIGGER supprime un déclencheur existant.",
        "Indice 3 : Les triggers AFTER UPDATE permettent de garder un historique des modifications."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Gestion des Triggers :</strong></p>
            <ul>
                <li><strong>CREATE TRIGGER (BEFORE INSERT) :</strong></li>
                <pre><code>
CREATE TRIGGER before_insert_clients
BEFORE INSERT ON Clients
FOR EACH ROW
BEGIN
    IF NEW.email IS NULL THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Email requis';
    END IF;
END;
                </code></pre>
                <li><strong>CREATE TRIGGER (AFTER UPDATE) :</strong></li>
                <pre><code>
CREATE TRIGGER after_update_commandes
AFTER UPDATE ON Commandes
FOR EACH ROW
BEGIN
    INSERT INTO HistoriqueCommandes(commande_id, ancien_montant)
    VALUES (OLD.commande_id, OLD.montant);
END;
                </code></pre>
                <li><strong>DROP TRIGGER :</strong></li>
                <pre><code>
DROP TRIGGER before_insert_clients;
                </code></pre>
                <li><strong>Questions :</strong></li>
                <ul>
                    <li>Q1 : CREATE TRIGGER est utilisé pour <strong>créer</strong> un déclencheur qui exécute une action lors d'un événement spécifique.</li>
                    <li>Q2 : DROP TRIGGER est utilisé pour <strong>supprimer</strong> un déclencheur existant.</li>
                    <li>Q3 : AFTER UPDATE est utile pour conserver un historique des changements afin de <strong>suivre les anciennes valeurs</strong> ou pour des raisons d'audit.</li>
                </ul>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}

