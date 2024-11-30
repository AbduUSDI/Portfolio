<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Callback & Closures</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>


<div class="container mt-5">
    <h1 class="text-center">Exercice sur les Callbacks et Closures en JavaScript</h1>
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
            question: "Qu'est-ce qu'un callback ?",
            options: [
                "Une fonction passée en paramètre",
                "Une promesse",
                "Une fonction retournée par une autre",
                "Une fonction asynchrone"
            ],
            answer: "Une fonction passée en paramètre"
        },
        {
            question: "Quel est un exemple valide de callback ?",
            options: [
                "setTimeout(() => console.log('Hello'), 1000);",
                "console.log('Hello');",
                "Promise.resolve('Hello');",
                "function callback() { return 'Hello'; }"
            ],
            answer: "setTimeout(() => console.log('Hello'), 1000);"
        },
        {
            question: "Qu'est-ce qu'une closure en JavaScript ?",
            options: [
                "Une fonction qui se souvient de son contexte lexical",
                "Une fonction qui retourne une promesse",
                "Une fonction async",
                "Une méthode statique d'un objet"
            ],
            answer: "Une fonction qui se souvient de son contexte lexical"
        },
        {
            question: "Pourquoi utilise-t-on les closures ?",
            options: [
                "Pour encapsuler des données et leur état",
                "Pour gérer des promesses",
                "Pour déclarer des classes",
                "Pour utiliser des propriétés statiques"
            ],
            answer: "Pour encapsuler des données et leur état"
        },
        {
            question: "Quelle est la sortie de ce code ?\n```javascript\nfunction makeCounter() {\n  let count = 0;\n  return function() {\n    return ++count;\n  };\n}\nconst counter = makeCounter();\nconsole.log(counter());\nconsole.log(counter());\n```",
            options: ["1 et 2", "0 et 1", "undefined et 1", "Erreur"],
            answer: "1 et 2"
        },
        {
            question: "Quel est un inconvénient des callbacks ?",
            options: [
                "Callback Hell (imbriqué de fonctions)",
                "Ils sont asynchrones",
                "Ils ne fonctionnent pas avec les promesses",
                "Ils n'utilisent pas les closures"
            ],
            answer: "Callback Hell (imbriqué de fonctions)"
        },
        {
            question: "Que retourne la méthode bind() sur une fonction ?",
            options: [
                "Une nouvelle fonction avec un contexte fixé",
                "Une promesse",
                "La fonction d'origine",
                "Une erreur si utilisée sur un objet"
            ],
            answer: "Une nouvelle fonction avec un contexte fixé"
        },
        {
            question: "Comment passer plusieurs arguments à un callback dans un événement ?",
            options: [
                "En utilisant une fonction anonyme",
                "En les fixant avec apply()",
                "En retournant une closure",
                "En appelant bind()"
            ],
            answer: "En utilisant une fonction anonyme"
        },
        {
            question: "Quelle est une utilisation courante des closures ?",
            options: [
                "Créer des fonctions privées",
                "Appeler des promesses",
                "Gérer des erreurs",
                "Manipuler des objets JSON"
            ],
            answer: "Créer des fonctions privées"
        },
        {
            question: "Quelle est la sortie de ce code ?\n```javascript\nfunction outer() {\n  let x = 5;\n  return function inner() {\n    return x * 2;\n  };\n}\nconst fn = outer();\nconsole.log(fn());\n```",
            options: ["10", "5", "undefined", "Erreur"],
            answer: "10"
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