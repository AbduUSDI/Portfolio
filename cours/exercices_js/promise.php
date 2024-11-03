<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Promesses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 7 : Promesses</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="promesses">
            <p>Écrivez des exemples JavaScript en utilisant les Promesses. Entrez vos réponses pour chaque section ci-dessous :</p>

            <!-- Formulaire pour entrer les exemples de Promesses -->
            <div class="mb-3">
                <label for="creerPromesseInput" class="form-label">Créer une promesse qui résout avec un message "Succès" :</label>
                <input type="text" id="creerPromesseInput" class="form-control" placeholder="Exemple : const promesse = new Promise((resolve, reject) => { resolve('Succès'); });">
            </div>

            <div class="mb-3">
                <label for="thenCatchInput" class="form-label">Utilisez `then` et `catch` pour gérer une promesse :</label>
                <input type="text" id="thenCatchInput" class="form-control" placeholder="Exemple : promesse.then(result => console.log(result)).catch(error => console.error(error));">
            </div>

            <div class="mb-3">
                <label for="finallyInput" class="form-label">Ajoutez un `finally` pour exécuter une action finale :</label>
                <input type="text" id="finallyInput" class="form-control" placeholder="Exemple : promesse.finally(() => console.log('Terminé')); ">
            </div>

            <div class="mb-3">
                <label for="asyncAwaitInput" class="form-label">Utilisez `async` et `await` pour attendre la résolution d'une promesse :</label>
                <input type="text" id="asyncAwaitInput" class="form-control" placeholder="Exemple : async function test() { const result = await promesse; console.log(result); }">
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
            const creerPromesseInput = document.getElementById("creerPromesseInput").value.trim();
            const thenCatchInput = document.getElementById("thenCatchInput").value.trim();
            const finallyInput = document.getElementById("finallyInput").value.trim();
            const asyncAwaitInput = document.getElementById("asyncAwaitInput").value.trim();

            // Réponses attendues
            const bonneReponseCreerPromesse = "const promesse = new Promise((resolve, reject) => { resolve('Succès'); });";
            const bonneReponseThenCatch = "promesse.then(result => console.log(result)).catch(error => console.error(error));";
            const bonneReponseFinally = "promesse.finally(() => console.log('Terminé'));";
            const bonneReponseAsyncAwait = "async function test() { const result = await promesse; console.log(result); }";

            let resultat = "";

            if (creerPromesseInput === bonneReponseCreerPromesse && thenCatchInput === bonneReponseThenCatch &&
                finallyInput === bonneReponseFinally && asyncAwaitInput === bonneReponseAsyncAwait) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (creerPromesseInput !== bonneReponseCreerPromesse) {
                    resultat += "<p>Astuce pour la création d'une promesse : Utilisez `new Promise((resolve, reject) => { ... })`.</p>";
                }
                if (thenCatchInput !== bonneReponseThenCatch) {
                    resultat += "<p>Astuce pour `then` et `catch` : Utilisez `promesse.then(...).catch(...)`.</p>";
                }
                if (finallyInput !== bonneReponseFinally) {
                    resultat += "<p>Astuce pour `finally` : Utilisez `promesse.finally(...)`.</p>";
                }
                if (asyncAwaitInput !== bonneReponseAsyncAwait) {
                    resultat += "<p>Astuce pour `async/await` : Utilisez `async function nom() { const result = await promesse; ... }`.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Pour créer une promesse, utilisez `new Promise((resolve, reject) => { ... })`.",
                "Indice 2 : La gestion des promesses se fait avec `.then()` pour les succès et `.catch()` pour les erreurs.",
                "Indice 3 : `async/await` simplifie le code pour attendre une promesse."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Créer une promesse : <code>const promesse = new Promise((resolve, reject) => { resolve('Succès'); });</code><br>
                    Utiliser then et catch : <code>promesse.then(result => console.log(result)).catch(error => console.error(error));</code><br>
                    Utiliser finally : <code>promesse.finally(() => console.log('Terminé'));</code><br>
                    Utiliser async/await : <code>async function test() { const result = await promesse; console.log(result); }</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
