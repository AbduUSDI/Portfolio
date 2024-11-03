function verifierReponses() {
    // Récupère les valeurs des champs pour les types de données
    const numericType1 = document.getElementById("numeric_type1").value.trim().toUpperCase();
    const numericType2 = document.getElementById("numeric_type2").value.trim().toUpperCase();
    const numericType3 = document.getElementById("numeric_type3").value.trim().toUpperCase();
    const textType1 = document.getElementById("text_type1").value.trim().toUpperCase();
    const textType2 = document.getElementById("text_type2").value.trim().toUpperCase();
    const textType3 = document.getElementById("text_type3").value.trim().toUpperCase();
    const dateType1 = document.getElementById("date_type1").value.trim().toUpperCase();
    const dateType2 = document.getElementById("date_type2").value.trim().toUpperCase();
    const dateType3 = document.getElementById("date_type3").value.trim().toUpperCase();
    const booleanType = document.getElementById("boolean_type").value.trim().toUpperCase();
    const binaryType = document.getElementById("binary_type").value.trim().toUpperCase();

    // Récupère les réponses aux questions
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();
    const q4 = document.getElementById("q4").value.trim().toLowerCase();

    // Réponses attendues
    const bonneReponseNumeric1 = "INT";
    const bonneReponseNumeric2 = "INT";
    const bonneReponseNumeric3 = "DECIMAL(10, 2)";
    const bonneReponseText1 = "VARCHAR(50)";
    const bonneReponseText2 = "VARCHAR(50)";
    const bonneReponseText3 = "TEXT";
    const bonneReponseDate1 = "DATE";
    const bonneReponseDate2 = "TIME";
    const bonneReponseDate3 = "TIMESTAMP";
    const bonneReponseBoolean = "BOOLEAN";
    const bonneReponseBinary = "BINARY";

    const bonneReponseQ1 = "decimal";
    const bonneReponseQ2 = "text";
    const bonneReponseQ3 = "timestamp";
    const bonneReponseQ4 = "boolean";

    let resultat = "";

    // Vérifie chaque réponse
    if (numericType1 === bonneReponseNumeric1 && numericType2 === bonneReponseNumeric2 &&
        numericType3 === bonneReponseNumeric3 && textType1 === bonneReponseText1 &&
        textType2 === bonneReponseText2 && textType3 === bonneReponseText3 &&
        dateType1 === bonneReponseDate1 && dateType2 === bonneReponseDate2 &&
        dateType3 === bonneReponseDate3 && booleanType === bonneReponseBoolean &&
        binaryType === bonneReponseBinary && q1 === bonneReponseQ1 &&
        q2 === bonneReponseQ2 && q3 === bonneReponseQ3 && q4 === bonneReponseQ4) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Utilisez INT pour les entiers comme employe_id.",
        "Indice 2 : VARCHAR(n) et TEXT sont pour les champs texte.",
        "Indice 3 : TIMESTAMP est un type de date avec fuseau horaire."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Types de Données :</strong></p>
            <ul>
                <li>Employe ID : INT</li>
                <li>Age : INT</li>
                <li>Salaire : DECIMAL(10, 2)</li>
                <li>Nom : VARCHAR(50)</li>
                <li>Description : TEXT</li>
                <li>Date Événement : DATE</li>
                <li>Horodatage : TIMESTAMP</li>
                <li>Est Actif : BOOLEAN</li>
            </ul>
            <p><strong>Questions :</strong></p>
            <ul>
                <li>Montant financier : DECIMAL</li>
                <li>Description : TEXT</li>
                <li>Date et Heure avec fuseau : TIMESTAMP</li>
                <li>Vrai/Faux : BOOLEAN</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
