function verifierReponses() {
    const updateSimple = document.getElementById("update_simple").value.trim();
    const updateSimpleId = document.getElementById("update_simple_id").value.trim();
    const updateMultiple = document.getElementById("update_multiple").value.trim();
    const updateMultipleCondition = document.getElementById("update_multiple_condition").value.trim();
    const updateConditionComplex = document.getElementById("update_condition_complex").value.trim();
    const updateComplexCondition = document.getElementById("update_complex_condition").value.trim();

    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseSimple = "jean.dupont@newdomain.com";
    const bonneReponseSimpleId = "1";
    const bonneReponseMultiple = "actif";
    const bonneReponseMultipleCondition = "inactif";
    const bonneReponseComplex = "1.05";
    const bonneReponseComplexCondition = "10";

    const bonneReponseQ1 = "éviter les erreurs";
    const bonneReponseQ2 = "toutes les données peuvent être affectées";
    const bonneReponseQ3 = "lorsque des critères spécifiques sont requis";

    let resultat = "";

    if (updateSimple === bonneReponseSimple && updateSimpleId === bonneReponseSimpleId &&
        updateMultiple === bonneReponseMultiple && updateMultipleCondition === bonneReponseMultipleCondition &&
        updateConditionComplex === bonneReponseComplex && updateComplexCondition === bonneReponseComplexCondition &&
        q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : WHERE permet de cibler une mise à jour spécifique.",
        "Indice 2 : Une mise à jour multiple utilise une même requête pour plusieurs enregistrements.",
        "Indice 3 : Utiliser une condition spécifique pour des opérations précises."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Mises à Jour :</strong></p>
            <ul>
                <li>Mise à jour Simple : jean.dupont@newdomain.com pour l'ID 1</li>
                <li>Mise à jour Multiple : 'actif' où statut = 'inactif'</li>
                <li>Mise à jour avec Condition Complexe : salaire = salaire * 1.05 pour ancienneté > 10 ans</li>
                <li>Q1 : éviter les erreurs</li>
                <li>Q2 : toutes les données peuvent être affectées</li>
                <li>Q3 : lorsque des critères spécifiques sont requis</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
