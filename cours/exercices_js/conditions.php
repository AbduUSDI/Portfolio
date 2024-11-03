<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Conditions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 4 : Conditions</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="conditions">
            <p>Écrivez des expressions conditionnelles pour chaque type de condition ci-dessous et entrez vos réponses :</p>

            <!-- Formulaire pour entrer les expressions de condition -->
            <div class="mb-3">
                <label for="ifInput" class="form-label">Condition `if` :</label>
                <input type="text" id="ifInput" class="form-control" placeholder="Exemple : if (age >= 18)">
            </div>

            <div class="mb-3">
                <label for="ifElseInput" class="form-label">Condition `if/else` :</label>
                <input type="text" id="ifElseInput" class="form-control" placeholder="Exemple : if (score > 50) { ... } else { ... }">
            </div>

            <div class="mb-3">
                <label for="ifElseIfInput" class="form-label">Condition `if/else if/else` :</label>
                <input type="text" id="ifElseIfInput" class="form-control" placeholder="Exemple : if (x > 10) { ... } else if (x > 5) { ... } else { ... }">
            </div>

            <div class="mb-3">
                <label for="switchInput" class="form-label">Condition `switch` :</label>
                <input type="text" id="switchInput" class="form-control" placeholder="Exemple : switch (jour) { case 'lundi': ... }">
            </div>

            <div class="mb-3">
                <label for="ternaireInput" class="form-label">Condition ternaire `? :` :</label>
                <input type="text" id="ternaireInput" class="form-control" placeholder="Exemple : age >= 18 ? 'Majeur' : 'Mineur'">
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
            const ifInput = document.getElementById("ifInput").value.trim();
            const ifElseInput = document.getElementById("ifElseInput").value.trim();
            const ifElseIfInput = document.getElementById("ifElseIfInput").value.trim();
            const switchInput = document.getElementById("switchInput").value.trim();
            const ternaireInput = document.getElementById("ternaireInput").value.trim();

            // Conditions de vérification des réponses
            const bonneReponseIf = "if (age >= 18)";
            const bonneReponseIfElse = "if (score > 50) { ... } else { ... }";
            const bonneReponseIfElseIf = "if (x > 10) { ... } else if (x > 5) { ... } else { ... }";
            const bonneReponseSwitch = "switch (jour) { case 'lundi': ... }";
            const bonneReponseTernaire = "age >= 18 ? 'Majeur' : 'Mineur'";

            let resultat = "";

            if (ifInput === bonneReponseIf && ifElseInput === bonneReponseIfElse &&
                ifElseIfInput === bonneReponseIfElseIf && switchInput === bonneReponseSwitch &&
                ternaireInput === bonneReponseTernaire) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (ifInput !== bonneReponseIf) {
                    resultat += "<p>Astuce pour `if` : Utilisez une simple condition comme (age >= 18).</p>";
                }
                if (ifElseInput !== bonneReponseIfElse) {
                    resultat += "<p>Astuce pour `if/else` : Ajoutez une alternative avec `else`.</p>";
                }
                if (ifElseIfInput !== bonneReponseIfElseIf) {
                    resultat += "<p>Astuce pour `if/else if/else` : Utilisez plusieurs niveaux de conditions.</p>";
                }
                if (switchInput !== bonneReponseSwitch) {
                    resultat += "<p>Astuce pour `switch` : Utilisez des cas (case) avec un identifiant comme `jour`.</p>";
                }
                if (ternaireInput !== bonneReponseTernaire) {
                    resultat += "<p>Astuce pour ternaire : Utilisez `? :` pour une expression courte.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : La condition `if` vérifie une expression simple, comme age >= 18.",
                "Indice 2 : La structure `switch` utilise des `case` pour vérifier des valeurs comme les jours de la semaine.",
                "Indice 3 : L’opérateur ternaire retourne une valeur basée sur une condition simple, comme un âge minimum."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponse :<br>
                    Condition if : <code>if (age >= 18)</code><br>
                    Condition if/else : <code>if (score > 50) { ... } else { ... }</code><br>
                    Condition if/else if/else : <code>if (x > 10) { ... } else if (x > 5) { ... } else { ... }</code><br>
                    Condition switch : <code>switch (jour) { case 'lundi': ... }</code><br>
                    Condition ternaire : <code>age >= 18 ? 'Majeur' : 'Mineur'</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
