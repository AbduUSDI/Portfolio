<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Gestion des Erreurs & Debugging</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>


<div class="container mt-5">
    <h1 class="text-center">Exercice sur la Gestion des Erreurs en JavaScript</h1>
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
            question: "Que permet le bloc try...catch en JavaScript ?",
            options: [
                "Capturer et gérer les erreurs",
                "Exécuter des fonctions de manière synchrone",
                "Remplacer les promesses",
                "Créer des erreurs personnalisées"
            ],
            answer: "Capturer et gérer les erreurs"
        },
        {
            question: "Que fait l'instruction throw en JavaScript ?",
            options: [
                "Lève une exception",
                "Interrompt une promesse",
                "Arrête immédiatement le script",
                "Crée un nouvel objet d'erreur"
            ],
            answer: "Lève une exception"
        },
        {
            question: "Comment capturer une erreur levée dans une promesse ?",
            options: [
                "Avec catch()",
                "Avec try...catch",
                "Avec throw",
                "Avec resolve()"
            ],
            answer: "Avec catch()"
        },
        {
            question: "Que contient l'objet Error en JavaScript ?",
            options: [
                "Un message et une pile d'appels (stack)",
                "Le statut HTTP de l'erreur",
                "Une méthode pour redémarrer le script",
                "Un type de valeur null"
            ],
            answer: "Un message et une pile d'appels (stack)"
        },
        {
            question: "Quelle méthode est utilisée pour créer une erreur personnalisée ?",
            options: [
                "throw new Error()",
                "Error.create()",
                "try { new Error() }",
                "new Error.custom()"
            ],
            answer: "throw new Error()"
        },
        {
            question: "Que se passe-t-il si une erreur est levée dans un bloc catch ?",
            options: [
                "Elle remonte jusqu'au niveau supérieur",
                "Elle est automatiquement ignorée",
                "Elle interrompt le script",
                "Elle est ajoutée à la pile d'appels"
            ],
            answer: "Elle remonte jusqu'au niveau supérieur"
        },
        {
            question: "Que fait un bloc finally ?",
            options: [
                "Il s'exécute toujours, qu'il y ait une erreur ou non",
                "Il capture les erreurs non gérées",
                "Il remplace les blocs catch",
                "Il s'exécute uniquement si une erreur est levée"
            ],
            answer: "Il s'exécute toujours, qu'il y ait une erreur ou non"
        },
        {
            question: "Comment gérer une erreur asynchrone avec async/await ?",
            options: [
                "Avec try...catch",
                "Avec then()",
                "Avec throw new Error()",
                "Avec resolve()"
            ],
            answer: "Avec try...catch"
        },
        {
            question: "Quelle est la sortie de ce code ?\n```javascript\ntry {\n  throw new Error('Erreur détectée');\n} catch (e) {\n  console.log(e.message);\n}\n```",
            options: ["Erreur détectée", "undefined", "null", "Erreur détectée et arrêt"],
            answer: "Erreur détectée"
        },
        {
            question: "Comment gérer les erreurs dans une promesse chaînée ?",
            options: [
                "Avec .catch() à la fin de la chaîne",
                "Avec plusieurs .then()",
                "Avec resolve()",
                "Avec un bloc finally"
            ],
            answer: "Avec .catch() à la fin de la chaîne"
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
