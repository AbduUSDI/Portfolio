function verifierReponses() {
    // Récupère les valeurs des champs pour les insertions
    const insertSimple = document.getElementById("insert_simple").value.trim();
    const insertMultiple1 = document.getElementById("insert_multiple1").value.trim();
    const insertMultiple2 = document.getElementById("insert_multiple2").value.trim();
    const insertMultiple3 = document.getElementById("insert_multiple3").value.trim();
    const insertDefault = document.getElementById("insert_default").value.trim();
    const insertSubquery = document.getElementById("insert_subquery").value.trim();
    const insertCondition = document.getElementById("insert_condition").value.trim();

    // Récupère les réponses aux questions
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    const q4 = document.getElementById("q4").value.trim().toLowerCase();

    // Réponses attendues
    const bonneReponseSimple = "1, 'Dupont', 'Jean', 'jean.dupont@example.com'";
    const bonneReponseMultiple1 = "2, 'Martin', 'Paul', 'paul.martin@example.com'";
    const bonneReponseMultiple2 = "3, 'Durand', 'Marie', 'marie.durand@example.com'";
    const bonneReponseMultiple3 = "4, 'Petit', 'Luc', 'luc.petit@example.com'";
    const bonneReponseDefault = "1, 'Dupont', 'Alice'";
    const bonneReponseSubquery = "client_id, nom, prenom, email";
    const bonneReponseCondition = "< '2023-01-01'";

    const bonneReponseQ1 = "réduit le nombre d'opérations";
    const bonneReponseQ2 = "évitent les erreurs";
    const bonneReponseQ3 = "pour copier des données";
    const bonneReponseQ4 = "éviter les erreurs d'insertion";

    let resultat = "";

    // Vérifie chaque réponse
    if (insertSimple === bonneReponseSimple && insertMultiple1 === bonneReponseMultiple1 &&
        insertMultiple2 === bonneReponseMultiple2 && insertMultiple3 === bonneReponseMultiple3 &&
        insertDefault === bonneReponseDefault && insertSubquery === bonneReponseSubquery &&
        insertCondition === bonneReponseCondition &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3 && q4 === bonneReponseQ4) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : VALUES après INSERT INTO définit les valeurs à insérer.",
        "Indice 2 : Une insertion multiple se fait avec plusieurs paires de valeurs.",
        "Indice 3 : Une sous-requête SELECT copie les données d'une table à une autre."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Insertions :</strong></p>
            <ul>
                <li>Insertion Simple : 1, 'Dupont', 'Jean', 'jean.dupont@example.com'</li>
                <li>Insertion Multiple : (2, 'Martin', 'Paul', 'paul.martin@example.com'), (3, 'Durand', 'Marie', 'marie.durand@example.com'), (4, 'Petit', 'Luc', 'luc.petit@example.com')</li>
                <li>Insertion avec Valeur Par Défaut : 1, 'Dupont', 'Alice'</li>
                <li>Insertion avec Sous-requête : client_id, nom, prenom, email WHERE date_inscription < '2023-01-01'</li>
                <li>Q1 : réduit le nombre d'opérations</li>
                <li>Q2 : évitent les erreurs</li>
                <li>Q3 : pour copier des données</li>
                <li>Q4 : éviter les erreurs d'insertion</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
