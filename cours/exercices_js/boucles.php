<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Boucles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 5 : Boucles</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="boucles">
            <p>Écrivez des exemples d'expressions JavaScript utilisant chaque type de boucle ci-dessous et entrez vos réponses :</p>

            <!-- Formulaire pour entrer les expressions de boucles -->
            <div class="mb-3">
                <label for="forInput" class="form-label">Boucle `for` :</label>
                <input type="text" id="forInput" class="form-control" placeholder="Exemple : for (let i = 0; i < 5; i++) { console.log(i); }">
            </div>

            <div class="mb-3">
                <label for="whileInput" class="form-label">Boucle `while` :</label>
                <input type="text" id="whileInput" class="form-control" placeholder="Exemple : let i = 0; while (i < 5) { console.log(i); i++; }">
            </div>

            <div class="mb-3">
                <label for="doWhileInput" class="form-label">Boucle `do...while` :</label>
                <input type="text" id="doWhileInput" class="form-control" placeholder="Exemple : let i = 0; do { console.log(i); i++; } while (i < 5);">
            </div>

            <div class="mb-3">
                <label for="forOfInput" class="form-label">Boucle `for...of` :</label>
                <input type="text" id="forOfInput" class="form-control" placeholder="Exemple : for (const fruit of fruits) { console.log(fruit); }">
            </div>

            <div class="mb-3">
                <label for="forInInput" class="form-label">Boucle `for...in` :</label>
                <input type="text" id="forInInput" class="form-control" placeholder="Exemple : for (const prop in obj) { console.log(prop); }">
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
            const forInput = document.getElementById("forInput").value.trim();
            const whileInput = document.getElementById("whileInput").value.trim();
            const doWhileInput = document.getElementById("doWhileInput").value.trim();
            const forOfInput = document.getElementById("forOfInput").value.trim();
            const forInInput = document.getElementById("forInInput").value.trim();

            // Réponses attendues
            const bonneReponseFor = "for (let i = 0; i < 5; i++) { console.log(i); }";
            const bonneReponseWhile = "let i = 0; while (i < 5) { console.log(i); i++; }";
            const bonneReponseDoWhile = "let i = 0; do { console.log(i); i++; } while (i < 5);";
            const bonneReponseForOf = "for (const fruit of fruits) { console.log(fruit); }";
            const bonneReponseForIn = "for (const prop in obj) { console.log(prop); }";

            let resultat = "";

            if (forInput === bonneReponseFor && whileInput === bonneReponseWhile &&
                doWhileInput === bonneReponseDoWhile && forOfInput === bonneReponseForOf &&
                forInInput === bonneReponseForIn) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (forInput !== bonneReponseFor) {
                    resultat += "<p>Astuce pour `for` : Utilisez un compteur qui s'incrémente.</p>";
                }
                if (whileInput !== bonneReponseWhile) {
                    resultat += "<p>Astuce pour `while` : Utilisez une condition d'arrêt et incrémentez le compteur dans la boucle.</p>";
                }
                if (doWhileInput !== bonneReponseDoWhile) {
                    resultat += "<p>Astuce pour `do...while` : Utilisez une condition d'arrêt et incrémentez le compteur après l'affichage.</p>";
                }
                if (forOfInput !== bonneReponseForOf) {
                    resultat += "<p>Astuce pour `for...of` : Utilisez un tableau ou une liste.</p>";
                }
                if (forInInput !== bonneReponseForIn) {
                    resultat += "<p>Astuce pour `for...in` : Utilisez un objet avec des propriétés.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : La boucle `for` utilise un compteur avec let i = 0; i < 5; i++.",
                "Indice 2 : La boucle `for...of` fonctionne sur des listes ou tableaux comme fruits.",
                "Indice 3 : La boucle `for...in` est utilisée pour parcourir les propriétés d'un objet."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Boucle for : <code>for (let i = 0; i < 5; i++) { console.log(i); }</code><br>
                    Boucle while : <code>let i = 0; while (i < 5) { console.log(i); i++; }</code><br>
                    Boucle do...while : <code>let i = 0; do { console.log(i); i++; } while (i < 5);</code><br>
                    Boucle for...of : <code>for (const fruit of fruits) { console.log(fruit); }</code><br>
                    Boucle for...in : <code>for (const prop in obj) { console.log(prop); }</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
