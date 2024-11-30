<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Syntaxe Moderne ES6+</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Exercice sur la Syntaxe Moderne ES6+ en JavaScript</h1>
    <div id="game-area" class="row mt-4">
        <!-- Zone de questions -->
        <div class="col-md-6">
            <div id="question-container" class="mb-4">
                <h3>Question :</h3>
                <p id="question-text">La question s'affichera ici.</p>
            </div>
            <div id="answer-container">
                <!-- Boutons pour les réponses -->
                <div id="choices" class="d-flex flex-column gap-2"></div>
            </div>
        </div>
        <!-- Zone de dessin -->
        <div class="col-md-6 text-center">
            <div id="drawing-area">
                <svg width="200" height="400">
                    <!-- Poutre -->
                    <line x1="20" y1="380" x2="180" y2="380" stroke="black" stroke-width="3" />
                    <line x1="100" y1="380" x2="100" y2="50" stroke="black" stroke-width="3" />
                    <line x1="100" y1="50" x2="160" y2="50" stroke="black" stroke-width="3" />
                    <line x1="160" y1="50" x2="160" y2="80" stroke="black" stroke-width="3" />
                    <!-- Corde -->
                    <line id="rope" x1="160" y1="80" x2="160" y2="120" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <!-- Bonhomme -->
                    <circle id="head" cx="160" cy="140" r="20" stroke="black" stroke-width="2" fill="none" style="visibility: hidden;" />
                    <line id="body" x1="160" y1="160" x2="160" y2="220" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="left-arm" x1="160" y1="180" x2="140" y2="200" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="right-arm" x1="160" y1="180" x2="180" y2="200" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="left-leg" x1="160" y1="220" x2="140" y2="260" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="right-leg" x1="160" y1="220" x2="180" y2="260" stroke="black" stroke-width="2" style="visibility: hidden;" />
                </svg>
            </div>
        </div>
    </div>
    <!-- Zone de message -->
    <div id="message-container" class="text-center mt-4">
        <p id="game-message" class="text-muted">Bonne chance !</p>
    </div>
    <!-- Boutons -->
    <div class="text-center mt-4">
        <button class="btn btn-danger mb-3" onclick="recommencer()">Recommencer</button>
        <?php include '../templates/retour.php' ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    const questions = [
        {
            question: "Quelle est la syntaxe correcte d'une fonction fléchée ?",
            options: [
                "() => {}",
                "function => {}",
                "function() => {}",
                "() => function {}"
            ],
            answer: "() => {}"
        },
        {
            question: "Comment destructurer un objet en JavaScript ?",
            options: [
                "const { a, b } = obj;",
                "const a, b = obj;",
                "const obj = { a, b };",
                "const [a, b] = obj;"
            ],
            answer: "const { a, b } = obj;"
        },
        {
            question: "Quelle est la sortie de ce code ?\nconst arr = [1, 2, 3];\nconst [a, b] = arr;\nconsole.log(a, b);",
            options: [
                "1 2",
                "undefined undefined",
                "[1, 2] [3]",
                "Erreur"
            ],
            answer: "1 2"
        },
        {
            question: "Quelle est la syntaxe correcte pour importer une valeur exportée par défaut ?",
            options: [
                "import valeur from './module.js';",
                "import { valeur } from './module.js';",
                "import valeur = './module.js';",
                "import valeur('./module.js');"
            ],
            answer: "import valeur from './module.js';"
        },
        {
            question: "Comment créer un template de chaîne en JavaScript ?",
            options: [
                "`Ceci est une chaîne avec ${variable}`",
                "\"Ceci est une chaîne avec ${variable}\"",
                "'Ceci est une chaîne avec ${variable}'",
                "[Ceci est une chaîne avec ${variable}]"
            ],
            answer: "`Ceci est une chaîne avec ${variable}`"
        },
        {
            question: "Que permet l'opérateur spread (...) en JavaScript ?",
            options: [
                "Étirer un tableau ou un objet",
                "Concaténer deux tableaux",
                "Transformer un objet en tableau",
                "Cloner des objets uniquement"
            ],
            answer: "Étirer un tableau ou un objet"
        },
        {
            question: "Quelle est la sortie de ce code ?\n```javascript\nconst obj = { a: 1, b: 2 };\nconst copy = { ...obj, c: 3 };\nconsole.log(copy);\n```",
            options: [
                "{ a: 1, b: 2, c: 3 }",
                "{ a: 1, b: 2 }",
                "{ c: 3 }",
                "Erreur"
            ],
            answer: "{ a: 1, b: 2, c: 3 }"
        },
        {
            question: "Quelle est une différence clé entre `var` et `let` ?",
            options: [
                "`let` a une portée de bloc, `var` a une portée de fonction",
                "`let` est global, `var` est local",
                "`var` ne permet pas de réaffectation",
                "Il n'y a pas de différence"
            ],
            answer: "`let` a une portée de bloc, `var` a une portée de fonction"
        },
        {
            question: "Comment définir une classe en JavaScript ?",
            options: [
                "class NomClasse { constructor() { ... } }",
                "function NomClasse { ... }",
                "class NomClasse() { ... }",
                "class: NomClasse { ... }"
            ],
            answer: "class NomClasse { constructor() { ... } }"
        },
        {
            question: "Comment utiliser l'opérateur nullish coalescing (??) ?",
            options: [
                "Pour fournir une valeur par défaut si l'opérande gauche est null ou undefined",
                "Pour vérifier si une valeur est une chaîne",
                "Pour combiner deux tableaux",
                "Pour lancer une exception si une valeur est undefined"
            ],
            answer: "Pour fournir une valeur par défaut si l'opérande gauche est null ou undefined"
        }
    ];

    let currentQuestion = 0;
    let errors = 0;

    function updateQuestion() {
        const questionData = questions[currentQuestion];
        document.getElementById("question-text").innerText = questionData.question;

        const choicesContainer = document.getElementById("choices");
        choicesContainer.innerHTML = ""; // Réinitialiser les choix

        questionData.options.forEach(option => {
            const button = document.createElement("button");
            button.innerText = option;
            button.classList.add("btn", "btn-outline-primary");
            button.addEventListener("click", () => handleAnswer(option, button));
            choicesContainer.appendChild(button);
        });
    }

    function handleAnswer(selectedOption, button) {
        const questionData = questions[currentQuestion];

        if (selectedOption === questionData.answer) {
            button.classList.remove("btn-outline-primary");
            button.classList.add("btn-success");
            setTimeout(() => {
                currentQuestion++;
                if (currentQuestion < questions.length) {
                    updateQuestion();
                    showMessage("Bonne réponse ! Continuez.", false);
                } else {
                    showMessage("Félicitations ! Vous avez gagné.", false);
                    disableGame();
                }
            }, 1000);
        } else {
            button.classList.remove("btn-outline-primary");
            button.classList.add("btn-danger");
            errors++;
            const parts = ["rope", "head", "body", "left-arm", "right-arm", "left-leg", "right-leg"];
            if (errors <= parts.length) {
                drawPart(parts[errors - 1]);
            }
            if (errors >= 7) {
                showMessage("Dommage, vous avez perdu ! Le bonhomme est complet.", true);
                disableGame();
            } else {
                showMessage("Mauvaise réponse. Essayez encore !", true);
            }
        }
    }

    function drawPart(partId) {
        document.getElementById(partId).style.visibility = "visible";
    }

    function showMessage(message, isError = false) {
        const messageElement = document.getElementById("game-message");
        messageElement.innerText = message;
        messageElement.classList.toggle("text-danger", isError);
        messageElement.classList.toggle("text-success", !isError);
    }

    function disableGame() {
        document.getElementById("choices").innerHTML = "";
    }

    function recommencer() {
        currentQuestion = 0;
        errors = 0;
        const parts = ["rope", "head", "body", "left-arm", "right-arm", "left-leg", "right-leg"];
        parts.forEach(part => {
            document.getElementById(part).style.visibility = "hidden";
        });
        showMessage("Bonne chance !", false);
        updateQuestion();
    }

    // Initialiser le jeu
    updateQuestion();
</script>

</body>
</html>
