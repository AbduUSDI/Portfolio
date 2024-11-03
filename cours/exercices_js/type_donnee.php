<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Types de Données</title>
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>
    <div class="container mt-5">
        <?php include '../templates/retour.php' ?>
        <h1 class="text-center mb-5">Exercice 2 : Types de Données</h1>

        <section id="types-donnees">
            <p>Déclarez des valeurs pour les différents types de données JavaScript ci-dessous :</p>
            
            <!-- Formulaire pour entrer les types de données -->
            <div class="mb-3">
                <label for="stringInput" class="form-label">Type String (texte) :</label>
                <input type="text" id="stringInput" class="form-control" placeholder="Exemple : 'Bonjour'">
            </div>

            <div class="mb-3">
                <label for="numberInput" class="form-label">Type Number (nombre) :</label>
                <input type="text" id="numberInput" class="form-control" placeholder="Exemple : 42">
            </div>

            <div class="mb-3">
                <label for="booleanInput" class="form-label">Type Boolean (booléen) :</label>
                <input type="text" id="booleanInput" class="form-control" placeholder="Exemple : true">
            </div>

            <div class="mb-3">
                <label for="objectInput" class="form-label">Type Object (objet) :</label>
                <input type="text" id="objectInput" class="form-control" placeholder="Exemple : { nom: 'Alice', age: 30 }">
            </div>

            <div class="mb-3">
                <label for="nullInput" class="form-label">Type Null :</label>
                <input type="text" id="nullInput" class="form-control" placeholder="Exemple : null">
            </div>

            <button class="btn btn-primary" onclick="verifierReponses()">Vérifier les réponses</button>
            <div id="resultat-exercice" class="mt-3"></div>

            <!-- Boutons d'indices -->
            <div class="mt-4">
                <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
                <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
                <button class="btn btn-secondary" onclick="afficherIndice(3)">Indice 3</button>
                <div id="indice" class="mt-3"></div>
            </div>

            <!-- Bouton pour afficher la réponse -->
            <div class="mt-4">
                <button class="btn btn-warning" onclick="afficherReponse()">Afficher la réponse</button>
                <div id="reponse" class="mt-3"></div>
            </div>
        </section>
    </div>

    <script>
        function verifierReponses() {
            const stringInput = document.getElementById("stringInput").value.trim();
            const numberInput = document.getElementById("numberInput").value.trim();
            const booleanInput = document.getElementById("booleanInput").value.trim();
            const objectInput = document.getElementById("objectInput").value.trim();
            const nullInput = document.getElementById("nullInput").value.trim();

            // Réponses correctes
            const bonneReponseString = "'Bonjour'";
            const bonneReponseNumber = "42";
            const bonneReponseBoolean = "true";
            const bonneReponseObject = "{ nom: 'Alice', age: 30 }";
            const bonneReponseNull = "null";

            let resultat = "";

            // Vérification des réponses
            if (stringInput === bonneReponseString && numberInput === bonneReponseNumber &&
                booleanInput === bonneReponseBoolean && objectInput === bonneReponseObject &&
                nullInput === bonneReponseNull) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (stringInput !== bonneReponseString) {
                    resultat += "<p>Astuce pour String : Utilisez des guillemets pour encadrer le texte.</p>";
                }
                if (numberInput !== bonneReponseNumber) {
                    resultat += "<p>Astuce pour Number : Utilisez un nombre sans guillemets.</p>";
                }
                if (booleanInput !== bonneReponseBoolean) {
                    resultat += "<p>Astuce pour Boolean : Utilisez true ou false sans guillemets.</p>";
                }
                if (objectInput !== bonneReponseObject) {
                    resultat += "<p>Astuce pour Object : Utilisez une syntaxe { clé: valeur }.</p>";
                }
                if (nullInput !== bonneReponseNull) {
                    resultat += "<p>Astuce pour Null : Utilisez simplement null sans guillemets.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Une chaîne de caractères est entourée de guillemets.",
                "Indice 2 : Le type Boolean est soit true soit false.",
                "Indice 3 : Pour Null, utilisez simplement `null` sans guillemets."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponse :<br>
                    String : 'Bonjour'<br>
                    Number : 42<br>
                    Boolean : true<br>
                    Object : { nom: 'Alice', age: 30 }<br>
                    Null : null
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
