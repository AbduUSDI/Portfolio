function verifierReponses() {
    const q1 = document.getElementById("q1").value.trim().toLowerCase();
    const q2 = document.getElementById("q2").value.trim().toLowerCase();
    const q3 = document.getElementById("q3").value.trim().toLowerCase();

    const bonneReponseQ1 = "inner join retourne seulement les correspondances";
    const bonneReponseQ2 = "pour obtenir toutes les données des deux tables";
    const bonneReponseQ3 = "right join garde toutes les données de la table de droite";

    let resultat = "";

    if (q1 === bonneReponseQ1 && q2 === bonneReponseQ2 && q3 === bonneReponseQ3) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : INNER JOIN ne retourne que les correspondances dans les deux tables.",
        "Indice 2 : FULL OUTER JOIN retourne toutes les données, même sans correspondances.",
        "Indice 3 : RIGHT JOIN retourne toutes les lignes de la table de droite."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Jointures :</strong></p>
            <ul>
                <li>Q1 : INNER JOIN retourne seulement les correspondances entre les deux tables, alors que LEFT JOIN retourne toutes les données de la table de gauche, même sans correspondance.</li>
                <li>Q2 : FULL OUTER JOIN est utile pour obtenir toutes les données des deux tables, même sans correspondance.</li>
                <li>Q3 : RIGHT JOIN retourne toutes les données de la table de droite, alors que LEFT JOIN retourne celles de la table de gauche.</li>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
