function verifierReponses() {
    const nomValue = document.getElementById("nom_value").value.trim().toLowerCase();
    const emailValue = document.getElementById("email_value").value.trim().toLowerCase();

    const preparedStatements = document.getElementById("prepared_statements").value.trim().toLowerCase();
    const placeholders = document.getElementById("placeholders").value.trim().toLowerCase();
    const maliciousCode = document.getElementById("malicious_code").value.trim().toLowerCase();
    const inputValidation = document.getElementById("input_validation").value.trim().toLowerCase();
    const preventInjection = document.getElementById("prevent_injection").value.trim().toLowerCase();
    const validationRules = document.getElementById("validation_rules").value.trim().toLowerCase();
    const securityVulnerabilities = document.getElementById("security_vulnerabilities").value.trim().toLowerCase();

    const bonneReponseNomValue = "dupont";
    const bonneReponseEmailValue = "dupont@example.com";

    const bonneReponsePreparedStatements = "requêtes préparées";
    const bonneReponsePlaceholders = "paramètres";
    const bonneReponseMaliciousCode = "code malveillant";
    const bonneReponseInputValidation = "validation";
    const bonneReponsePreventInjection = "prévenir";
    const bonneReponseValidationRules = "règles de validation";
    const bonneReponseSecurityVulnerabilities = "vulnérabilités de sécurité";

    let resultat = "";

    if (
        nomValue === bonneReponseNomValue &&
        emailValue === bonneReponseEmailValue &&
        preparedStatements === bonneReponsePreparedStatements &&
        placeholders === bonneReponsePlaceholders &&
        maliciousCode === bonneReponseMaliciousCode &&
        inputValidation === bonneReponseInputValidation &&
        preventInjection === bonneReponsePreventInjection &&
        validationRules === bonneReponseValidationRules &&
        securityVulnerabilities === bonneReponseSecurityVulnerabilities
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Utilisez PREPARE et EXECUTE pour sécuriser les requêtes avec des paramètres.",
        "Indice 2 : La validation des données utilisateurs peut inclure des vérifications sur les caractères autorisés.",
        "Indice 3 : Les paramètres empêchent le code malveillant d'être exécuté dans la requête SQL."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Protection contre les Injections SQL :</strong></p>
            <ul>
                <li><strong>Requêtes préparées :</strong></li>
                <pre><code>
PREPARE stmt FROM 'INSERT INTO Utilisateurs (nom, email) VALUES (?, ?)';
SET @nom = 'Dupont', @email = 'dupont@example.com';
EXECUTE stmt USING @nom, @email;
                </code></pre>
                <li><strong>Validation des entrées utilisateur :</strong></li>
                <pre><code>
if (!preg_match("/^[a-zA-Z ]*$/", $nom)) {
    echo "Nom invalide";
} else {
    /* Exécuter la requête SQL sécurisée ici */
}
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>
                    Les <strong>requêtes préparées</strong> permettent d'éviter les injections SQL en utilisant des <strong>paramètres</strong> pour les paramètres de requêtes. Cela empêche les attaquants d'insérer du <strong>code malveillant</strong> dans les requêtes SQL.
                </p>
                <p>
                    La <strong>validation</strong> des entrées utilisateur est également importante pour <strong>prévenir</strong> les attaques. En s'assurant que les données utilisateur respectent des <strong>règles de validation</strong>, on peut réduire les risques de <strong>vulnérabilités de sécurité</strong>.
                </p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
