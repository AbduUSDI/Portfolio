<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Fonctions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 6 : Fonctions</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="fonctions">
            <p>Écrivez des exemples de fonctions JavaScript en utilisant chaque type de fonction ci-dessous et entrez vos réponses :</p>

            <!-- Formulaire pour entrer les expressions de fonctions -->
            <div class="mb-3">
                <label for="fonctionDeclareeInput" class="form-label">Fonction déclarée :</label>
                <input type="text" id="fonctionDeclareeInput" class="form-control" placeholder="Exemple : function saluer() { return 'Bonjour'; }">
            </div>

            <div class="mb-3">
                <label for="fonctionAnonymeInput" class="form-label">Fonction anonyme assignée à une variable :</label>
                <input type="text" id="fonctionAnonymeInput" class="form-control" placeholder="Exemple : const saluer = function() { return 'Bonjour'; };">
            </div>

            <div class="mb-3">
                <label for="fonctionFlecheeInput" class="form-label">Fonction fléchée :</label>
                <input type="text" id="fonctionFlecheeInput" class="form-control" placeholder="Exemple : const saluer = () => 'Bonjour';">
            </div>

            <div class="mb-3">
                <label for="fonctionParametreInput" class="form-label">Fonction avec paramètres :</label>
                <input type="text" id="fonctionParametreInput" class="form-control" placeholder="Exemple : function addition(a, b) { return a + b; }">
            </div>

            <div class="mb-3">
                <label for="fonctionParamDefautInput" class="form-label">Fonction avec paramètre par défaut :</label>
                <input type="text" id="fonctionParamDefautInput" class="form-control" placeholder="Exemple : function saluer(nom = 'inconnu') { return 'Bonjour ' + nom; }">
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
            const fonctionDeclareeInput = document.getElementById("fonctionDeclareeInput").value.trim();
            const fonctionAnonymeInput = document.getElementById("fonctionAnonymeInput").value.trim();
            const fonctionFlecheeInput = document.getElementById("fonctionFlecheeInput").value.trim();
            const fonctionParametreInput = document.getElementById("fonctionParametreInput").value.trim();
            const fonctionParamDefautInput = document.getElementById("fonctionParamDefautInput").value.trim();

            // Réponses attendues
            const bonneReponseDeclaree = "function saluer() { return 'Bonjour'; }";
            const bonneReponseAnonyme = "const saluer = function() { return 'Bonjour'; };";
            const bonneReponseFlechee = "const saluer = () => 'Bonjour';";
            const bonneReponseParametre = "function addition(a, b) { return a + b; }";
            const bonneReponseParamDefaut = "function saluer(nom = 'inconnu') { return 'Bonjour ' + nom; }";

            let resultat = "";

            if (fonctionDeclareeInput === bonneReponseDeclaree && fonctionAnonymeInput === bonneReponseAnonyme &&
                fonctionFlecheeInput === bonneReponseFlechee && fonctionParametreInput === bonneReponseParametre &&
                fonctionParamDefautInput === bonneReponseParamDefaut) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (fonctionDeclareeInput !== bonneReponseDeclaree) {
                    resultat += "<p>Astuce pour la fonction déclarée : Utilisez `function` suivi d'un nom et des accolades pour le corps.</p>";
                }
                if (fonctionAnonymeInput !== bonneReponseAnonyme) {
                    resultat += "<p>Astuce pour la fonction anonyme : Utilisez `const nom = function() { ... }`.</p>";
                }
                if (fonctionFlecheeInput !== bonneReponseFlechee) {
                    resultat += "<p>Astuce pour la fonction fléchée : Utilisez `() =>` pour déclarer la fonction.</p>";
                }
                if (fonctionParametreInput !== bonneReponseParametre) {
                    resultat += "<p>Astuce pour la fonction avec paramètres : Ajoutez des paramètres entre parenthèses.</p>";
                }
                if (fonctionParamDefautInput !== bonneReponseParamDefaut) {
                    resultat += "<p>Astuce pour la fonction avec paramètre par défaut : Utilisez `=` pour définir une valeur par défaut.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Une fonction déclarée commence avec `function nom() { ... }`.",
                "Indice 2 : Une fonction fléchée utilise la syntaxe `const nom = () => { ... }`.",
                "Indice 3 : Les paramètres par défaut se définissent avec `param = valeur`."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Fonction déclarée : <code>function saluer() { return 'Bonjour'; }</code><br>
                    Fonction anonyme : <code>const saluer = function() { return 'Bonjour'; };</code><br>
                    Fonction fléchée : <code>const saluer = () => 'Bonjour';</code><br>
                    Fonction avec paramètres : <code>function addition(a, b) { return a + b; }</code><br>
                    Fonction avec paramètre par défaut : <code>function saluer(nom = 'inconnu') { return 'Bonjour ' + nom; }</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
