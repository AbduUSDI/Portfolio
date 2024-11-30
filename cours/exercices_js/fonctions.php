<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Fonctions</title>
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
        <h1 class="text-center">Exercice : Fonctions</h1>
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
            { question: "Quelle est la syntaxe correcte pour une fonction déclarée ?", options: ["function saluer() { return 'Bonjour'; }", "const saluer = () => { return 'Bonjour'; }", "function() { return 'Bonjour'; }", "const saluer = function() { 'Bonjour'; };"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour une fonction anonyme ?", options: ["const saluer = function() { return 'Bonjour'; };", "function saluer() { return 'Bonjour'; }", "() => { return 'Bonjour'; }", "let saluer = function saluer() { 'Bonjour'; };"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour une fonction fléchée ?", options: ["const saluer = () => 'Bonjour';", "function() { return 'Bonjour'; }", "function saluer() => 'Bonjour';", "const saluer = function => { return 'Bonjour'; };"], correct: 0 },
            { question: "Quelle fonction prend des paramètres et retourne leur somme ?", options: ["function addition(a, b) { return a + b; }", "function addition() { a + b; }", "() => a + b;", "const addition = () => 'a + b';"], correct: 0 },
            { question: "Quelle fonction prend un paramètre avec une valeur par défaut ?", options: ["function saluer(nom = 'inconnu') { return 'Bonjour ' + nom; }", "function saluer() { return 'Bonjour ' + nom; }", "function saluer(nom) { return 'Bonjour ' + nom || 'inconnu'; }", "const saluer = (nom) => { 'Bonjour ' + nom; };"], correct: 0 },
            { question: "Quelle est la sortie de : `function f() { return 'Bonjour'; } console.log(f());` ?", options: ["Bonjour", "undefined", "null", "Erreur"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour une fonction auto-invoquée ?", options: ["(function() { console.log('Bonjour'); })();", "function() { console.log('Bonjour'); }();", "(() => { console.log('Bonjour'); });", "function() => { console.log('Bonjour'); };"], correct: 0 },
            { question: "Quelle est la différence entre une fonction anonyme et une fonction déclarée ?", options: ["Une fonction anonyme n'a pas de nom", "Une fonction anonyme est toujours fléchée", "Une fonction déclarée est toujours globale", "Il n'y a pas de différence"], correct: 0 },
            { question: "Quelle est la sortie de : `const f = () => { return 'Bonjour'; }; console.log(f());` ?", options: ["Bonjour", "undefined", "null", "Erreur"], correct: 0 },
            { question: "Quelle est la sortie de : `function f(a = 1) { return a + 1; } console.log(f(2));` ?", options: ["3", "4", "1", "Erreur"], correct: 0 },
            { question: "Quelle est la sortie de : `function f(a, b) { return a * b; } console.log(f(2, 3));` ?", options: ["6", "5", "undefined", "Erreur"], correct: 0 },
            { question: "Quelle est la sortie de : `const f = function() { return 'Hello'; }; console.log(typeof f);` ?", options: ["function", "string", "undefined", "object"], correct: 0 },
            { question: "Quelle est la différence principale entre une fonction fléchée et une fonction déclarée ?", options: ["Les fonctions fléchées n'ont pas de contexte `this` propre", "Les fonctions fléchées ne peuvent pas avoir de paramètres", "Les fonctions fléchées ne peuvent pas retourner une valeur", "Les fonctions fléchées doivent être anonymes"], correct: 0 },
            { question: "Quelle est la sortie de : `const f = (a, b) => a - b; console.log(f(10, 4));` ?", options: ["6", "14", "undefined", "Erreur"], correct: 0 },
            { question: "Quelle est la sortie de : `function f(a, b = 5) { return a + b; } console.log(f(3));` ?", options: ["8", "3", "undefined", "Erreur"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour retourner un tableau depuis une fonction ?", options: ["function f() { return [1, 2, 3]; }", "function f() => [1, 2, 3];", "function f() { [1, 2, 3]; }", "function f { return [1, 2, 3]; }"], correct: 0 },
            { question: "Quelle est la sortie de : `function f() { return; } console.log(f());` ?", options: ["undefined", "null", "Erreur", "Aucune valeur"], correct: 0 },
            { question: "Quelle est la sortie de : `const f = () => { let x = 10; }; console.log(f());` ?", options: ["undefined", "10", "null", "Erreur"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour une fonction nommée dans une expression ?", options: ["const f = function nom() { };", "function nom() { }", "const nom = function nom() { };", "Toutes les réponses"], correct: 3 },
            { question: "Quelle est la sortie de : `function f(a, b) { return a % b; } console.log(f(10, 3));` ?", options: ["1", "3", "10", "Erreur"], correct: 0 }
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
