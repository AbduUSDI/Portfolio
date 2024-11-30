<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Types de Données</title>
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
        <h1 class="text-center">Exercice : Types de Données</h1>
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
            { question: "Quel est le type de 'Hello' ?", options: ["String", "Number", "Boolean", "Object"], correct: 0 },
            { question: "Quelle est la sortie de typeof 42 ?", options: ["String", "Number", "Object", "Null"], correct: 1 },
            { question: "Quel est le type de true ?", options: ["Object", "Number", "Boolean", "Undefined"], correct: 2 },
            { question: "Quel est le type de { a: 1, b: 2 } ?", options: ["Object", "Array", "String", "Null"], correct: 0 },
            { question: "Quelle est la sortie de typeof null ?", options: ["Object", "Null", "Undefined", "Number"], correct: 0 },
            { question: "Quel est le type d'une variable non définie ?", options: ["Null", "Undefined", "Object", "String"], correct: 1 },
            { question: "Quelle est la sortie de typeof NaN ?", options: ["Number", "Null", "Undefined", "String"], correct: 0 },
            { question: "Quel est le type de '42' ?", options: ["Number", "String", "Boolean", "Object"], correct: 1 },
            { question: "Quel est le type d'un tableau ?", options: ["Object", "Array", "Undefined", "String"], correct: 0 },
            { question: "Quelle est la sortie de typeof function() {} ?", options: ["Object", "Function", "String", "Undefined"], correct: 1 },
            { question: "Quel type représente une chaîne vide ('') ?", options: ["String", "Null", "Undefined", "Boolean"], correct: 0 },
            { question: "Quelle est la sortie de typeof undefined ?", options: ["Null", "Undefined", "Object", "Boolean"], correct: 1 },
            { question: "Quel type représente false ?", options: ["Boolean", "Null", "Undefined", "String"], correct: 0 },
            { question: "Quelle est la sortie de typeof 3.14 ?", options: ["Number", "String", "Object", "Boolean"], correct: 0 },
            { question: "Quel type représente une valeur non attribuée ?", options: ["Null", "Undefined", "Object", "Number"], correct: 1 }
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
