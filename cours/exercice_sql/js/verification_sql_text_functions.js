function verifierReponses() {
    const upperColumn = document.getElementById("upper_column").value.trim().toLowerCase();
    const lowerColumn = document.getElementById("lower_column").value.trim().toLowerCase();
    const concatColumn1 = document.getElementById("concat_column1").value.trim().toLowerCase();
    const concatColumn2 = document.getElementById("concat_column2").value.trim().toLowerCase();

    const q1Trou = document.getElementById("q1_trou").value.trim().toLowerCase();
    const q2Trou = document.getElementById("q2_trou").value.trim().toLowerCase();
    const q3Trou = document.getElementById("q3_trou").value.trim().toLowerCase();

    const bonneReponseUpper = "nom";
    const bonneReponseLower = "email";
    const bonneReponseConcat1 = "prenom";
    const bonneReponseConcat2 = "nom";

    const bonneReponseQ1 = "majuscules";
    const bonneReponseQ2 = "minuscules";
    const bonneReponseQ3 = "concaténer";

    let resultat = "";

    if (upperColumn === bonneReponseUpper && lowerColumn === bonneReponseLower &&
        concatColumn1 === bonneReponseConcat1 && concatColumn2 === bonneReponseConcat2 &&
        q1Trou === bonneReponseQ1 && q2Trou === bonneReponseQ2 && q3Trou === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : UPPER convertit une chaîne en majuscules.",
        "Indice 2 : LOWER convertit une chaîne en minuscules.",
        "Indice 3 : CONCAT permet de combiner plusieurs chaînes."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Fonctions de Texte :</strong></p>
            <ul>
                <li>UPPER : nom</li>
                <li>LOWER : email</li>
                <li>CONCAT : prénom et nom</li>
                <li>Q1 : UPPER convertit une chaîne en majuscules.</li>
                <li>Q2 : LOWER convertit une chaîne en minuscules.</li>
                <li>Q3 : CONCAT concatène plusieurs chaînes en une seule.</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
