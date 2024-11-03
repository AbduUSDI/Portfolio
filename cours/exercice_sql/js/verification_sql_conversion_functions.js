function verifierReponses() {
    const castType = document.getElementById("cast_type").value.trim().toLowerCase();
    const convertType = document.getElementById("convert_type").value.trim().toLowerCase();
    const combinedCastType = document.getElementById("combined_cast_type").value.trim().toLowerCase();
    const combinedConvertType = document.getElementById("combined_convert_type").value.trim().toLowerCase();

    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();

    const bonneReponseCastType = "decimal";
    const bonneReponseConvertType = "string";
    const bonneReponseCombinedCastType = "decimal";
    const bonneReponseCombinedConvertType = "string";

    const bonneReponseQ1 = "type";
    const bonneReponseQ2 = "format";

    let resultat = "";

    if (castType === bonneReponseCastType && convertType === bonneReponseConvertType &&
        combinedCastType === bonneReponseCombinedCastType && combinedConvertType === bonneReponseCombinedConvertType &&
        q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : CAST convertit d'un type à un autre.",
        "Indice 2 : CONVERT peut également spécifier un format de sortie."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Fonctions de Conversion :</strong></p>
            <ul>
                <li>CAST : montant en DECIMAL</li>
                <li>CONVERT : date en STRING</li>
                <li>Q1 : CAST convertit un type en un autre.</li>
                <li>Q2 : CONVERT permet de spécifier un format de sortie.</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
