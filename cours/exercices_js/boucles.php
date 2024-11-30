<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Boucles</title>
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
        <h1 class="text-center">Exercice : Boucles</h1>
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
            { question: "Quelle est l'expression correcte pour une boucle for ?", options: ["for (let i = 0; i < 5; i++) { console.log(i); }", "for (let i < 5; i++) { console.log(i); }", "for (let i = 0; i < 5) { console.log(i) }", "for i = 0 to 5 { console.log(i); }"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une boucle while ?", options: ["let i = 0; while (i < 5) { console.log(i); i++; }", "let i = 0; while i < 5 { console.log(i); i++; }", "while (let i = 0; i < 5) { console.log(i); }", "while (i < 5) { i++; console.log(i); }"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une boucle do...while ?", options: ["let i = 0; do { console.log(i); i++; } while (i < 5);", "let i = 0; do { console.log(i); } while (i++ < 5);", "do { console.log(i); i++; } while (let i = 0; i < 5);", "do { console.log(i) } while (i++ < 5)"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une boucle for...of ?", options: ["for (const fruit of fruits) { console.log(fruit); }", "for fruit of fruits { console.log(fruit); }", "for (fruit of fruits) { console.log(fruit) }", "for (const fruit in fruits) { console.log(fruit); }"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une boucle for...in ?", options: ["for (const prop in obj) { console.log(prop); }", "for prop in obj { console.log(prop); }", "for (prop in obj) { console.log(prop) }", "for (const prop of obj) { console.log(prop); }"], correct: 0 },
            { question: "Quelle boucle garantit qu'elle s'exécute au moins une fois ?", options: ["do...while", "while", "for", "for...of"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une boucle infinie ?", options: ["while (true) { ... }", "for (let i = 0; i < Infinity; i++) { ... }", "for (;;) { ... }", "Les trois réponses"], correct: 3 },
            { question: "Quelle est l'expression correcte pour une boucle imbriquée ?", options: ["for (let i = 0; i < 5; i++) { for (let j = 0; j < 5; j++) { console.log(i, j); } }", "for (i < 5) { for (j < 5) { console.log(i, j); } }", "for i = 0; i < 5; i++ { for j = 0; j < 5; j++ { console.log(i, j); } }", "Les deux premières réponses"], correct: 0 },
            { question: "Quelle est l'expression correcte pour parcourir un tableau ?", options: ["for (let i = 0; i < arr.length; i++) { console.log(arr[i]); }", "for (const item in arr) { console.log(item); }", "for arr as item { console.log(item); }", "for (let item of arr) { console.log(item); }"], correct: 0 },
            { question: "Comment arrêter une boucle prématurément ?", options: ["break;", "continue;", "return;", "exit;"], correct: 0 },
            { question: "Quelle boucle parcourt directement les valeurs d'un tableau ?", options: ["for...of", "for", "while", "do...while"], correct: 0 },
            { question: "Quelle est l'expression correcte pour arrêter une boucle `while` lorsque x atteint 10 ?", options: ["while (x < 10) { ... }", "while (x != 10) { ... }", "while (x !== 10) { ... }", "while (x >= 10) { break; }"], correct: 0 },
            { question: "Quelle est la différence principale entre `for...of` et `for...in` ?", options: ["for...of parcourt les valeurs, for...in parcourt les clés", "for...of parcourt les clés, for...in parcourt les valeurs", "Les deux sont identiques", "for...of ne peut pas être utilisé avec des objets"], correct: 0 },
            { question: "Quelle est l'expression correcte pour sauter une itération dans une boucle ?", options: ["continue;", "break;", "exit;", "return;"], correct: 0 },
            { question: "Quelle boucle garantit que le bloc de code est exécuté au moins une fois ?", options: ["do...while", "while", "for", "for...in"], correct: 0 },
            { question: "Quelle est la sortie de cette boucle : `for (let i = 0; i < 3; i++) { console.log(i); }` ?", options: ["0, 1, 2", "1, 2, 3", "0, 1, 2, 3", "Erreur"], correct: 0 },
            { question: "Quelle boucle est la meilleure pour parcourir les propriétés d'un objet ?", options: ["for...in", "for...of", "while", "for"], correct: 0 },
            { question: "Comment éviter une boucle infinie avec `while` ?", options: ["Utilisez une condition d'arrêt et incrémentez une variable dans la boucle", "Utilisez break sans condition", "Utilisez continue dans chaque itération", "Utilisez une variable globale"], correct: 0 },
            { question: "Quelle est l'expression correcte pour une boucle for inversée ?", options: ["for (let i = 5; i >= 0; i--) { ... }", "for (let i = 5; i > 0; i++) { ... }", "for (i = 5; i >= 0; i--) { ... }", "for (let i; i-- > 0; i--) { ... }"], correct: 0 },
            { question: "Quelle boucle est la plus performante pour parcourir un tableau indexé ?", options: ["for", "while", "do...while", "for...in"], correct: 0 }
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
