<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Conditions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
    <style>
        #game-container {
            width: 100%;
            max-width: 600px;
            height: 200px;
            background-color: #333;
            position: relative;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid #444;
        }

        #runner {
            width: 50px;
            height: 50px;
            background-color: #ff9800;
            border-radius: 50%;
            position: absolute;
            top: 75px;
            left: 10px;
            transition: left 1s ease;
        }

        #finish-line {
            width: 10px;
            height: 200px;
            background-color: #4caf50;
            position: absolute;
            right: 10px;
            top: 0;
        }

        .question {
            margin-bottom: 20px;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Exercice : Conditions</h1>
        <div>
            <button class="btn btn-danger mb-3" onclick="recommencer()">Recommencer</button>
            <?php include '../templates/retour.php' ?>
        </div>
        <div id="game-container">
            <div id="runner"></div>
            <div id="finish-line"></div>
        </div>
        <div id="questions-container" class="mt-4">
            <!-- Les questions seront générées ici -->
        </div>
        <div id="resultat" class="mt-3"></div>
    </div>

    <script>
        const allQuestions = [
            { question: "Quelle est l'expression correcte pour une condition `if` ?", options: ["if (age >= 18)", "if age >= 18", "if (age >== 18)", "if age => 18"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une condition `if/else` ?", options: ["if (score > 50) { ... } else { ... }", "if score > 50 else", "if score > 50 { ... } else", "if (score) > 50"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une condition `if/else if/else` ?", options: ["if (x > 10) { ... } else if (x > 5) { ... } else { ... }", "if (x > 10) else if (x > 5)", "if (x > 10) { else }", "if x > 10 { ... }"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une condition `switch` ?", options: ["switch (jour) { case 'lundi': ... }", "switch jour { case lundi: ... }", "switch (jour): { case 'lundi': }", "switch jour: { case 'lundi' }"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une condition ternaire ?", options: ["age >= 18 ? 'Majeur' : 'Mineur'", "age ? 18 : majeur", "age : 18 ? 'Mineur' : 'Majeur'", "age => 18 ? 'Mineur' : 'Majeur'"], correct: 0 },
            { question: "Quelle est l'expression correcte pour vérifier une égalité stricte ?", options: ["if (x === 10)", "if (x == 10)", "if (x = 10)", "if (x >== 10)"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une double condition ?", options: ["if (x > 5 && y < 10)", "if x > 5 and y < 10", "if x > 5 || y < 10", "if x && y"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une négation ?", options: ["if (!x)", "if (x != true)", "if x === false", "if (x = false)"], correct: 0 },
            { question: "Quelle est l'expression correcte pour un switch avec défaut ?", options: ["switch (jour) { case 'lundi': ... default: ... }", "switch jour { case lundi default ... }", "switch jour { default ... }", "switch { case 'lundi' default }"], correct: 0 },
            { question: "Quelle est l'expression correcte pour vérifier plusieurs cas ?", options: ["switch (jour) { case 'lundi': case 'mardi': ... }", "switch jour { case lundi, mardi ... }", "switch (jour) { case 'lundi', 'mardi': }", "switch jour { lundi et mardi: }"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour vérifier si une variable est définie ?", options: ["if (typeof x !== 'undefined')", "if (x != null)", "if (x == defined)", "if (x exists)"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour vérifier si une chaîne n'est pas vide ?", options: ["if (str !== '')", "if (str != null)", "if (str > 0)", "if (str !== '') && (str != null)"], correct: 3 },
            { question: "Comment vérifier si une variable est un tableau ?", options: ["if (Array.isArray(var))", "if (var instanceof Array)", "if (typeof var === 'array')", "Les deux premières réponses"], correct: 3 },
            { question: "Quelle est la syntaxe correcte pour vérifier une valeur par défaut ?", options: ["if (!x) { x = 'default'; }", "if (x) { x = 'default'; }", "if (x = default)", "if x = 'default'"], correct: 0 },
            { question: "Quelle est la sortie de cette condition : `if (0)` ?", options: ["Elle est fausse", "Elle est vraie", "Elle renvoie une erreur", "Elle dépend de l'environnement"], correct: 0 },
            { question: "Comment vérifier si une valeur est une chaîne ou un nombre ?", options: ["if (typeof x === 'string' || typeof x === 'number')", "if (x == 'string' || x == 'number')", "if (x instanceof String || x instanceof Number)", "if (typeof x is 'string' or 'number')"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour vérifier si un nombre est pair ?", options: ["if (x % 2 === 0)", "if (x % 2 == 0)", "if (x / 2 == entier)", "Les deux premières réponses"], correct: 3 },
            { question: "Quelle est la sortie de `if (null)` ?", options: ["Elle est fausse", "Elle est vraie", "Elle renvoie une erreur", "Elle est indéfinie"], correct: 0 },
            { question: "Comment vérifier si un tableau contient un élément spécifique ?", options: ["if (arr.includes('valeur'))", "if ('valeur' in arr)", "if (arr.indexOf('valeur') > -1)", "Les réponses 1 et 3"], correct: 3 },
            { question: "Comment combiner plusieurs conditions pour vérifier si une valeur est entre 10 et 20 ?", options: ["if (x >= 10 && x <= 20)", "if (10 >= x >= 20)", "if (x > 10 && < 20)", "if (x => 10 & x <= 20)"], correct: 0 }
        ];

        // Fonction pour sélectionner 10 questions aléatoires
        function getRandomQuestions(questions, count) {
            const shuffled = questions.sort(() => 0.5 - Math.random());
            return shuffled.slice(0, count);
        }

        // Sélectionne 10 questions aléatoires
        const questions = getRandomQuestions(allQuestions, 10);

        let position = 10; // Position initiale du coureur
        let currentQuestion = 0; // Question actuelle
        let score = 0; // Nombre de bonnes réponses

        function afficherQuestion() {
            if (currentQuestion >= questions.length) return;

            const questionData = questions[currentQuestion];
            const container = document.getElementById('questions-container');
            container.innerHTML = `
                <div class="question">
                    <p><strong>Question ${currentQuestion + 1} :</strong> ${questionData.question}</p>
                    <div>
                        ${questionData.options.map((option, index) => 
                            `<button class="btn btn-primary me-2" onclick="verifierReponse(${index})">${index + 1}. ${option}</button>`
                        ).join('')}
                    </div>
                </div>
            `;
        }

        function verifierReponse(choix) {
            const questionData = questions[currentQuestion];
            const runner = document.getElementById('runner');
            const resultat = document.getElementById('resultat');

            if (choix === questionData.correct) {
                score++;
                position += 50; // Le bonhomme avance
                runner.style.left = position + "px";

                if (score === questions.length) {
                    resultat.innerHTML = "<div class='alert alert-success'>Félicitations ! Vous avez terminé l'exercice.</div>";
                } else {
                    resultat.innerHTML = "<div class='alert alert-success'>Bonne réponse ! Continuez.</div>";
                }
            } else {
                resultat.innerHTML = "<div class='alert alert-danger'>Mauvaise réponse. Recommencez la partie.</div>";
                document.getElementById('questions-container').classList.add('disabled');
            }

            currentQuestion++;
            if (currentQuestion < questions.length) afficherQuestion();
        }

        function recommencer() {
            position = 10;
            currentQuestion = 0;
            score = 0;
            document.getElementById('runner').style.left = position + "px";
            document.getElementById('resultat').innerHTML = "";
            document.getElementById('questions-container').classList.remove('disabled');
            afficherQuestion();
        }

        // Initialisation
        afficherQuestion();
    </script>
</body>
</html>
