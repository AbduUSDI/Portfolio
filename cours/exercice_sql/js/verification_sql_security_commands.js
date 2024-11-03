function verifierReponses() {
    const permissionSelect = document.getElementById("permission_select").value.trim().toUpperCase();
    const userName1 = document.getElementById("user_name_1").value.trim().toLowerCase();
    const permissionsMultiple = document.getElementById("permissions_multiple").value.trim().toUpperCase();
    const userName2 = document.getElementById("user_name_2").value.trim().toLowerCase();
    const permissionsRole = document.getElementById("permissions_role").value.trim().toUpperCase();
    const userName3 = document.getElementById("user_name_3").value.trim().toLowerCase();

    const principle = document.getElementById("principle").value.trim().toLowerCase();
    const leastPrivilege = document.getElementById("least_privilege").value.trim().toLowerCase();
    const necessaryPermissions = document.getElementById("necessary_permissions").value.trim().toLowerCase();
    const securityRisks = document.getElementById("security_risks").value.trim().toLowerCase();
    const useOfRoles = document.getElementById("use_of_roles").value.trim().toLowerCase();
    const roles = document.getElementById("roles").value.trim().toLowerCase();
    const permissionsManagement = document.getElementById("permissions_management").value.trim().toLowerCase();
    const groupPermissions = document.getElementById("group_permissions").value.trim().toLowerCase();

    const bonneReponsePermissionSelect = "SELECT";
    const bonneReponseUserName1 = "utilisateur";
    const bonneReponsePermissionsMultiple = "INSERT, UPDATE";
    const bonneReponseUserName2 = "utilisateur";
    const bonneReponsePermissionsRole = "SELECT, INSERT, UPDATE";
    const bonneReponseUserName3 = "utilisateur";

    const bonneReponsePrinciple = "principe";
    const bonneReponseLeastPrivilege = "moindre privilège";
    const bonneReponseNecessaryPermissions = "permissions nécessaires";
    const bonneReponseSecurityRisks = "risques de sécurité";
    const bonneReponseUseOfRoles = "utilisation";
    const bonneReponseRoles = "rôles";
    const bonneReponsePermissionsManagement = "permissions";
    const bonneReponseGroupPermissions = "groupes de permissions";

    let resultat = "";

    if (
        permissionSelect === bonneReponsePermissionSelect &&
        userName1 === bonneReponseUserName1 &&
        permissionsMultiple === bonneReponsePermissionsMultiple &&
        userName2 === bonneReponseUserName2 &&
        permissionsRole === bonneReponsePermissionsRole &&
        userName3 === bonneReponseUserName3 &&
        principle === bonneReponsePrinciple &&
        leastPrivilege === bonneReponseLeastPrivilege &&
        necessaryPermissions === bonneReponseNecessaryPermissions &&
        securityRisks === bonneReponseSecurityRisks &&
        useOfRoles === bonneReponseUseOfRoles &&
        roles === bonneReponseRoles &&
        permissionsManagement === bonneReponsePermissionsManagement &&
        groupPermissions === bonneReponseGroupPermissions
    ) {
        resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
    } else {
        resultat = "<div class='alert alert-danger'>Certaines réponses sont incorrectes. Veuillez vérifier vos réponses.</div>";
    }
    document.getElementById("resultat-exercice").innerHTML = resultat;
}

function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : GRANT est utilisé pour accorder une permission comme SELECT à un utilisateur.",
        "Indice 2 : REVOKE permet de retirer une permission précédemment accordée.",
        "Indice 3 : Le principe du moindre privilège réduit les risques en limitant les accès aux seules permissions nécessaires."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

function afficherReponse() {
    const reponse = `
        <div class='alert alert-warning'>
            <p><strong>Réponses Gestion des Permissions et Rôles :</strong></p>
            <ul>
                <li><strong>GRANT SELECT :</strong> Accorder la permission SELECT sur Employes à 'utilisateur'@'localhost'.</li>
                <pre><code>
GRANT SELECT ON Employes TO 'utilisateur'@'localhost';
                </code></pre>
                <li><strong>REVOKE INSERT, UPDATE :</strong> Révoquer les permissions INSERT et UPDATE sur Commandes pour 'utilisateur'@'localhost'.</li>
                <pre><code>
REVOKE INSERT, UPDATE ON Commandes FROM 'utilisateur'@'localhost';
                </code></pre>
                <li><strong>CREATE ROLE Gestionnaire :</strong> Créer un rôle avec des permissions spécifiques et les accorder.</li>
                <pre><code>
CREATE ROLE Gestionnaire;
GRANT SELECT, INSERT, UPDATE ON Employes TO Gestionnaire;
                </code></pre>
                <li><strong>Assigner le rôle :</strong> Assigner le rôle Gestionnaire à un utilisateur.</li>
                <pre><code>
GRANT Gestionnaire TO 'utilisateur'@'localhost';
                </code></pre>
                <li><strong>DROP ROLE :</strong> Supprimer le rôle Gestionnaire.</li>
                <pre><code>
DROP ROLE IF EXISTS Gestionnaire;
                </code></pre>
                <li><strong>Texte à trous :</strong></li>
                <p>Le principe du moindre privilège consiste à accorder seulement les permissions nécessaires aux utilisateurs pour minimiser les risques de sécurité. L'utilisation de rôles permet de simplifier la gestion des permissions en attribuant des groupes de permissions aux utilisateurs en fonction de leurs responsabilités.</p>
            </ul>
        </div>
    `;
    document.getElementById("reponse").innerHTML = reponse;
}
