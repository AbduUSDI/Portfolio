<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Async/Await</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 8 : Async/Await</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="async-await">
            <p>Écrivez des exemples en utilisant `async` et `await`. Entrez vos réponses pour chaque section ci-dessous :</p>

            <!-- Formulaire pour entrer les exemples de Async/Await -->
            <div class="mb-3">
                <label for="asyncFunctionInput" class="form-label">Déclarez une fonction `async` nommée `fetchData` :</label>
                <input type="text" id="asyncFunctionInput" class="form-control" placeholder="Exemple : async function fetchData() { ... }">
            </div>

            <div class="mb-3">
                <label for="awaitPromiseInput" class="form-label">Utilisez `await` pour attendre la résolution d'une promesse `getUser()` dans `fetchData` :</label>
                <input type="text" id="awaitPromiseInput" class="form-control" placeholder="Exemple : const user = await getUser();">
            </div>

            <div class="mb-3">
                <label for="tryCatchInput" class="form-label">Utilisez `try/catch` pour gérer les erreurs dans `fetchData` :</label>
                <input type="text" id="tryCatchInput" class="form-control" placeholder="Exemple : try { ... } catch (error) { console.error(error); }">
            </div>

            <div class="mb-3">
                <label for="loopAsyncInput" class="form-label">Utilisez `async/await` dans une boucle pour traiter un tableau d'ID (`[1, 2, 3]`) et attendre chaque `getDataById(id)` :</label>
                <input type="text" id="loopAsyncInput" class="form-control" placeholder="Exemple : for (const id of ids) { await getDataById(id); }">
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
            const asyncFunctionInput = document.getElementById("asyncFunctionInput").value.trim();
            const awaitPromiseInput = document.getElementById("awaitPromiseInput").value.trim();
            const tryCatchInput = document.getElementById("tryCatchInput").value.trim();
            const loopAsyncInput = document.getElementById("loopAsyncInput").value.trim();

            // Réponses attendues
            const bonneReponseAsyncFunction = "async function fetchData() { ... }";
            const bonneReponseAwaitPromise = "const user = await getUser();";
            const bonneReponseTryCatch = "try { ... } catch (error) { console.error(error); }";
            const bonneReponseLoopAsync = "for (const id of ids) { await getDataById(id); }";

            let resultat = "";

            if (asyncFunctionInput === bonneReponseAsyncFunction && awaitPromiseInput === bonneReponseAwaitPromise &&
                tryCatchInput === bonneReponseTryCatch && loopAsyncInput === bonneReponseLoopAsync) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (asyncFunctionInput !== bonneReponseAsyncFunction) {
                    resultat += "<p>Astuce pour la fonction `async` : Utilisez `async function nom() { ... }`.</p>";
                }
                if (awaitPromiseInput !== bonneReponseAwaitPromise) {
                    resultat += "<p>Astuce pour `await` : Utilisez `const var = await promesse` pour attendre la promesse.</p>";
                }
                if (tryCatchInput !== bonneReponseTryCatch) {
                    resultat += "<p>Astuce pour `try/catch` : Utilisez `try { ... } catch (error) { ... }` pour gérer les erreurs.</p>";
                }
                if (loopAsyncInput !== bonneReponseLoopAsync) {
                    resultat += "<p>Astuce pour la boucle `async/await` : Utilisez `for...of` avec `await` à l'intérieur de la boucle.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Déclarez une fonction asynchrone avec `async function nom() { ... }`.",
                "Indice 2 : `await` attend qu'une promesse se résolve avant de continuer.",
                "Indice 3 : `try/catch` est utilisé pour capturer les erreurs dans les fonctions async."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Déclarez une fonction async : <code>async function fetchData() { ... }</code><br>
                    Utiliser await pour attendre une promesse : <code>const user = await getUser();</code><br>
                    Utiliser try/catch pour gérer les erreurs : <code>try { ... } catch (error) { console.error(error); }</code><br>
                    Utiliser async/await dans une boucle : <code>for (const id of ids) { await getDataById(id); }</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
